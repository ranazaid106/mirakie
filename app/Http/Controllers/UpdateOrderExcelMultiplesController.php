<?php

namespace App\Http\Controllers;   



use App\Models\Role;
use App\Models\Order;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use App\Models\CopyShortOrder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelMultiplesExport;

class UpdateOrderExcelMultiplesController extends Controller
{
    public function generateExcelFile(Request $request)
    {
        // dd($request->all());
     $datass =  explode(',',$request->join_selected_values );
    $orders = CopyShortOrder::select("*",
    'copy_short_orders.id',
    'copy_short_orders.created_at',
    DB::raw('(select name from users where copy_short_orders.user_id  = users.id ) as user_name'),
    // DB::raw('(select created_at from copy_short_orders where copy_short_orders.user_id  = users.id ) as user_create_date'),
    )
    ->leftJoin("users","copy_short_orders.user_id","users.id")
    ->leftJoin("products","copy_short_orders.short_product","products.id")
    ->whereIn('copy_short_orders.id', $datass)  
    ->orderBy('copy_short_orders.id', 'ASC')  
    ->get();


    $array = json_decode(json_encode($orders), true);


$uniqueItems = collect($array)->unique('user_id')->values()->all();

// dd($array);

    $new_array = array();
        $i=0;
        foreach($uniqueItems as $this_array){


            $UserStat = UserStatus::where('user_id', $this_array['user_id'])->first();
            $order_role = Role::where('id', $UserStat->status)->first();
            $originalDate = $this_array['created_at'];
            // Parse the original date and format it to 'Y-m-d'
            $formattedDate = \Carbon\Carbon::parse($originalDate)->format('Y-m-d');
            $orders_addition = CopyShortOrder::select("*",
            'copy_short_orders.id',
            'copy_short_orders.created_at',
            DB::raw('(select name from users where copy_short_orders.user_id  = users.id ) as user_name'),
            // DB::raw('(select created_at from copy_short_orders where copy_short_orders.short_product  = products.id ) as user_create_date'),
            )
            ->leftJoin("users","copy_short_orders.user_id","users.id")
            ->leftJoin("products","copy_short_orders.short_product","products.id")
            ->where('copy_short_orders.user_id', $this_array['user_id'])  
            ->whereDate('copy_short_orders.created_at', $formattedDate)
            ->orderBy('copy_short_orders.id', 'ASC')  
            ->get();

            $orders_additions = json_decode(json_encode($orders_addition), true);
// dd($orders_additions);


            $new_array[$i++][] = $this_array['name'];
            $new_array[$i++][] = $this_array['short_country'];
            $x = 1;
            $new_array[$i++][] = [''];
            foreach($orders_additions as $ord_additions){
            $new_array[$i++][] = 'Confirmation'.$x.' :'. $ord_additions['comfirmation'];
            $new_array[$i++][] = 'Status'.$x.' :'. $ord_additions['status_payment'];
            $new_array[$i++][] = 'Commission'.$x.' :'. $ord_additions['commision'];
            $new_array[$i++][] = 'Reason'.$x.' :'. $ord_additions['reason'];
            $new_array[$i++][] = 'Delivery Date'.$x.' :'. $ord_additions['short_delivery_date'];
            $x++;
            $new_array[$i++][] = [''];
            }
          $new_array[$i++][] = [''];
            $new_array[$i++][] =  $this_array['short_post_code'];
            $new_array[$i++][] = [''];
         
            $new_array[$i++][] = $this_array['user_name'];

            $new_array[$i++][] = [''];
            $new_array[$i++][] = ['-----------------'];
            $new_array[$i++][] = [''];
       
        }

        $array = $new_array;

 // Define custom column names for the Excel file
 $columns = [
    // 'ID', 'Order Number', 'Customer Id', 'User Id', 'Note', 'Price', 'Created At', 'Updated At', 'Product Id', 'Qty', 'Delivery Status', 'Delivery Date', 'Order Id', 'Select Country', 'Select Product', 'Mattress Size', 'Select Mattress', 'Ottoman Design', 'Ottoman Color', 'Ottoman Fabric', 'Gaslift Size', 'Gaslift Design', 'Headboard Size', 'Headboard Design', 'Headboard Color', 'Headboard Fabric', 'Without Diamond Size', 'Without Diamond Color', 'Without Diamond Fabric', 'Without Diamond Storage', 'Without Diamond Base', 'Without Diamond Mattress', 'With Diamond Size', 'With Diamond Design', 'With Diamond Color', 'With Diamond Fabric', 'With Diamond Button Diamond', 'With Diamond Storage', 'With Diamond Base', 'With Diamond Mattress', 'Ottoman Divan Size', 'Ottoman Divan Headboard', 'Ottoman Divan Color', 'Ottoman Divan Fabric', 'Ottoman Divan Mattress', 'Divan Size', 'Divan Headboard', 'Divan Color', 'Divan Fabric', 'Divan Storage', 'Divan Mattress', 'Monaco Divan Size', 'Monaco Divan Headboard', 'Monaco Divan Color', 'Monaco Divan Fabric', 'Monaco Divan Storage', 'Monaco Divan Mattress', 'First Name', 'Last Name', 'Email', 'Address', 'Phone Number', 'Social Account', 'Post Code',
];

        // Generate Excel file using Laravel Excel package
        return Excel::download(new ExcelMultiplesExport( $array , $columns), 'sample_file.xlsx');


        
    }
}

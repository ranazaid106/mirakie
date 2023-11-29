<?php

namespace App\Http\Controllers;   



use App\Models\Role;
use App\Models\Order;
use App\Models\shortorder;
use App\Models\UserStatus;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelMultiplesExport;
use App\Exports\SampleExport; // Create this export class in Step 3

class OrderExcelMultiplesController extends Controller
{
    public function generateExcelFile(Request $request)
    {
// dd($request->all());

    $datass =  explode(',',$request->join_selected_values );
    $orders = shortorder::select("*",
    'shortorders.id',
    DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
    DB::raw('(select created_at from shortorders where shortorders.short_product  = shortorders.id ) as user_create_date'),
    )
    ->leftJoin("users","shortorders.user_id","users.id")
    ->leftJoin("products","shortorders.short_product","products.id")
    ->whereIn('shortorders.id', $datass)  
    ->orderBy('shortorders.id', 'ASC')  
    ->get();

    $array = json_decode(json_encode($orders), true);
// $uniqueItems = collect($array)->unique('user_id')->values()->all();

            $new_array = array();
            $i=0;
         foreach($array as $this_array){
            // dd($this_array);

            // dd($this_array['short_delivery_date']);
            // $UserStat = UserStatus::where('user_id', $this_array['user_id'])->first();
            // $order_role = Role::where('id', $UserStat->status)->first();
            // $originalDate = $this_array['short_delivery_date'];
            // // Parse the original date and format it to 'Y-m-d'
            // $formattedDate = \Carbon\Carbon::parse($originalDate)->format('Y-m-d');
            // $orders_addition = shortorder::select("*",
            // 'shortorders.id',
            // DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'), )
            // ->leftJoin("users","shortorders.user_id","users.id")
            // ->leftJoin("products","shortorders.short_product","products.id")
            // ->where('shortorders.user_id', $this_array['user_id'])  
            // ->whereDate('shortorders.created_at', $formattedDate)
            // ->whereDate('shortorders.short_delivery_date', $formattedDate)
            // ->where('shortorders.short_delivery_date', $this_array['short_delivery_date'])
            // ->orderBy('shortorders.id', 'ASC')  
            // ->get();
        //    dd($orders_addition);


            // $orders_additions = json_decode(json_encode($orders_addition), true);

            // dd($orders_additions);

            $new_array[$i++][] = $this_array['short_country'];
            $new_array[$i++][] = $this_array['name'];
            $new_array[$i++][] = $this_array['short_post_code'];
         
            //  $new_array[$i++][] = [''];
            // foreach($orders_additions as $ord_additions){
            $new_array[$i++][] = $this_array['short_order_message'];
            $new_array[$i++][] = $this_array['short_delivery_date'];
         
            //  $new_array[$i++][] = [''];
            // }
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

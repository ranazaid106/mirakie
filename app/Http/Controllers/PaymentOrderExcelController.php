<?php
namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\shortorder;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use App\Models\CopyShortOrder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelMultiplesExport;

class PaymentOrderExcelController extends Controller
{
    public function exportUsers(Request $request , $id )
    {

        $item = CopyShortOrder::select("*",
        'copy_short_orders.id',
        DB::raw('(select name from users where copy_short_orders.user_id  = users.id ) as user_name'),
        // DB::raw('(select created_at from copy_short_orders where copy_short_orders.short_product  = copy_short_orders.id ) as user_create_date'),
        )
        ->leftJoin("users","copy_short_orders.user_id","users.id")
        ->leftJoin("products","copy_short_orders.short_product","products.id")
        ->where('copy_short_orders.id', $request->id)  
        ->get();
        
        // dd($item);
  
        $new_array = array();
        foreach($item as $this_array){

            $UserStat = UserStatus::where('user_id', $this_array['user_id'])->first();
            $order_role = Role::where('id', $UserStat->status)->first();

            $new_array[0][] = 'Product Name :'.$this_array['name'];
            $new_array[1][] = 'Country Name :'.$this_array['short_country'];
            $new_array[3][] = 'Status :'.$this_array['status_payment'];
            $new_array[4][] = 'Commission :'.$this_array['commision'];
            $new_array[6][] = 'Delivery Date :'.$this_array['short_delivery_date'];
            $new_array[7][] = 'Post Code :'.$this_array['short_post_code'];
            $new_array[8][] = ''.$order_role->name.' : '.$this_array['user_name'];
         
        }
 $columns = [
    // 'ID', 'Order Number', 'Customer Id', 'User Id', 'Note', 'Price', 'Created At', 'Updated At', 'Product Id', 'Qty', 'Delivery Status', 'Delivery Date', 'Order Id', 'Select Country', 'Select Product', 'Mattress Size', 'Select Mattress', 'Ottoman Design', 'Ottoman Color', 'Ottoman Fabric', 'Gaslift Size', 'Gaslift Design', 'Headboard Size', 'Headboard Design', 'Headboard Color', 'Headboard Fabric', 'Without Diamond Size', 'Without Diamond Color', 'Without Diamond Fabric', 'Without Diamond Storage', 'Without Diamond Base', 'Without Diamond Mattress', 'With Diamond Size', 'With Diamond Design', 'With Diamond Color', 'With Diamond Fabric', 'With Diamond Button Diamond', 'With Diamond Storage', 'With Diamond Base', 'With Diamond Mattress', 'Ottoman Divan Size', 'Ottoman Divan Headboard', 'Ottoman Divan Color', 'Ottoman Divan Fabric', 'Ottoman Divan Mattress', 'Divan Size', 'Divan Headboard', 'Divan Color', 'Divan Fabric', 'Divan Storage', 'Divan Mattress', 'Monaco Divan Size', 'Monaco Divan Headboard', 'Monaco Divan Color', 'Monaco Divan Fabric', 'Monaco Divan Storage', 'Monaco Divan Mattress', 'First Name', 'Last Name', 'Email', 'Address', 'Phone Number', 'Social Account', 'Post Code',
];
        $array = $new_array;
    
        return Excel::download(new ExcelMultiplesExport($array , $columns), 'sample_file.xlsx');
    }
}






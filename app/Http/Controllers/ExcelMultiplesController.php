<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelMultiplesExport;
use App\Exports\SampleExport; // Create this export class in Step 3

class ExcelMultiplesController extends Controller
{
    public function generateExcelFile(Request $request)
    {

        // $data = [
        //     ['Name', 'Email'],
        //     ['John Doe', 'john@example.com'],
          
          
        // ];


      
     $datass =  explode(',',$request->join_selected_values );
    $datas =  explode(',',$request->customer_values );

    // $colors_arr = array();

    $orders = Order::select(
        'customers.first_name',
        'customers.address',
        'customers.post_code',
        'customers.phone_number',
        'orderdetails.select_country',
        'products.name as product_name',
        DB::raw("CONCAT_WS('', 
            COALESCE(orderdetails.mattress_size, ''), 
            COALESCE(orderdetails.select_mattress, ''), 
            COALESCE(orderdetails.ottoman_design, ''), 
            COALESCE(orderdetails.ottoman_color, ''), 
            COALESCE(orderdetails.ottoman_fabric, ''), 
            COALESCE(orderdetails.gaslift_size, ''), 
            COALESCE(orderdetails.gaslift_design, ''), 
            COALESCE(orderdetails.headboard_size, ''), 
            COALESCE(orderdetails.headboard_design, ''), 
            COALESCE(orderdetails.headboard_color, ''), 
            COALESCE(orderdetails.headboard_fabric, ''), 
            COALESCE(orderdetails.without_diamond_size, ''), 
            COALESCE(orderdetails.without_diamond_color, ''), 
            COALESCE(orderdetails.without_diamond_fabric, ''), 
            COALESCE(orderdetails.without_diamond_storage, ''), 
            COALESCE(orderdetails.without_diamond_base, ''), 
            COALESCE(orderdetails.without_diamond_mattress, ''), 
            COALESCE(orderdetails.with_diamond_size, ''), 
            COALESCE(orderdetails.with_diamond_design, ''), 
            COALESCE(orderdetails.with_diamond_color, ''), 
            COALESCE(orderdetails.with_diamond_fabric, ''), 
            COALESCE(orderdetails.with_diamond_button_diamond, ''), 
            COALESCE(orderdetails.with_diamond_storage, ''), 
            COALESCE(orderdetails.with_diamond_base, ''), 
            COALESCE(orderdetails.with_diamond_mattress, ''), 
            COALESCE(orderdetails.ottoman_divan_size, ''), 
            COALESCE(orderdetails.ottoman_divan_headboad, ''), 
            COALESCE(orderdetails.ottoman_divan_color, ''), 
            COALESCE(orderdetails.ottoman_divan_fabric, ''), 
            COALESCE(orderdetails.ottoman_divan_mattress, ''), 
            COALESCE(orderdetails.divan_size, ''), 
            COALESCE(orderdetails.divan_headboard, ''), 
            COALESCE(orderdetails.divan_color, ''), 
            COALESCE(orderdetails.divan_fabric, ''), 
            COALESCE(orderdetails.divan_storage, ''), 
            COALESCE(orderdetails.divan_mattress, ''), 
            COALESCE(orderdetails.monaco_divan_size, ''), 
            COALESCE(orderdetails.monaco_divan_headboard, ''), 
            COALESCE(orderdetails.monaco_divan_color, ''), 
            COALESCE(orderdetails.monaco_divan_fabric, ''), 
            COALESCE(orderdetails.monaco_divan_storage, ''), 
            COALESCE(orderdetails.monaco_divan_mattress, '')
        ) as design"),
        'orders.price',
        'orders.delivery_date',
        'orders.note',
        'users.name'
    )
    ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
    ->leftJoin("customers","customers.id","orders.customer_id")
    ->leftJoin("products","products.id","orders.product_id")
    ->leftJoin("users","users.id","orders.user_id")
    ->whereIn('orderdetails.order_id', $datass)
    ->whereIn('orders.id', $datass)    
    ->whereIn('customers.id', $datas)
    ->orderby('orders.id','ASC')   
    ->get();
    $array = json_decode(json_encode($orders), true);

   

    // $new_array = array();
    // foreach($array as $this_array){
    //     $new_array[0][] = $this_array['first_name'];
    //     $new_array[1][] = $this_array['address'];
    //     $new_array[2][] = $this_array['post_code'];
    //     $new_array[4][] = $this_array['phone_number'];
    //     $new_array[5][] = $this_array['select_country'];
    //     $new_array[6][] = $this_array['product_name'];
    //     $new_array[7][] = $this_array['design'];
    //     $new_array[8][] = $this_array['price'];
    //     $new_array[9][] = $this_array['delivery_date'];
    //     $new_array[10][] = $this_array['note'];
    //     $new_array[11][] = $this_array['name'];
    // }

    // $array = $new_array;



    $new_array = array();
        $i=0;
        foreach($array as $this_array){
          
            $new_array[$i++][] = $this_array['first_name'];
            $new_array[$i++][] = $this_array['address'];
            $new_array[$i++][] = $this_array['post_code'];
            $new_array[$i++][] = $this_array['phone_number'];
            $new_array[$i++][] = $this_array['select_country'];
            $new_array[$i++][] = $this_array['product_name'];
            $new_array[$i++][] = $this_array['design'];
            $new_array[$i++][] = $this_array['price'];
            $new_array[$i++][] = $this_array['delivery_date'];
            $new_array[$i++][] = $this_array['note'];
            $new_array[$i++][] = $this_array['name'];
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

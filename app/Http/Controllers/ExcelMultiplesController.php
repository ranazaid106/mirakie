<?php

namespace App\Http\Controllers;   



use App\Models\Role;
use App\Models\Order;
use App\Models\UserStatus;
use App\Models\Orderdetail;
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
// dd($datas);
    // $datas1 = array_unique($datas);
// dd($uniqueArray);
    // $colors_arr = array();
    $orders = Order::select(
        DB::raw('(select user_id from orders where orderdetails.order_id  = orders.id ) as new_user_id'),
        'customers.first_name',
        'customers.address',
        'customers.id',
        'customers.post_code',
        'orders.created_at',
        'orders.qty',
        'customers.phone_number',
        'orderdetails.select_country',              	
        'products.name as product_name',
        DB::raw("CONCAT_WS('', 
        NULLIF(COALESCE(orderdetails.Mattress, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.mattress_size, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.select_mattress, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.Ottoman, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.ottoman_design, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.ottoman_color, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.ottoman_fabric, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.Bed, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.Gaslift, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.gaslift_size, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.gaslift_design, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.Headboard, ''), ' '), '   ',
        NULLIF(COALESCE(orderdetails.headboard_size, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.headboard_design, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.headboard_color, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.headboard_fabric, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.Design, ''), ''), ' ',
        NULLIF(COALESCE(orderdetails.Without_diamond_button, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.without_diamond_size, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.without_diamond_design, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.without_diamond_color, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.without_diamond_fabric, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.without_diamond_storage, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.without_diamond_base, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.without_diamond_mattress, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.With_diamond_button, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.with_diamond_size, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.with_diamond_design, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.with_diamond_color, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.with_diamond_fabric, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.with_diamond_button_diamond, ' '), ''), ' ',
        NULLIF(COALESCE(orderdetails.with_diamond_storage, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.with_diamond_base, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.with_diamond_mattress, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.Divan, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.Ottoman_divan, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.ottoman_divan_size, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.ottoman_divan_headboad, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.ottoman_divan_color, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.ottoman_divan_fabric, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.ottoman_divan_mattress, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.Divan_form, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.divan_size, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.divan_headboard, ''), ' '), '   ',
        NULLIF(COALESCE(orderdetails.divan_color, ''), ' '), '   ',
        NULLIF(COALESCE(orderdetails.divan_fabric, ''), ''), ' ',
        NULLIF(COALESCE(orderdetails.divan_storage, ''), ''), ' ',
        NULLIF(COALESCE(orderdetails.divan_mattress, ''), ''), ' ',
        NULLIF(COALESCE(orderdetails.Manaco_divan, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.monaco_divan_size, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.monaco_divan_headboard, ''), ' '), ' ',
        NULLIF(COALESCE(orderdetails.monaco_divan_color, ''), ''), ' ',
        NULLIF(COALESCE(orderdetails.monaco_divan_fabric, ''), ''), ' ',
        NULLIF(COALESCE(orderdetails.monaco_divan_storage, ''), ''), ' ',
        NULLIF(COALESCE(orderdetails.monaco_divan_mattress, ''), '')
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





$uniqueItems = collect($array)->unique('id')->values()->all();

// dd($uniqueItems);

    $new_array = array();
        $i=0;
        foreach($uniqueItems as $this_array){



            $UserStat = UserStatus::where('user_id', $this_array['new_user_id'])->first();
                
            $order_role = Role::where('id', $UserStat->status)->first();

            // dd($order_role->name);

            // if ($this_array['id'] == $this_array['id']) {
                // This will exit the loop when $i equals 2
          

                // Ignore this iteration and continue to the next one
           

            $originalDate = $this_array['created_at'];
            // Parse the original date and format it to 'Y-m-d'
            $formattedDate = \Carbon\Carbon::parse($originalDate)->format('Y-m-d');
            $orders_addition = Order::select(
                'orders.note',
                'orders.qty',
                'orders.delivery_date',
                DB::raw('(select created_at from orders where orderdetails.order_id  = orders.id ) as order_create_date'),
                // 'orders.created_at',
                'orders.price',
                DB::raw("CONCAT_WS('', 
                NULLIF(COALESCE(orderdetails.Mattress, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.mattress_size, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.select_mattress, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.Ottoman, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.ottoman_design, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.ottoman_color, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.ottoman_fabric, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.Bed, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.Gaslift, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.gaslift_size, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.gaslift_design, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.Headboard, ''), ' '), '   ',
                NULLIF(COALESCE(orderdetails.headboard_size, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.headboard_design, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.headboard_color, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.headboard_fabric, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.Design, ''), ''), ' ',
                NULLIF(COALESCE(orderdetails.Without_diamond_button, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.without_diamond_size, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.without_diamond_design, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.without_diamond_color, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.without_diamond_fabric, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.without_diamond_storage, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.without_diamond_base, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.without_diamond_mattress, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.With_diamond_button, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.with_diamond_size, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.with_diamond_design, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.with_diamond_color, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.with_diamond_fabric, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.with_diamond_button_diamond, ' '), ''), ' ',
                NULLIF(COALESCE(orderdetails.with_diamond_storage, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.with_diamond_base, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.with_diamond_mattress, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.Divan, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.Ottoman_divan, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.ottoman_divan_size, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.ottoman_divan_headboad, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.ottoman_divan_color, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.ottoman_divan_fabric, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.ottoman_divan_mattress, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.Divan_form, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.divan_size, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.divan_headboard, ''), ' '), '   ',
                NULLIF(COALESCE(orderdetails.divan_color, ''), ' '), '   ',
                NULLIF(COALESCE(orderdetails.divan_fabric, ''), ''), ' ',
                NULLIF(COALESCE(orderdetails.divan_storage, ''), ''), ' ',
                NULLIF(COALESCE(orderdetails.divan_mattress, ''), ''), ' ',
                NULLIF(COALESCE(orderdetails.Manaco_divan, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.monaco_divan_size, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.monaco_divan_headboard, ''), ' '), ' ',
                NULLIF(COALESCE(orderdetails.monaco_divan_color, ''), ''), ' ',
                NULLIF(COALESCE(orderdetails.monaco_divan_fabric, ''), ''), ' ',
                NULLIF(COALESCE(orderdetails.monaco_divan_storage, ''), ''), ' ',
                NULLIF(COALESCE(orderdetails.monaco_divan_mattress, ''), '')
            ) as design")
            )
            ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
            ->where('orders.customer_id', $this_array['id'])
            ->whereDate('orders.created_at', $formattedDate)
            ->orderby('orders.id','ASC')  
            ->get();
        

            $orders_additions = json_decode(json_encode($orders_addition), true);
            // dd($orders_additions);
            $new_array[$i++][] =  'Customer Name : '.$this_array['first_name'];
            $new_array[$i++][] = 'Address : '.$this_array['address'];
            $new_array[$i++][] = 'Post Code : '.$this_array['post_code'];
            $new_array[$i++][] = 'Phone No : '.$this_array['phone_number'];
            $new_array[$i++][] = 'Country Name : '.$this_array['select_country'];
            $new_array[$i++][] = 'Product Name : '.$this_array['product_name']; 
             $new_array[$i++][] = [''];
            // $total_price = 0;
             $x = 1;
            foreach($orders_additions as $ord_additions){
            $new_array[$i++][] = 'Order '.$x.' :'. $ord_additions['design'];
             $new_array[$i++][] = 'Quantity : '.$ord_additions['qty'];
             $new_array[$i++][] = 'Price : '.$ord_additions['price'];
            $new_array[$i++][] = 'Create Date : '.$ord_additions['order_create_date'];
             $new_array[$i++][] = 'Delivery Date : '.$ord_additions['delivery_date'];
                $new_array[$i++][] = 'Notes '.$x.' : '.$ord_additions['note'];
            //    $total_price +=  $ord_additions['price'];
            $x++;
             $new_array[$i++][] = [''];
            }
            // $new_array[$i++][] =  'Total price : ' . $total_price;   

                // $j = 1;
            // foreach($orders_additions as $ord_additions){
            //     if($ord_additions['note'] != ""){
            //         $new_array[$i++][] = 'Notes '.$j.' : '.$ord_additions['note'];
            //     }
            //     $j++;
               
            // }

           
            $new_array[$i++][] =  ''.$order_role->name.' : '.$this_array['name'];
            $new_array[$i++][] = [''];
            $new_array[$i++][] = ['-----------------'];
            $new_array[$i++][] = [''];


            // break;
            // $this_array['id'] ++;
           
        // }
      
       
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

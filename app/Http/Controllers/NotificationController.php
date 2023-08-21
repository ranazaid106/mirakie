<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function notification()
    {



        // user notification show


        $user = Auth::user(); // Get the currently logged in user
        $users_id = Auth::id(); // Get the currently logged in user
        $orders = UserStatus::where('user_id', $users_id)->first();
        $order_role = Role::where('id', $orders->status)->first();
        
        $notificationHTML = '';
        
        if ($order_role->name === 'Super Admin') {
            // Code for Super Admin users
            $Users = User::where('alert', '0')->get();
            $Users_count = User::where('alert', '0')->count();
        
            foreach ($Users as $notification) {
                $notificationDate = Carbon::createFromFormat('Y-m-d H:i:s', $notification['created_at']);
                $formattedDate = $notificationDate->format('F j, Y H:i');
        
                $notificationHTML .= '<a  onclick="usersNotification(this)" data-id="'.$notification['id'].'" data-name="user" ><div class="notifi__item">';
                $notificationHTML .= '<div class="bg-c1 img-cir img-40">';
                $notificationHTML .= ' <i class="zmdi zmdi-account-box"></i>';
                $notificationHTML .= '</div>';
                $notificationHTML .= '<div class="content">';
        
                // Check if 'seen' is 0 or 1 and conditionally display the notification
                if ($notification['seen'] == 0) {
                    $notificationHTML .= '<p> You got a User notification <span style="color: red">New</span></p>';
                } else {
                    $notificationHTML .= '<p> You got a User notification </p>';
                }
                $notificationHTML .= '<span class="date">' . $formattedDate . '</span>';
                $notificationHTML .= '</div>';
                $notificationHTML .= '</div></a>';
            }
        } else {
            // Code for non-Super Admin users
            $Users = User::where('id', $users_id)->where('alert', '0')->get();
            $Users_count = User::where('id', $users_id)->where('alert', '0')->count();
        


           foreach ($Users as $notification) {
                $notificationDate = Carbon::createFromFormat('Y-m-d H:i:s', $notification['created_at']);
                $formattedDate = $notificationDate->format('F j, Y H:i');
        
                $notificationHTML .= '<a  onclick="usersNotification(this)" data-id="'.$notification['id'].'" data-name="user" ><div class="notifi__item">';
                $notificationHTML .= '<div class="bg-c1 img-cir img-40">';
                $notificationHTML .= ' <i class="zmdi zmdi-account-box"></i>';
                $notificationHTML .= '</div>';
                $notificationHTML .= '<div class="content">';
        
                // Check if 'seen' is 0 or 1 and conditionally display the notification
                if ($notification['seen'] == 0) {
                    $notificationHTML .= '<p> You got a User notification <span style="color: red">New</span></p>';
                } else {
                    $notificationHTML .= '<p> You got a User notification </p>';
                }
                $notificationHTML .= '<span class="date">' . $formattedDate . '</span>';
                $notificationHTML .= '</div>';
                $notificationHTML .= '</div></a>';
            }



        }
        


        // user notification show



 // Customer notification show

 $user = Auth::user(); // Get the currently logged in user
 $users_id = Auth::id(); // Get the currently logged in user
 $orders = UserStatus::where('user_id', $users_id)->first();
 $order_role = Role::where('id', $orders->status)->first();
 
 $notificationCustomer = '';
 
 if ($order_role->name === 'Super Admin') {


        $Customers = Customer::where('alert', '0')->get();

        $Customerscount = Customer::where('alert', '0')->count();


foreach ($Customers as $Customer) {
    $notificationDatecustomer = Carbon::createFromFormat('Y-m-d H:i:s', $Customer['created_at']);
    $formattedDatecustomer = $notificationDatecustomer->format('F j, Y H:i');

    $notificationCustomer .= '<a onclick="usersNotification(this)" data-id="'.$Customer['id'].'" data-name="customer" ><div class="notifi__item" >';
    $notificationCustomer .= '<div class="bg-c1 img-cir img-40">';
    $notificationCustomer .= '<i class="fas fa-user-plus"></i>';
    $notificationCustomer .= '</div>';
    $notificationCustomer .= '<div class="content">';

    // Check if 'seen' is 0 or 1 and conditionally display the notification
    if ($Customer['seen'] == 0) {
        $notificationCustomer .= '<p> You got a Customer notification <span style="color: red">New</span></p>';
    }else{
        $notificationCustomer .= '<p> You got a User notification </p>';
    }
    $notificationCustomer .= '<span class="date">' . $formattedDatecustomer . '</span>';
    $notificationCustomer .= '</div>';
    $notificationCustomer .= '</div></a>';
}

 }else{


    $Customers = Order::select("*")
    ->leftJoin("customers","customers.id","orders.customer_id")
    ->where('orders.user_id', $users_id)
    ->where('customers.alert', '0')->get();


    $Customerscount = Order::select("*")
    ->leftJoin("customers","customers.id","orders.customer_id")
    ->where('orders.user_id', $users_id)
    ->where('customers.alert', '0')
    ->count();


      
    $Customerscount = Customer::where('id', $users_id)->where('alert', '0')->count();

    foreach ($Customers as $Customer) {
        $notificationDatecustomer = Carbon::createFromFormat('Y-m-d H:i:s', $Customer['created_at']);
        $formattedDatecustomer = $notificationDatecustomer->format('F j, Y H:i');
    
        $notificationCustomer .= '<a onclick="usersNotification(this)" data-id="'.$Customer['id'].'" data-name="customer" ><div class="notifi__item" >';
        $notificationCustomer .= '<div class="bg-c1 img-cir img-40">';
        $notificationCustomer .= '<i class="fas fa-user-plus"></i>';
        $notificationCustomer .= '</div>';
        $notificationCustomer .= '<div class="content">';
    
        // Check if 'seen' is 0 or 1 and conditionally display the notification
        if ($Customer['seen'] == 0) {
            $notificationCustomer .= '<p> You got a Customer notification <span style="color: red">New</span></p>';
        }else{
            $notificationCustomer .= '<p> You got a User notification </p>';
        }
        $notificationCustomer .= '<span class="date">' . $formattedDatecustomer . '</span>';
        $notificationCustomer .= '</div>';
        $notificationCustomer .= '</div></a>';
    }



 }


 // Customer notification show

  // Order notification show

 $user = Auth::user(); // Get the currently logged in user
 $users_id = Auth::id(); // Get the currently logged in user
 $orders = UserStatus::where('user_id', $users_id)->first();
 $order_role = Role::where('id', $orders->status)->first();
 
 $notificationOrders = '';
 
 if ($order_role->name === 'Super Admin') {


$Orders = Order::where('alert', '0')->get();

      
$Orderscount = Order::where('alert', '0')->count();



foreach ($Orders as $Order) {
$notificationDateorder = Carbon::createFromFormat('Y-m-d H:i:s', $Order['created_at']);
$formattedDateorder = $notificationDateorder->format('F j, Y H:i');

$notificationOrders .= '<a onclick="usersNotification(this)" data-id="'.$Order['id'].'" data-name="order" ><div class="notifi__item">';
$notificationOrders .= '<div class="bg-c1 img-cir img-40">';
$notificationOrders .= '<i class="fas fa-shopping-cart"></i>';
$notificationOrders .= '</div>';
$notificationOrders .= '<div class="content">';

// Check if 'seen' is 0 or 1 and conditionally display the notification
if ($Order['seen'] == 0) {
$notificationOrders .= '<p> You got a Order notification <span style="color: red">New</span></p>';
}else{
$notificationOrders .= '<p> You got a User notification </p>';
}
$notificationOrders .= '<span class="date">' . $formattedDateorder . '</span>';
$notificationOrders .= '</div>';
$notificationOrders .= '</div></a>';
}

 }else{

    $Orders = Order::where('user_id', $users_id)->where('alert', '0')->get();

      
    $Orderscount = Order::where('user_id', $users_id)->where('alert', '0')->count();
    
foreach ($Orders as $Order) {
    $notificationDateorder = Carbon::createFromFormat('Y-m-d H:i:s', $Order['created_at']);
    $formattedDateorder = $notificationDateorder->format('F j, Y H:i');
    
    $notificationOrders .= '<a onclick="usersNotification(this)" data-id="'.$Order['id'].'" data-name="order" ><div class="notifi__item">';
    $notificationOrders .= '<div class="bg-c1 img-cir img-40">';
    $notificationOrders .= '<i class="fas fa-shopping-cart"></i>';
    $notificationOrders .= '</div>';
    $notificationOrders .= '<div class="content">';
    
    // Check if 'seen' is 0 or 1 and conditionally display the notification
    if ($Order['seen'] == 0) {
    $notificationOrders .= '<p> You got a Order notification <span style="color: red">New</span></p>';
    }else{
    $notificationOrders .= '<p> You got a User notification </p>';
    }
    $notificationOrders .= '<span class="date">' . $formattedDateorder . '</span>';
    $notificationOrders .= '</div>';
    $notificationOrders .= '</div></a>';
    }


 }

  // Order notification show



  // Product notification show




  $user = Auth::user(); // Get the currently logged in user
  $users_id = Auth::id(); // Get the currently logged in user
  $orders = UserStatus::where('user_id', $users_id)->first();
  $order_role = Role::where('id', $orders->status)->first();
  
  $notificationproduct = '';
  
  if ($order_role->name === 'Super Admin') {


$Products = Product::where('alert', '0')->get();

      
$Productcount = Product::where('alert', '0')->count();



foreach ($Products as $Product) {
$notificationDateproduct = Carbon::createFromFormat('Y-m-d H:i:s', $Product['created_at']);
$formattedDateproduct = $notificationDateproduct->format('F j, Y H:i');

$notificationproduct .= '<a  onclick="usersNotification(this)" data-id="'.$Product['id'].'" data-name="product" ><div class="notifi__item">';
$notificationproduct .= '<div class="bg-c1 img-cir img-40">';
$notificationproduct .= '<i class="fas fa-cube"></i>';
$notificationproduct .= '</div>';
$notificationproduct .= '<div class="content">';

// Check if 'seen' is 0 or 1 and conditionally display the notification
if ($Product['seen'] == 0) {
$notificationproduct .= '<p> You got a Product notification <span style="color: red">New</span></p>';
}else{
$notificationproduct .= '<p> You got a User notification </p>';
}
$notificationproduct .= '<span class="date">' . $formattedDateproduct . '</span>';
$notificationproduct .= '</div>';
$notificationproduct .= '</div></a>';
}

 
  }else{


    $Products = Order::select("*")
    ->leftJoin("products","products.id","orders.product_id")
    ->where('orders.user_id', $users_id)
    ->where('products.alert', '0')->get();


    $Productcount = Order::select("*")
    ->leftJoin("products","products.id","orders.product_id")
    ->where('orders.user_id', $users_id)
    ->where('products.alert', '0')
    ->count();
    
    foreach ($Products as $Product) {
    $notificationDateproduct = Carbon::createFromFormat('Y-m-d H:i:s', $Product['created_at']);
    $formattedDateproduct = $notificationDateproduct->format('F j, Y H:i');
    
    $notificationproduct .= '<a  onclick="usersNotification(this)" data-id="'.$Product['id'].'" data-name="product" ><div class="notifi__item">';
    $notificationproduct .= '<div class="bg-c1 img-cir img-40">';
    $notificationproduct .= '<i class="fas fa-cube"></i>';
    $notificationproduct .= '</div>';
    $notificationproduct .= '<div class="content">';
    
    // Check if 'seen' is 0 or 1 and conditionally display the notification
    if ($Product['seen'] == 0) {
    $notificationproduct .= '<p> You got a Product notification <span style="color: red">New</span></p>';
    }else{
    $notificationproduct .= '<p> You got a User notification </p>';
    }
    $notificationproduct .= '<span class="date">' . $formattedDateproduct . '</span>';
    $notificationproduct .= '</div>';
    $notificationproduct .= '</div></a>';
    }


  }

 // Product notification show


$total_count_all = $Users_count + $Customerscount + $Orderscount + $Productcount ;

        
        return response()->json(['success' => $notificationHTML , 'Users_count'=> $total_count_all , 'notificationCustomer'=>$notificationCustomer , 'notificationOrders'=> $notificationOrders , 'notificationproduct'=> $notificationproduct], 200);
    }


    public function notification_update(Request $request){
        // dd($request->dataId);


if($request->dataname == 'user'){

    $Users = User::find($request->dataId);

    $Users->update([
        'alert'=>'1',
    ]);
    return response()->json(['user' => $request->dataname]);

}else if($request->dataname == 'customer'){

    $customers = Customer::find($request->dataId);

    $customers->update([
        'alert'=>'1',
    ]);
    return response()->json(['customer' => $request->dataname]);

}else if($request->dataname == 'product'){

    $products = Product::find($request->dataId);

    $products->update([
        'alert'=>'1',
    ]);
    return response()->json(['product' => $request->dataname]);

}else{
    
    $orders = Order::find($request->dataId);

    $orders->update([
        'alert'=>'1',
    ]);
    return response()->json(['order' => $request->dataname]);
}














    }
}

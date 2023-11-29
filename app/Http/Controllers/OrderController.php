<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\UserStatus;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\OrderRepositoryInterface;

class OrderController extends Controller
{
    protected $model, $repository;

public function advance_search(Request $request)
{
if($request->agen_name){
    $agent_search = User::select("*")
    ->leftJoin("user_status","user_status.user_id","users.id")
    ->leftJoin("roles","user_status.status","roles.id")
    ->where('users.name', $request->agen_name)
    ->where('roles.name', 'Agent')
    ->first();
    if($agent_search){
        $startDate = $request->date_from;
        $endDate = $request->date_to;
  
        $items = Order::select("*" ,
        DB::raw('(select price from orders where orderdetails.order_id  = orders.id ) as order_price'),
        DB::raw('(select created_at from orders where orderdetails.order_id  = orders.id ) as order_date'),
         DB::raw('(select name from users where orderdetails.user_id  = users.id ) as user_name'),
         DB::raw('(select post_code from customers where customers.id  = orders.customer_id ) as post_country_code_get'),
         DB::raw('(select first_name from customers where customers.id  = orders.customer_id ) as first_name_customer'),
         DB::raw('(select last_name from customers where customers.id  = orders.customer_id ) as last_name_customer')
         )
        ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
      
        ->leftJoin("customers","customers.id","orders.customer_id")
        ->leftJoin("products","products.id","orders.product_id");
    
        if (!empty($request->country_name)) {
            $items->where('orderdetails.select_country', $request->country_name);
        }
        if (!empty($request->zip_code)) {
            $items->where('customers.post_code', $request->zip_code);
        }
        if (!empty($request->customer_name)) {
            $items->Where('customers.first_name', $request->customer_name);
        }
        if (!empty($request->product_name)) {
            $items->where('products.name', $request->product_name);
        }
        if (!empty($request->delivery_status)) {
            $items->where('orders.delivery_status', $request->delivery_status);
        }
          if (!empty($agent_search->user_id)) {
            $items->where('orders.user_id', $agent_search->user_id);
        }
        if (!empty($startDate)) {
            $items->WhereBetween('orders.delivery_date',[$startDate, $endDate]);
        }
    
        $item= $items->get();

        // dd($item);
    
        return response()->json([
            'status' => 200,
            'items' => $item,
        ]);
    
    }else{
        
        return response()->json([
            'status' => 202,
            'agen' => "Incorrect Agent Name",
        ]);
    
    }
}else{

    $startDate = $request->date_from;
    $endDate = $request->date_to;

    $items = Order::select("*" ,
    DB::raw('(select price from orders where orderdetails.order_id  = orders.id ) as order_price')
    ,
        DB::raw('(select created_at from orders where orderdetails.order_id  = orders.id ) as order_date'),
         DB::raw('(select name from users where orderdetails.user_id  = users.id ) as user_name'),
         DB::raw('(select post_code from customers where customers.id  = orders.customer_id ) as post_country_code_get'),
         DB::raw('(select first_name from customers where customers.id  = orders.customer_id ) as first_name_customer'),
         DB::raw('(select last_name from customers where customers.id  = orders.customer_id ) as last_name_customer')

         )
    ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
    ->leftJoin("customers","customers.id","orders.customer_id")
    ->leftJoin("products","products.id","orders.product_id");
    
    if (!empty($request->country_name)) {
        $items->where('orderdetails.select_country', $request->country_name);
    }
    
    if (!empty($request->zip_code)) {
        $items->where('customers.post_code', $request->zip_code);
    }
    if (!empty($request->customer_name)) {
        $items->Where('customers.first_name', $request->customer_name);
    }
    if (!empty($request->product_name)) {
        $items->where('products.name', $request->product_name);
    }
    if (!empty($request->delivery_status)) {
        $items->where('orders.delivery_status', $request->delivery_status);
    }
    if (!empty($startDate)) {
        $items->WhereBetween('orders.delivery_date',[$startDate, $endDate]);
    }
    
    $item= $items->get();


    // dd($item);
    
    return response()->json([
        'status' => 200,
        'items' => $item,
    ]);
    

}
}
    public function __construct(OrderRepositoryInterface $repository, Order $model)
    {
        $this->middleware('permission:Create Order|Update Order')->only('related');
        $this->middleware('permission:Create Order')->only('store');
        $this->middleware('permission:Update Order')->only('update');
        $this->middleware('permission:Delete Order')->only('destroy');
         $this->middleware('permission:View Order')->only('index');
        $this->repository = $repository;
        $this->model = $model;
    }


    public function re_order(Request $request)

    {
        $countries = [];
        $products = Product::select('id', 'country')->get();
        foreach ($products as $product) {
            $countryjson = json_decode($product->country);

            foreach ($countryjson as $countryIMplode) {
                array_push($countries, $countryIMplode);
            }
        }
        $allCountries = array_unique($countries);
        $orderdetails = Orderdetail::where('customer_id',$request->get_val)->first();
        $single_country_name =$orderdetails->select_country;
        return view('Admin.Order.addtwo', compact(['allCountries','single_country_name']));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user(); // Get the currently logged in user
        $users_id = Auth::id(); // Get the currently logged in user
        $orders = UserStatus::where('user_id',$users_id)->first();
        $order_role = Role::where('id', @$orders->status)->first();


        if(isset($request->id)){

        
           
            $items = Order::select("*" ,
            DB::raw('(select price from orders where orderdetails.order_id  = orders.id ) as order_price'),
            DB::raw('(select created_at from orders where orderdetails.order_id  = orders.id ) as order_date'),
            DB::raw('(select name from users where orderdetails.user_id  = users.id ) as user_name'),
            DB::raw('(select delivery_date from orders where orderdetails.order_id  = orders.id ) as order_price'),
            DB::raw('(select name from products where products.id  = orders.product_id ) as product_names')
            )
            ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
            ->leftJoin("customers","customers.id","orders.customer_id")
            ->leftJoin("products","products.id","orders.product_id")
            // ->where("orders.user_id", Auth::id())
            ->where("orders.id", $request->id )
            ->orderBy('orders.id', 'desc')
            ->paginate(1);
            // ->get();

        }else{

            if (@$order_role->name === 'Super Admin') {
                $items = Order::select("*" ,
                DB::raw('(select price from orders where orderdetails.order_id  = orders.id ) as order_price'),
                DB::raw('(select created_at from orders where orderdetails.order_id  = orders.id ) as order_date'),
                 DB::raw('(select name from users where orderdetails.user_id  = users.id ) as user_name'),
                 DB::raw('(select delivery_date from orders where orderdetails.order_id  = orders.id ) as order_price'),
                 DB::raw('(select name from products where products.id  = orders.product_id ) as product_names')
                )
                ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
                ->leftJoin("customers","customers.id","orders.customer_id")
                ->orderBy('orders.id', 'desc')
                ->paginate(50000);
                // ->get();
        
            } else {
                $items = Order::select("*" ,
                DB::raw('(select price from orders where orderdetails.order_id  = orders.id ) as order_price'),
                DB::raw('(select created_at from orders where orderdetails.order_id  = orders.id ) as order_date'),
                DB::raw('(select name from users where orderdetails.user_id  = users.id ) as user_name'),
                DB::raw('(select delivery_date from orders where orderdetails.order_id  = orders.id ) as order_price'),
                DB::raw('(select name from products where products.id  = orders.product_id ) as product_names')
                )
                ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
                ->leftJoin("customers","customers.id","orders.customer_id")
                // ->leftJoin("products","products.id","orders.product_id")
                ->where("orders.user_id", Auth::id())
                ->orderBy('orders.id', 'desc')
                ->paginate(5000);
                // ->get();
            }
           
        }


   




    

// dd($items);

    return view('Admin.Order.index', compact('items'));

   }

    public function order_search(Request $request , $id)
    {
       
   if($request->id){
    $items = Order::with('customer','user')->where('customer_id',$request->id)->paginate(1000);
    return view('Admin.Order.index', compact('items'));
   }else{

    $items = Order::with('customer','user')->where('customer_id', -1)->paginate(1000);
    return view('Admin.Order.index', compact('items'));

   }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('AAA');
        $countries = [];
        $products = Product::select('id', 'country')->get();
        foreach ($products as $product) {
            $countryjson = json_decode($product->country);

            foreach ($countryjson as $countryIMplode) {
                array_push($countries, $countryIMplode);
            }
        }
        $allCountries = array_unique($countries);

        // dd($allCountries);
        return view('Admin.Order._add', compact('allCountries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $checkfirstname = Customer::where('first_name', $request->first_name)->first();
        
        // if(!empty($checkfirstname->id)){

        //     return response()->json([
        //         'status' => 300,
        //         'message' => 'First name already exist',
        //     ]);
        //   }



    //       if($request->email != ""){
    //         $checkemail = Customer::where('email', $request->email)->first();
    //  // dd($checkemail->id);
    //   if(!empty($checkemail->id)){

    //       return response()->json([
    //           'status' => 100,
    //           'message' => 'email already exist',
    //       ]);

    //   }
    //     }



    if($request->sect_delivery_status != ""){
        $delivery_status_entery = $request->sect_delivery_status;
    }else{
        $delivery_status_entery = $request->delivery_status;

    }
    

    
    if($request->first_name != ""){
        $customer_first_name = $request->first_name;
    }else{
        $customer_first_name = '';
    }


        $customer['first_name'] = $customer_first_name;

            if($request->last_name != ""){
                $customer_last_name = $request->last_name;
            }else{
                $customer_last_name = '';
            }

        $customer['last_name'] = $customer_last_name;


        if($request->email != ""){
            $customer_email = $request->email;
        }else{
            $customer_email = '';
        }


        $customer['email'] = $customer_email;
        $customer['address'] = $request->address;
        $customer['phone_number'] = $request->number_code.''.$request->phone;
        $customer['post_code'] = $request->post_code;
        $customer['social_account'] = $request->social_account;
        $customer['user_id'] = auth()->id();

        $customerCreate = Customer::create($customer);



        


        $data['product_id'] = $request->product;
        $data['customer_id'] = $customerCreate->id;
        $data['note'] = $request->note;
        $data['qty'] = $request->qty;
        $data['price'] = $request->price;
        $data['delivery_status'] = $delivery_status_entery;
        $data['delivery_date'] = $request->delivery_date;
        $data['user_id'] = auth()->id();

        $order = Order::create($data);

        $detail['customer_id'] = $customerCreate->id;
        $detail['user_id'] = auth()->id();
        $detail['order_id'] = $order->id;

        $detail['select_country'] = $request->country;
        $detail['select_product'] = $request->product;

        if($request->mattress_size){
            $detail['mattress_size'] = $request->mattress_size;
            $detail['select_mattress'] = $request->mattress_design;
            $detail['Mattress'] = 'Mattress : ';
        }
      
        if($request->ottoman_design){
     
            $detail['ottoman_design'] = $request->ottoman_design;
            $detail['ottoman_color'] = $request->ottoman_color;
            $detail['ottoman_fabric'] = $request->ottoman_fabric;
        $detail['Ottoman'] = 'Ottoman : ';
        }
        if($request->hidden_bed == 'Bed'){
            $detail['Bed'] = 'Bed => ';
           
            if($request->gaslift_size){
                $detail['gaslift_size'] = $request->gaslift_size;
                $detail['gaslift_design'] = $request->gaslift_design;
                $detail['Gaslift'] = 'Gaslift : ';
            }
            if($request->headboard_size){
                $detail['headboard_size'] = $request->headboard_size;
                $detail['headboard_design'] = $request->headboard_design;
                $detail['headboard_color'] = $request->headboard_color;
                $detail['headboard_fabric'] = $request->headboard_fabric;
                $detail['Headboard'] = 'Headboard : ';
            }
        }
        if($request->hidden_design == 'Design'){  
            $detail['Design'] = 'Design => ';
            if($request->with_diamond_sizes){

                $detail['with_diamond_size'] = $request->with_diamond_sizes;
                $detail['with_diamond_design'] = $request->with_diamond_design;
                $detail['with_diamond_color'] = $request->with_diamond_color;
                $detail['with_diamond_fabric'] = $request->with_diamond_fabric;
                $detail['with_diamond_button_diamond'] = $request->with_diamond_diamond_button;
                $detail['with_diamond_storage'] = $request->with_diamond_storage;
                $detail['with_diamond_base'] = $request->with_diamond_base;
                $detail['with_diamond_mattress'] = $request->with_diamond_mattress;
            $detail['With_diamond_button'] = 'luxury beds : ';
            }
        }
        if($request->hidden_divan == 'Divan'){
            $detail['Divan'] = 'Divan => ';
            if($request->ottoman_diven_size){
                $detail['ottoman_divan_size'] = $request->ottoman_diven_size;
                $detail['ottoman_divan_headboad'] = $request->ottoman_diven_headboard;
                $detail['ottoman_divan_color'] = $request->ottoman_diven_color;
                $detail['ottoman_divan_fabric'] = $request->ottoman_diven_fabric;
                $detail['ottoman_divan_mattress'] = $request->ottoman_diven_mattress;
            $detail['Ottoman_divan'] = 'Ottoman_divan : ';
            }
            if($request->diven_size){

                $detail['divan_size'] = $request->diven_size;
                $detail['divan_headboard'] = $request->diven_headboard;
                $detail['divan_color'] = $request->diven_color;
                $detail['divan_fabric'] = $request->diven_fabric;
                $detail['divan_storage'] = $request->diven_storage;
                $detail['divan_mattress'] = $request->diven_mattress;
            $detail['Divan_form'] = 'Divan_form  : ';
            }
            if($request->monaco_diven_size){
                $detail['monaco_divan_size'] = $request->monaco_diven_size;
                $detail['monaco_divan_headboard'] = $request->monaco_diven_headboard;
                $detail['monaco_divan_color'] = $request->monaco_diven_color;
                $detail['monaco_divan_fabric'] = $request->monaco_diven_fabric;
                $detail['monaco_divan_storage'] = $request->monaco_diven_storage;
                $detail['monaco_divan_mattress'] = $request->monaco_diven_mattress;
            $detail['Manaco_divan'] = 'Manaco_divan  : ';
            }
        }

        $orderdetails = Orderdetail::create($detail);

        $variation['design'] = json_encode($request->design);
        $variation['size'] = json_encode($request->size);
        $variation['headboard'] = json_encode($request->headboard);
        $variation['matteres'] = json_encode($request->matteres);
        $variation['storage'] = json_encode($request->storage);
        $variation['color_or_fabric'] = json_encode($request->color_or_fabric);
        $variation['order_id'] = $order->id;

        DB::table('order_variation')->insert($variation);

        return response()->json([
            'status' => 200,
            'current_id' => $customerCreate->id,
        ]);

        // return redirect('order_index')->with('success', '   Order Created Successfully .');
    }


    public function storetwo(Request $request)
    {
            if($request->sect_delivery_status != ""){
                $delivery_status_entery = $request->sect_delivery_status;
            }else{
                $delivery_status_entery = $request->delivery_status;
        
            }
        $data['product_id'] = $request->product;
        $data['customer_id'] = $request->hidden_query_id;
        $data['note'] = $request->note;
        $data['qty'] = $request->qty;
        $data['price'] = $request->price;
        $data['delivery_status'] = $delivery_status_entery;
        $data['delivery_date'] = $request->delivery_date;
        $data['user_id'] = auth()->id();
        $order = Order::create($data);
        $detail['customer_id'] = $request->hidden_query_id;
        $detail['order_id'] = $order->id;
        $detail['user_id'] = auth()->id();
        $detail['select_country'] = $request->country;
        $detail['select_product'] = $request->product;
        if($request->mattress_size){
            $detail['mattress_size'] = $request->mattress_size;
            $detail['select_mattress'] = $request->mattress_design;
            $detail['Mattress'] = 'Mattress : ';
        }
        if($request->ottoman_design){
        $detail['ottoman_design'] = $request->ottoman_design;
        $detail['ottoman_color'] = $request->ottoman_color;
        $detail['ottoman_fabric'] = $request->ottoman_fabric;
        $detail['Ottoman'] = 'Ottoman  : ';
        }
        if($request->hidden_bed == 'Bed'){
            $detail['Bed'] = 'Bed';
            if($request->gaslift_size){
                $detail['gaslift_size'] = $request->gaslift_size;
                $detail['gaslift_design'] = $request->gaslift_design;
                $detail['Gaslift'] = 'Gaslift : ';
            }
            if($request->headboard_size){
                $detail['headboard_size'] = $request->headboard_size;
                $detail['headboard_design'] = $request->headboard_design;
                $detail['headboard_color'] = $request->headboard_color;
                $detail['headboard_fabric'] = $request->headboard_fabric;
                $detail['Headboard'] = 'Headboard : ';
            }
        }
        if($request->hidden_design == 'Design'){
            $detail['Design'] = 'Design => ';
            if($request->with_diamond_sizes){
            $detail['with_diamond_size'] = $request->with_diamond_sizes;
            $detail['with_diamond_design'] = $request->with_diamond_design;
            $detail['with_diamond_color'] = $request->with_diamond_color;
            $detail['with_diamond_fabric'] = $request->with_diamond_fabric;
            $detail['with_diamond_button_diamond'] = $request->with_diamond_diamond_button;
            $detail['with_diamond_storage'] = $request->with_diamond_storage;
            $detail['with_diamond_base'] = $request->with_diamond_base;
            $detail['with_diamond_mattress'] = $request->with_diamond_mattress;
            $detail['With_diamond_button'] = 'luxury beds : ';
            }
        }
        if($request->hidden_divan == 'Divan'){
            $detail['Divan'] = 'Divan';
            if($request->ottoman_diven_size){
            $detail['ottoman_divan_size'] = $request->ottoman_diven_size;
            $detail['ottoman_divan_headboad'] = $request->ottoman_diven_headboard;
            $detail['ottoman_divan_color'] = $request->ottoman_diven_color;
            $detail['ottoman_divan_fabric'] = $request->ottoman_diven_fabric;
            $detail['ottoman_divan_mattress'] = $request->ottoman_diven_mattress;
            $detail['Ottoman_divan'] = 'Ottoman_divan : ';
            }
            if($request->diven_size){

            $detail['divan_size'] = $request->diven_size;
            $detail['divan_headboard'] = $request->diven_headboard;
            $detail['divan_color'] = $request->diven_color;
            $detail['divan_fabric'] = $request->diven_fabric;
            $detail['divan_storage'] = $request->diven_storage;
            $detail['divan_mattress'] = $request->diven_mattress;
            $detail['Divan_form'] = 'Divan_form : ';
            }
            if($request->monaco_diven_size){
            $detail['monaco_divan_size'] = $request->monaco_diven_size;
            $detail['monaco_divan_headboard'] = $request->monaco_diven_headboard;
            $detail['monaco_divan_color'] = $request->monaco_diven_color;
            $detail['monaco_divan_fabric'] = $request->monaco_diven_fabric;
            $detail['monaco_divan_storage'] = $request->monaco_diven_storage;
            $detail['monaco_divan_mattress'] = $request->monaco_diven_mattress;
            $detail['Manaco_divan'] = 'Manaco_divan : ';
            }
        }

        $orderdetails = Orderdetail::create($detail);
        $variation['design'] = json_encode($request->design);
        $variation['size'] = json_encode($request->size);
        $variation['headboard'] = json_encode($request->headboard);
        $variation['matteres'] = json_encode($request->matteres);
        $variation['storage'] = json_encode($request->storage);
        $variation['color_or_fabric'] = json_encode($request->color_or_fabric);
        $variation['order_id'] = $order->id;

        DB::table('order_variation')->insert($variation);

        return response()->json([
            'status' => 200,
            'current_id' => $request->hidden_query_id,
        ]);
        // return redirect('order_index')->with('success', '   Order Created Successfully .');
    }
    
    public function orders_edit(Request $request)
    {

        $orders = Order::where('id',$request->hide_val)->first();
      $customerupdate = Customer::where('id', $orders->customer_id)->first();
      if($request->first_name != ""){
        $customer_first_name = $request->first_name;
    }else{
        $customer_first_name = '';
    }

        $customerupdate['first_name'] = $customer_first_name;
            if($request->last_name != ""){
                $customer_last_name = $request->last_name;
            }else{
                $customer_last_name = '';
            }
        $customerupdate['last_name'] = $customer_last_name;
        if($request->email != ""){
            $customer_email = $request->email;
        }else{
            $customer_email = '';
        }
        $customerupdate['email'] = $customer_email;
        $customerupdate['address'] = $request->address;
        $customerupdate['phone_number'] = $request->number_code.''.$request->phone;
        $customerupdate['post_code'] = $request->post_code;
        $customerupdate['social_account'] = $request->social_account;
        $customerupdate['user_id'] = auth()->id();
        $customerupdate->update();

       $orders = Order::where('id',$request->hide_val)->first();
       $orders->note = $request->input('note');
       $orders->qty = $request->input('qty');
       $orders->price = $request->input('price');
       $orders->product_id = $request->input('product');

       if($request->delivery_status_select != ""){
        $delivey_1 = $request->delivery_status_select;
       }else{
        $delivey_1 = $request->input('delivery_status');
       }
       $orders->delivery_status = $delivey_1;
       $orders->delivery_date = $request->input('date_status');
       $orders->update();
       $order_update = Orderdetail::where('order_id',$request->hide_val)->first();

       $order_update->select_country = $request->input('country');
       $order_update->mattress_size = $request->input('mattress_size');
       $order_update->select_mattress = $request->input('mattress_design');
       $order_update->ottoman_design = $request->input('ottoman_design');
       $order_update->ottoman_color = $request->input('ottoman_color');
       $order_update->ottoman_fabric = $request->input('ottoman_fabric');
       $order_update->gaslift_size = $request->input('gaslift_size');
       $order_update->gaslift_design = $request->input('gaslift_design');
       $order_update->headboard_size = $request->input('headboard_size');
       $order_update->headboard_design = $request->input('headboard_design');
       $order_update->headboard_color = $request->input('headboard_color');
       $order_update->headboard_fabric = $request->input('headboard_fabric');
       $order_update->without_diamond_size = $request->input('without_diamond_size');
       $order_update->without_diamond_color = $request->input('without_diamond_color');
       $order_update->without_diamond_fabric = $request->input('without_diamond_fabric');
       $order_update->without_diamond_storage = $request->input('without_diamond_storage');
       $order_update->without_diamond_base = $request->input('without_diamond_base');
       $order_update->without_diamond_mattress = $request->input('without_diamond_mattress');
       $order_update->with_diamond_size = $request->input('with_diamond_sizes');
       $order_update->with_diamond_design = $request->input('with_diamond_design');
       $order_update->with_diamond_color = $request->input('with_diamond_color');
       $order_update->with_diamond_fabric = $request->input('with_diamond_fabric');
       $order_update->with_diamond_button_diamond = $request->input('with_diamond_diamond_button');
       $order_update->with_diamond_storage = $request->input('with_diamond_storage');
       $order_update->with_diamond_base = $request->input('with_diamond_base');
       $order_update->with_diamond_mattress = $request->input('with_diamond_mattress');
       $order_update->ottoman_divan_size = $request->input('ottoman_diven_size');
       $order_update->ottoman_divan_headboad = $request->input('ottoman_diven_headboard');
       $order_update->ottoman_divan_color = $request->input('ottoman_diven_color');
       $order_update->ottoman_divan_fabric = $request->input('ottoman_diven_fabric');
       $order_update->ottoman_divan_mattress = $request->input('ottoman_diven_mattress');
       $order_update->divan_size = $request->input('diven_size');
       $order_update->divan_headboard = $request->input('diven_headboard');
       $order_update->divan_color = $request->input('diven_color');
       $order_update->divan_fabric = $request->input('diven_fabric');
       $order_update->divan_storage = $request->input('diven_storage');
       $order_update->divan_mattress = $request->input('diven_mattress');
       $order_update->monaco_divan_size = $request->input('monaco_diven_size');
       $order_update->monaco_divan_headboard = $request->input('monaco_diven_headboard');
       $order_update->monaco_divan_color = $request->input('monaco_diven_color');
       $order_update->monaco_divan_fabric = $request->input('monaco_diven_fabric');
       $order_update->monaco_divan_storage = $request->input('monaco_diven_storage');
       $order_update->monaco_divan_mattress = $request->input('monaco_diven_mattress');
       $order_update->update();
       $redirectUrl = '/order_index';
       return response()->json([
           'status' => 200,
           'redirectUrl' => $redirectUrl
       ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        $orderss=Order::with('customer','user','product')->find($order);
        $orders = Order::select("*")
        ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
        ->leftJoin("customers","customers.id","orders.customer_id")
        ->where('orderdetails.order_id', $order)
        ->where('orders.id', $order)    
        ->where('customers.id', $orderss->customer_id)
        ->orderby('orders.id','ASC')    
        ->get();
        // dd($orders);

        // $data = [ 'orders' => $orders ]; 

        return view('Admin.Order.view',compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = [];
        $products = Product::select('id', 'country')->get();
        foreach ($products as $product) {
            $countryjson = json_decode($product->country);

            foreach ($countryjson as $countryIMplode) {
                array_push($countries, $countryIMplode);
            }
        }
        $allCountries = array_unique($countries);
       
        $item  = Order::where('orders.id',$id)->select('orders.*','products.name as product_name')
                ->leftJoin('products','orders.product_id','products.id')
                ->first();
        $customers = Customer::where('id',$item->customer_id)->first();
         $detailOrder = Orderdetail::where('order_id',$id)->first();
        $country= $detailOrder->select_country;
        return view('Admin.Order.edit', compact('item','allCountries','detailOrder','country','customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'order_number' => 'required|string',
            'customer_id' => 'required',
            'user_id' => 'required',
            'note' => 'required',
            'price' => 'required|string',
            'payment_status' => 'nullable|in:paid,unpaid,partially_paid',
            'shipment_status' => 'nullable|in:in_que,shipped,delivered',
        ]);
        $this->repository->update($id, $data);
        return redirect('order_index')->with('success', '   Order Updated Successfully .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    
        $order = $this->repository->delete($request->dataId);

        $orderdetail = Orderdetail::where('order_id', $request->dataId)->delete();

        // dd($orderdetail);
        return response()->json([
            'status' => 200,
        ]);
        // return redirect('order_index')->with('success', ' Order Successfully Deleted');
    }

    public function country_product(Request $request)
    {
        dd($request);
    }

    public function searching(Request $request)
    {

        $customer = Customer::where('first_name', $request->agent)->first();
        $user = User::where('name', $request->agent)->where('id',Auth::user()->id)->first();
        $role  = Role::where('name', 'Super Admin')->first();
        $role_status  = UserStatus::where('status', $role->id)->where('user_id',Auth::user()->id)->first();
        if($role_status){
     $items = Order::whereDate('created_at','>=',$request->first_date)->whereDate('created_at','<=',$request->last_date)->where('user_id', $user->id)->paginate(3000);

        }else if($customer != ""){

          $items = Order::whereDate('created_at','>=',$request->first_date)->whereDate('created_at','<=',$request->last_date)->where('customer_id', $customer->id)->where('user_id', Auth::user()->id)
            ->paginate(3000);
            $items  = Order::where('user_id', Auth::user()->id)->paginate(10);
          
        }else{

            $items = Order::where('id', -1)->paginate(3000);
         }

         return view('Admin.Order.index', compact('items'));
            
    }
    public function deleteAll(Request $request)
    {

 
        $ids = $request->join_selected_values;
        $product_ids = explode(",", $ids);
        foreach ($product_ids as $product_id) {
             $this->repository->delete($product_id);
          
        }

        $ids = $request->join_selected_values;
        $product_ids = explode(",", $ids);
        foreach ($product_ids as $product_id) {
        
             Orderdetail::where('order_id', $product_id)->delete();
          
        }

        return response()->json([
            'status' => 200,
            'all_ids'=> $request->join_selected_values,
        ]);
     
    }
}

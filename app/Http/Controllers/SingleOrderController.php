<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\shortorder;
use App\Models\UserStatus;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use App\Models\CopyShortOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\OrderRepositoryInterface;

class SingleOrderController extends Controller
{
    protected $model, $repository;


    

    public function advance_search_customer(Request $request)
    {
    
        // dd("hello");
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
    
            $items = shortorder::select("*",
            'shortorders.id',
            'shortorders.created_at',
            DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
        
            )
            ->leftJoin("users","shortorders.user_id","users.id")
            ->leftJoin("products","shortorders.short_product","products.id");
        
            if (!empty($request->country_name)) {
                $items->where('shortorders.short_country', $request->country_name);
            }
            
            if (!empty($request->zip_code)) {
                $items->where('shortorders.short_post_code', $request->zip_code);
            }
           
            if (!empty($request->product_name)) {
                $items->where('products.name', $request->product_name);
            }
           
              if (!empty($agent_search->user_id)) {
                $items->where('shortorders.user_id', $agent_search->user_id);
            }
            if (!empty($startDate)) {
                $items->WhereBetween('shortorders.short_delivery_date',[$startDate, $endDate]);
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
    
        $items = shortorder::select("*",
            'shortorders.id',
            'shortorders.created_at',
            DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
         
            )
            ->leftJoin("users","shortorders.user_id","users.id")
            ->leftJoin("products","shortorders.short_product","products.id");
    
            if (!empty($request->country_name)) {
                $items->where('shortorders.short_country', $request->country_name);
            }
            
            if (!empty($request->zip_code)) {
                $items->where('shortorders.short_post_code', $request->zip_code);
            }
           
            if (!empty($request->product_name)) {
                $items->where('products.name', $request->product_name);
            }

          
          
            if (!empty($startDate)) {
                $items->WhereBetween('shortorders.short_delivery_date',[$startDate, $endDate]);
            }
    
            $items->where('shortorders.user_id', auth()->user()->id);
        $item= $items->get();
    
        // dd($item);
        
        return response()->json([
            'status' => 200,
            'items' => $item,
        ]);
        
    
    }
    }




public function advance_search(Request $request)
{

    // dd("hello");
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

        $items = shortorder::select("*",
        'shortorders.id',
        'shortorders.created_at',
        DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
    
        )
        ->leftJoin("users","shortorders.user_id","users.id")
        ->leftJoin("products","shortorders.short_product","products.id");
    
        if (!empty($request->country_name)) {
            $items->where('shortorders.short_country', $request->country_name);
        }
        
        if (!empty($request->zip_code)) {
            $items->where('shortorders.short_post_code', $request->zip_code);
        }
       
        if (!empty($request->product_name)) {
            $items->where('products.name', $request->product_name);
        }
       
          if (!empty($agent_search->user_id)) {
            $items->where('shortorders.user_id', $agent_search->user_id);
        }
        if (!empty($startDate)) {
            $items->WhereBetween('shortorders.short_delivery_date',[$startDate, $endDate]);
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

    $items = shortorder::select("*",
        'shortorders.id',
        'shortorders.created_at',
        DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
     
        )
        ->leftJoin("users","shortorders.user_id","users.id")
        ->leftJoin("products","shortorders.short_product","products.id");

        if (!empty($request->country_name)) {
            $items->where('shortorders.short_country', $request->country_name);
        }
        
        if (!empty($request->zip_code)) {
            $items->where('shortorders.short_post_code', $request->zip_code);
        }
       
        if (!empty($request->product_name)) {
            $items->where('products.name', $request->product_name);
        }
       
      
        if (!empty($startDate)) {
            $items->WhereBetween('shortorders.short_delivery_date',[$startDate, $endDate]);
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
    

            if (@$order_role->name === 'Super Admin') {
                $items = shortorder::select("*",
                'shortorders.id',
                'shortorders.created_at',
                DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
              
             
                )
                ->leftJoin("users","shortorders.user_id","users.id")
                ->leftJoin("products","shortorders.short_product","products.id")
                ->orderBy('shortorders.id', 'desc')  
                ->paginate(1000);    
                // ->get();
        
            } else {
                $items = shortorder::select("*",
                'shortorders.id',
                'shortorders.created_at',
                DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
                )
                ->leftJoin("users","shortorders.user_id","users.id")
                ->leftJoin("products","shortorders.short_product","products.id")
                ->where("shortorders.user_id", Auth::id())
                ->orderBy('shortorders.id', 'desc')  
                ->paginate(1000);
                // ->get();
            }

    

// dd($items);

    return view('Admin.orders.index', compact('items'));
    // return view('Admin.orders.index');

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
        return view('Admin.orders._add', compact('allCountries'));
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
   

        $data['short_country'] = $request->country;
        $data['short_product'] = $request->product;
        $data['short_order_message'] = $request->message_order;
        $data['short_delivery_date'] = $request->delivery_date;
        $data['short_post_code'] = $request->post_codde;
        $data['user_id'] = auth()->id();

        $order = shortorder::create($data);

        $short_data['short_orders_id'] = $order->id;
        $short_data['short_country'] = $request->country;
        $short_data['short_product'] = $request->product;
        $short_data['short_order_message'] = $request->message_order;
        $short_data['short_delivery_date'] = $request->delivery_date;
        $short_data['short_post_code'] = $request->post_codde;
        $short_data['user_id'] = auth()->id();


           CopyShortOrder::create($short_data);
     
        return response()->json([
            'status' => 200,
           
        ]);

        // return redirect('order_index')->with('success', '   Order Created Successfully .');
    }


   
    
    public function orders_edit(Request $request)
    {
        // dd($request->all());
        $orders = shortorder::where('id',$request->hide_val)->first();
      
        $orders['short_country'] = $request->country;
        $orders['short_product'] = $request->product;
        $orders['short_order_message'] = $request->message_order;
        $orders['short_post_code'] = $request->post_codde;
        $orders['short_delivery_date'] = $request->delivery_date;
        $orders->update();    


        $short_data = CopyShortOrder::where('short_orders_id' , $request->hide_val)->first();
      
      
        $short_data['short_country'] = $request->country;
        $short_data['short_product'] = $request->product;
        $short_data['short_order_message'] = $request->message_order;
        $short_data['short_post_code'] = $request->post_codde;
        $short_data['short_delivery_date'] = $request->delivery_date;
        $short_data->update();

      
       return response()->json([
           'status' => 200,
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
        $orders = shortorder::select("*",
        
        DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
        DB::raw('(select created_at from shortorders where shortorders.short_product  = shortorders.id ) as user_create_date'),
        )
        ->leftJoin("users","shortorders.user_id","users.id")
        ->leftJoin("products","shortorders.short_product","products.id")
        ->where('shortorders.id', $order)  
        ->orderBy('shortorders.id', 'desc')  
        ->paginate(1000);

        // dd($orders);
        return view('Admin.orders.view',compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd("hello");
        $countries = [];
        $products = Product::select('id', 'country')->get();
        foreach ($products as $product) {
            $countryjson = json_decode($product->country);

            foreach ($countryjson as $countryIMplode) {
                array_push($countries, $countryIMplode);
            }
        }
        $allCountries = array_unique($countries);


        $item = shortorder::select("*",
        'shortorders.id',
        DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
        DB::raw('(select created_at from shortorders where shortorders.short_product  = shortorders.id ) as user_create_date'),
        )
        ->leftJoin("users","shortorders.user_id","users.id")
        ->leftJoin("products","shortorders.short_product","products.id")
        ->where('shortorders.id', $id)  
        ->first();

// dd($item);
       
      
        return view('Admin.orders.edit', compact('item','allCountries',));
    }

 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         shortorder::where('id', $request->dataId)->delete();
         CopyShortOrder::where('short_orders_id' , $request->dataId)->delete();
        return response()->json([
            'status' => 200,
        ]);
    }
   
    public function deleteAll(Request $request)
    {
     
        $ids = $request->join_selected_values;
        $product_ids = explode(",", $ids);
        foreach ($product_ids as $product_id) {
            shortorder::where('id', $product_id)->delete();
           CopyShortOrder::where('short_orders_id' , $product_id)->delete();
        }
        return response()->json([
            'status' => 200,
            'all_ids'=> $request->join_selected_values,
        ]);
     
    }




     	 	 	 	 	 


    public function updateForms(Request $request, $formId)
    {

        // dd($request->formId);
                // Get the data you want to update from the request
                $dataToUpdate = [
                    'comfirmation' => $request->comfirmation,
                    'commision' => $request->commision,
                    'status' => $request->status,
                    'reason' => $request->reason,
                   
                ];

                // Find the order by ID
                $order = CopyShortOrder::where('short_orders_id', $formId)->first();
                // dd($order);
                if ($order) {
                    // Update only the specified columns
                    $order->update($dataToUpdate);
                    
                    // Optionally, return a success response
                    return response()->json(['message' => 'Order updated successfully']);
                }

                // Handle the case where the order with the given ID is not found
                return response()->json(['error' => 'Order not found'], 404);
    }









}

    




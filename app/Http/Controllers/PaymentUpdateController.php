<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\shortorder;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use App\Models\CopyShortOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\OrderRepositoryInterface;

class PaymentUpdateController extends Controller
{
    protected $model, $repository;


    public function advance_search_payment(Request $request)
    {

        // dd("hsabgduhsabgf");


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
    
            $items = CopyShortOrder::select("*",
            'copy_short_orders.short_orders_id',
            'copy_short_orders.id',
            'copy_short_orders.created_at',
            DB::raw('(select name from users where  copy_short_orders.user_id  = users.id ) as user_name'),
         
            )
            ->leftJoin("users","copy_short_orders.user_id","users.id")
            ->leftJoin("products","copy_short_orders.short_product","products.id");
        
            if (!empty($request->country_name)) {
                $items->where('copy_short_orders.short_country', $request->country_name);
            }
            
            if (!empty($request->zip_code)) {
                $items->where('copy_short_orders.short_post_code', $request->zip_code);
            }
           
            if (!empty($request->product_name)) {   	
                $items->where('products.name', $request->product_name);
            }
            if (!empty($request->payment_status)) {
                $items->where('copy_short_orders.status_payment', $request->payment_status);
            }
    
            if (!empty($request->confirmation)) {
                $items->where('copy_short_orders.comfirmation', $request->confirmation);
            }
            if (!empty($agent_search->user_id)) {
                $items->where('copy_short_orders.user_id', $agent_search->user_id);
            }
          
            if (!empty($startDate)) {
                $items->WhereBetween('copy_short_orders.short_delivery_date',[$startDate, $endDate]);
            }
        
            $item= $items->get();
    
            // dd($item);

            $totalPrice = 0;
            foreach ($item as $product) {
                // Yahan $product array se price ko extract karein aur "$" symbol ko hata dein.
                $price = str_replace('$', '', $product['commision']);
                // Price ko numeric value mein convert karein aur $totalPrice mein jama karein.
                $totalPrice += (float)$price;
            }
        

            return response()->json([
                'status' => 200,
                'items' => $item,
                'totalPrice' => $totalPrice,
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
    
        $items = CopyShortOrder::select("*",
            'copy_short_orders.short_orders_id',
            'copy_short_orders.id',
            'copy_short_orders.created_at',
          
            // DB::raw('(SELECT SUM(commision) FROM copy_short_orders WHERE id = ' . $specific_id . ') as total_price'),
            DB::raw('(select name from users where  copy_short_orders.user_id  = users.id ) as user_name'),
            )
            ->leftJoin("users","copy_short_orders.user_id","users.id")
            ->leftJoin("products","copy_short_orders.short_product","products.id");
            if (!empty($request->country_name)) {
                $items->where('copy_short_orders.short_country', $request->country_name);
            }
            if (!empty($request->zip_code)) {
                $items->where('copy_short_orders.short_post_code', $request->zip_code);
            }
           
            if (!empty($request->product_name)) {
                $items->where('products.name', $request->product_name);
            }
            if (!empty($request->payment_status)) {
                $items->where('copy_short_orders.status_payment', $request->payment_status);
            }
    
            if (!empty($request->confirmation)) {
                $items->where('copy_short_orders.comfirmation', $request->confirmation);
            }
          
            if (!empty($startDate)) {
                $items->WhereBetween('copy_short_orders.short_delivery_date',[$startDate, $endDate]);
            }
       
                $items->where('copy_short_orders.user_id', auth()->user()->id);
                $items->where('copy_short_orders.comfirmation', '!=', '');
                $items->where('copy_short_orders.status', '!=', '');
                $items->where('copy_short_orders.commision',  '!=', '');
                $items->where('copy_short_orders.reason', '!=', '');
            




           
                
        
        $item= $items->get();  
        //  dd($item);
        $totalPrice = 0;
        foreach ($item as $product) {
            // Yahan $product array se price ko extract karein aur "$" symbol ko hata dein.
            $price = str_replace('$', '', $product['commision']);
            // Price ko numeric value mein convert karein aur $totalPrice mein jama karein.
            $totalPrice += (float)$price;
        }
    
        //  dd($totalPrice);
        
        return response()->json([
            'status' => 200,
            'items' => $item,
            'totalPrice' => $totalPrice,
        ]);
        
    
    }
    }












    public function advance_search_payment_admin(Request $request)
    {
    
        // dd($request->all());
    
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
    
            $items = CopyShortOrder::select("*",
            'copy_short_orders.short_orders_id',
            'copy_short_orders.created_at',
            DB::raw('(select name from users where  copy_short_orders.user_id  = users.id ) as user_name'),
         
            )
            ->leftJoin("users","copy_short_orders.user_id","users.id")
            ->leftJoin("products","copy_short_orders.short_product","products.id");
        
            if (!empty($request->country_name)) {
                $items->where('copy_short_orders.short_country', $request->country_name);
            }
            
            if (!empty($request->zip_code)) {
                $items->where('copy_short_orders.short_post_code', $request->zip_code);
            }
           
            if (!empty($request->product_name)) {
                $items->where('products.name', $request->product_name);
            }
            if (!empty($request->delivery_status)) {
                $items->where('copy_short_orders.delivery_status', $request->delivery_status);
            }
    
            if (!empty($request->confirmation)) {
                $items->where('copy_short_orders.comfirmation', $request->confirmation);
            }
            if (!empty($agent_search->user_id)) {
                $items->where('copy_short_orders.user_id', $agent_search->user_id);
            }
          
            if (!empty($startDate)) {
                $items->WhereBetween('copy_short_orders.short_delivery_date',[$startDate, $endDate]);
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
    
        $items = CopyShortOrder::select("*",
            'copy_short_orders.short_orders_id',
            'copy_short_orders.created_at',
            DB::raw('(select name from users where  copy_short_orders.user_id  = users.id ) as user_name'),
         
            )
            ->leftJoin("users","copy_short_orders.user_id","users.id")
            ->leftJoin("products","copy_short_orders.short_product","products.id");
    
            if (!empty($request->country_name)) {
                $items->where('copy_short_orders.short_country', $request->country_name);
            }
            
            if (!empty($request->zip_code)) {
                $items->where('copy_short_orders.short_post_code', $request->zip_code);
            }
           
            if (!empty($request->product_name)) {
                $items->where('products.name', $request->product_name);
            }
            if (!empty($request->delivery_status)) {
                $items->where('copy_short_orders.delivery_status', $request->delivery_status);
            }
    
            if (!empty($request->confirmation)) {
                $items->where('copy_short_orders.comfirmation', $request->confirmation);
            }
          
            if (!empty($startDate)) {
                $items->WhereBetween('copy_short_orders.short_delivery_date',[$startDate, $endDate]);
            }
    
            $items->where('copy_short_orders.comfirmation', '!=', '');
            $items->where('copy_short_orders.status', '!=', '');
            $items->where('copy_short_orders.commision',  '!=', '');
            $items->where('copy_short_orders.reason', '!=', '');




        
        $item= $items->get();
        
        
        $totalPrice = 0;
        foreach ($item as $product) {
            // Yahan $product array se price ko extract karein aur "$" symbol ko hata dein.
            $price = str_replace('$', '', $product['commision']);
            // Price ko numeric value mein convert karein aur $totalPrice mein jama karein.
            $totalPrice += (float)$price;
        }
    
        // dd($item);
        
        return response()->json([
            'status' => 200,
            'items' => $item,
            'totalPrice' => $totalPrice,
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
    
    
    
    
     
    
    
    
    
        public function updateForms(Request $request, $formId)
        {
    
            // dd($request->all());
                    // Get the data you want to update from the request
                    $dataToUpdate = [
                        'commision' => $request->input('commision'),
                        'status_payment' => $request->input('status_payment'),
                       
                    ];
    
                    // Find the order by ID
                    $order = CopyShortOrder::where('short_orders_id', $request->order_id);
    
                    if ($order) {
                        // Update only the specified columns
                        $order->update($dataToUpdate);
                        
                        // Optionally, return a success response
                        return response()->json(['message' => 'Order updated successfully']);
                    }
    
                    // Handle the case where the order with the given ID is not found
                    return response()->json(['error' => 'Order not found'], 404);
        }
    
    
    
    
    
    
    
    
    
    
    
      
        public function index(Request $request)
        {
            $user = Auth::user(); // Get the currently logged in user
            $users_id = Auth::id(); // Get the currently logged in user
            $orders = UserStatus::where('user_id',$users_id)->first();
            $order_role = Role::where('id', @$orders->status)->first();
        
    
                if (@$order_role->name === 'Super Admin') {
                    $items = CopyShortOrder::select("*",
                    'copy_short_orders.id',
                    'copy_short_orders.short_orders_id',
                    'copy_short_orders.created_at',
                    DB::raw('(select name from users where copy_short_orders.user_id  = users.id ) as user_name'),
                  
                 
                    )
                    ->leftJoin("users","copy_short_orders.user_id","users.id")
                    ->leftJoin("products","copy_short_orders.short_product","products.id")
                    ->orderBy('copy_short_orders.short_orders_id', 'desc')  
                    ->where('comfirmation', '!=', '')
                    ->where('status', '!=', '')
                    ->where('commision', '!=', '')
                    ->where('reason', '!=', '')
                    ->paginate(1000);    
                    // ->get();
                
                } else {
                    $items = CopyShortOrder::select("*",
                    'copy_short_orders.id',
                    'copy_short_orders.short_orders_id',
                    'copy_short_orders.created_at',
                    DB::raw('(select name from users where copy_short_orders.user_id  = users.id ) as user_name'),
                    )
                    ->leftJoin("users","copy_short_orders.user_id","users.id")
                    ->leftJoin("products","copy_short_orders.short_product","products.id")
                    ->where("copy_short_orders.user_id", Auth::id())
                    ->where('comfirmation', '!=', '')
                    ->where('status', '!=', '')
                    ->where('commision', '!=', '')
                    ->where('reason', '!=', '')
                    ->orderBy('copy_short_orders.short_orders_id', 'desc')  
                    ->paginate(1000);
                    // ->get();
                }
    
        
    
    // dd($items);
    
        return view('Admin.payment_update_orders.index', compact('items'));
        // return view('Admin.orders.index');
    
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
            // dd($request->all());

            $CopyShortOrder =  CopyShortOrder::where('id', $request->dataId)->first();
            shortorder::where('id', $CopyShortOrder->short_orders_id)->delete();
            CopyShortOrder::where('id', $request->dataId)->delete();


            return response()->json([
                'status' => 200,
            ]);
        }


        
       
        public function deleteAll(Request $request)
        {
         
            $ids = $request->join_selected_values;
            $product_ids = explode(",", $ids);
            foreach ($product_ids as $product_id) {

                $CopyShortOrder =  CopyShortOrder::where('id', $product_id)->first();
        
                shortorder::where('id', $CopyShortOrder->short_orders_id)->delete();
                CopyShortOrder::where('id', $product_id)->delete();


            }
            return response()->json([
                'status' => 200,
                'all_ids'=> $request->join_selected_values,
            ]);
         
        }

        public function updata_status(Request $request)
        {
         
            // dd($request->all());
            $ids = $request->join_selected_values;
            $product_ids = explode(",", $ids);
            foreach ($product_ids as $product_id) {
               $CopyShortOrder =  CopyShortOrder::find( $product_id);
               $CopyShortOrder->update([
                'status_payment' => $request->status_change_ajx_call_payment,
            ]);

            }
            return response()->json([
                'status' => 200,
                'all_ids'=> $request->join_selected_values,
            ]);
         
        }
}

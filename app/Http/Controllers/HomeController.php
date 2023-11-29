<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use App\Models\CopyShortOrder;
use App\Models\ProductVariation;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $role  = Role::where('name', 'Super Admin')->first();
        $role_status  = UserStatus::where('status', $role->id)->where('user_id',Auth::user()->id)->first();

        if($role_status){

            
        $userstatus1 = 'Agent';
        $userstatus1 = Role::where('name', $userstatus1)->first();
        $specificRole1  = UserStatus::where('status', $userstatus1->id)->count();

        $userstatus2 = 'Vendor';
        $userstatus2 = Role::where('name', $userstatus2)->first();
        $specificRole2  = UserStatus::where('status', $userstatus2->id)->count();
        
        $userstatus3 = 'Support';
        $userstatus3 = Role::where('name', $userstatus3)->first();
        $specificRole3  = UserStatus::where('status', $userstatus3->id)->count();

        $user_count = User::count();
        $product_count = Product::count();
        // $variation_count = ProductVariation::count();
        $order = Order::count();
        $CopyShortOrder =CopyShortOrder::count();

        $orders= $order+$CopyShortOrder;

        // dd($order);

        return view('Admin.home', compact('user_count', 'product_count', 'orders', 'specificRole2', 'specificRole1', 'specificRole3' ));

        }else{

        $user_count = User::count();
        $product_count = Product::count();
        // $variation_count = ProductVariation::count();
        $order = Order::where('user_id',Auth::id())->count();
        $CopyShortOrder = CopyShortOrder::where('user_id',Auth::id())->count();
        $orders= $order+$CopyShortOrder;

        return view('Admin.home', compact('user_count', 'product_count', 'orders'));
        }
    }
}

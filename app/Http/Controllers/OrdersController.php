<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function show()
    {
       
        return view('Admin.Order.only_headboard');
    }
    public function show_1()
    {
       
        return view('Admin.Order.only_gaslift');
    }
    public function show_2()
    {
       
        return view('Admin.Order.only_mattress');
    }
    public function show_3()
    {
       
        return view('Admin.Order.only_ottoman_box');
    }
    public function show_4()
    {
       
        return view('Admin.Order.with_diamond');
    }
    public function show_5()
    {
       
        return view('Admin.Order.without_diamond');
    }
    public function show_6()
    {
       
        return view('Admin.Order.diven');
    }
    public function show_7()
    {
       
        return view('Admin.Order.ottoman_diven');
    }
    public function show_8()
    {
       
        return view('Admin.Order.monaco-diven');
    }
}

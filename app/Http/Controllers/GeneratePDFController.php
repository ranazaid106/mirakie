<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneratePDFController extends Controller
{
    
public function generateInvoice(Request $request ,$id ,$customer_id)
{

 
    $orders = Order::where('id', $request->id)->get();
 
    $orderdetails = Orderdetail::where('order_id', $request->id)->get();

    $customers = Customer::where('id', $customer_id)->get();
  
    $data = [ 'orders' => $orders ,'orderdetails' => $orderdetails ,'customers' => $customers ]; 

    
    $pdf = PDF::loadView('admin.generate.pdfGenerate', $data);
    $todayDate = Carbon::now()->format('d-m-Y');
    // return $pdf->download('itsolutionstuff.pdf');
    return $pdf->download('Pdf-'.$todayDate.'.pdf');

//      $orders = Order::find($id);

//     $data = ['orders'=> $orders ];

//     $pdf = Pdf::loadView('generate.testing', $data);
//    // dd($pdf);
//     $todayDate = Carbon::now()->format('d-m-Y');

// 'title' => 'Welcome to ItSolutionStuff.com',
// 'date' => date('m/d/Y'),

//     return $pdf->download('invoice-'.$orders->id.'-'.$todayDate.'.pdf');
//     return $pdf->download('invoice.pdf');
}

 public function multiplesgenerate(Request $request)
 {
    // dd($request->all());

    $datass =  explode(',',$request->join_selected_values );
    $datas =  explode(',',$request->customer_values );

    // $colors_arr = array();
    $orders = Order::select("*")
    ->leftJoin("orderdetails","orderdetails.order_id","orders.id")
    ->leftJoin("customers","customers.id","orders.customer_id")
    ->whereIn('orderdetails.order_id', $datass)
    ->whereIn('orders.id', $datass)    
    ->whereIn('customers.id', $datas)
    ->orderby('orders.id','ASC')    
    ->get();

    // dd($orders);

    $data = [ 'orders' => $orders ]; 
    $pdf = PDF::loadView('admin.generate.pdf_multiples_generate', $data );
    $path = public_path('pdf/');
    $fileName =  time().'.'. 'pdf' ;
    $pdf->save($path . '/' . $fileName);
    $pdf = public_path('pdf/'.$fileName);

    return response()->download($pdf);

 }



}

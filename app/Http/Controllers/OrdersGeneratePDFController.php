<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\shortorder;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class OrdersGeneratePDFController extends Controller
{
    
public function generateInvoice(Request $request ,$id)
{

    $orders = shortorder::select("*",
    'shortorders.id',
    DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
    DB::raw('(select created_at from shortorders where shortorders.short_product  = shortorders.id ) as user_create_date'),
    )
    ->leftJoin("users","shortorders.user_id","users.id")
    ->leftJoin("products","shortorders.short_product","products.id")
    ->where('shortorders.id', $request->id)  
    ->get();
  
    $data = [ 'orders' => $orders ]; 
    
    $pdf = PDF::loadView('Admin.generate.order_pdfGenerate', $data);
    $todayDate = Carbon::now()->format('d-m-Y');
    // return $pdf->download('itsolutionstuff.pdf');
    return $pdf->download('Pdf-'.$todayDate.'.pdf');

}

 public function multiplesgenerate(Request $request)
 {
    $datass =  explode(',',$request->join_selected_values );

    $orders = shortorder::select("*",
    'shortorders.id',
    DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
    DB::raw('(select created_at from shortorders where shortorders.short_product  = shortorders.id ) as user_create_date'),
    )
    ->leftJoin("users","shortorders.user_id","users.id")
    ->leftJoin("products","shortorders.short_product","products.id")
    ->whereIn('shortorders.id', $datass)  
    ->orderBy('shortorders.id', 'ASC')  
    ->get();

   

    $data = [ 'orders' => $orders ]; 
    $pdf = PDF::loadView('Admin.generate.order_pdf_multiples_generate', $data );
    $path = public_path('pdf/');
    $fileName =  time().'.'. 'pdf' ;
    $pdf->save($path.$fileName);
    $pdf = public_path('pdf/'.$fileName);
    return response()->download($pdf);

 }



}

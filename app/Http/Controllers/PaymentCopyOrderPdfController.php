<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CopyShortOrder;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PaymentCopyOrderPdfController extends Controller
{
       
public function generateInvoice(Request $request ,$id)
{

    // dd($request->id);

    $orders = CopyShortOrder::select("*",
    'copy_short_orders.short_orders_id',
    'copy_short_orders.id',
    DB::raw('(select name from users where copy_short_orders.user_id  = users.id ) as user_name'),
    // DB::raw('(select created_at from copy_short_orders where copy_short_orders.user_id  = users.id ) as user_name'),
    // DB::raw('(select created_at from copy_short_orders  where copy_short_orders.short_product = products.id ) as user_create_date')
    )
    ->leftJoin("users","copy_short_orders.user_id","users.id")
    ->leftJoin("products","copy_short_orders.short_product","products.id")
    ->where('copy_short_orders.id', $request->id)  
    ->get();
  
    // dd($orders);
    $data = [ 'orders' => $orders ]; 
    
    $pdf = PDF::loadView('Admin.generate.payment_order_pdfGenerate', $data);
    $todayDate = Carbon::now()->format('d-m-Y');
    // return $pdf->download('itsolutionstuff.pdf');
    return $pdf->download('Pdf-'.$todayDate.'.pdf');

}

 public function multiplesgenerate(Request $request)
 {

    // dd($request->all());

    $datass =  explode(',',$request->join_selected_values );

    $orders = CopyShortOrder::select("*",
    'copy_short_orders.short_orders_id',
    'copy_short_orders.id',
    DB::raw('(select name from users where copy_short_orders.user_id  = users.id ) as user_name'),
    // DB::raw('(select created_at from shortorders where shortorders.short_product  = shortorders.id ) as user_create_date'),
    )
    ->leftJoin("users","copy_short_orders.user_id","users.id")
    ->leftJoin("products","copy_short_orders.short_product","products.id")
    ->whereIn('copy_short_orders.id', $datass)  
    ->orderBy('copy_short_orders.id', 'ASC')  
    ->get();

    // dd($orders);

    $data = [ 'orders' => $orders ]; 
    $pdf = PDF::loadView('Admin.generate.payment_order_pdf_multiples_generate', $data );
    $path = public_path('pdf/');
    $fileName =  time().'.'. 'pdf' ;
    $pdf->save($path.$fileName);
    $pdf = public_path('pdf/'.$fileName);
    return response()->download($pdf);

 }

}

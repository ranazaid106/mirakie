<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Repositories\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    protected $model, $repository;

    public function __construct(CustomerRepositoryInterface $repository, Customer $model)
    {
        $this->middleware('permission:Create Customer|Update Customer')->only('related');
        $this->middleware('permission:Create Customer')->only('store');
        $this->middleware('permission:Update Customer')->only('update');
        $this->middleware('permission:Delete Customer')->only('destroy');
        $this->middleware('permission:View Customer')->only('index');
        $this->repository = $repository;
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if(isset($request->id)){
            $items = Customer::where('id' ,$request->id)->paginate(1);
        }else{
            $items = Customer::paginate(3000);
        }
       
        return view('Admin.Customer.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->phone_number);
        $data = $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|unique:customers,phone_number',
            'social_account' => 'nullable|string',
            'post_code' => 'nullable',
        ]);
        $this->repository->create($data);
        return redirect('customer_index')->with('success', '   Customer Created Successfully .');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = $this->repository->get($id);
        return successResponse($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Customer::find($id);
        return view('Admin.Customer.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $data = $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|unique:' . Customer::class . ',phone_number',
            'social_account' => 'nullable|string',
            'post_code' => 'nullable',
        ]);
        $this->repository->update($id, $data);
        return redirect('customer_index')->with('success', '   Customer Created Successfully .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(REQUEST $request)
    {
    //   dd($request);
      $customer = $this->repository->delete($request->dataId);

      $order = Order::where('customer_id',$request->dataId )->delete();

      return response()->json([
          'status' => 200,
      ]);
        // $customer = $this->repository->delete($id);
        // return redirect('customer_index')->with('success', ' Customer Successfully Deleted');

    
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->join_selected_values;
        $product_ids = explode(",", $ids);
        foreach ($product_ids as $product_id) {

             $this->repository->delete($product_id);
      $order = Order::where('customer_id',$product_id )->delete();

        
        }
        return response()->json([
            'status' => 200,
            'all_ids'=> $request->join_selected_values,
        ]);
     
    }

}

<?php

namespace App\Http\Controllers;

use App\Imports\UberImport;
use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $model, $repository;

    public function __construct(ProductRepositoryInterface $repository, Product $model)
    {
        $this->middleware('permission:Create Product|Update Product')->only('related');
        $this->middleware('permission:Create Product')->only('store');
        $this->middleware('permission:Update Product')->only('update');
        $this->middleware('permission:Delete Product')->only('destroy');
        $this->middleware('permission:View File Upload')->only('file');
         $this->middleware('permission:View Product')->only('index');
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
        $items = Product::paginate(10);
        return view('Admin.Product.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required|string',
            'country' => 'nullable',
        ]);
        $countries = $request->input('country');
        $countriesArray = explode(',', $countries);
        $data['country'] = json_encode($countriesArray);
        $this->repository->create($data);
        return redirect('product_index')->with('success', '   Product Created Successfully .');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->repository->get($id);
        return successResponse($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Product::find($id);
        $items = $item->country;
        $countriesArray = json_decode($items);
        return view('Admin.Product.edit', compact('item', 'countriesArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required|string',
            'country' => 'nullable',
        ]);
        $countries = $request->input('country');
        $countriesArray = explode(',', $countries);
        $data['country'] = json_encode($countriesArray);
        $this->repository->update($id, $data);
        return redirect('product_index')->with('success', '   Product Created Successfully .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->repository->delete($id);
        return redirect('product_index')->with('success', ' Product Successfully Deleted');
    }

    public function country_product(Request $request)
    {
        $productArray = [];
        $products = Product::with('productVariations')->get();
        // dd($products);
        foreach ($products as $product) {
            $countryList = json_decode($product->country);
            if (in_array($request->country, $countryList) == true) {
                array_push($productArray, $product);
            }
        }
        return $productArray;
    }

    public function product_variation(Request $request)
    {
        $prod = Product::where('id', $request->product)->with('productVariations')->first();
        return $prod->productVariations;
    }
    public function file()
    {
        return view('Admin.File.index');
    }
    public function fileUpload(Request $request)
    {
        // dd($request->file);
        ini_set('max_execution_time', 1200);
        $request->validate([
            'file' => 'required',
        ]);

        $item = new UberImport;
        $item = $item->import($request->file('file'));
        return redirect('file')->with('success', ' File Successfully Imported');
    }
}

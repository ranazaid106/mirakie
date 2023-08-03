<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariation;
use App\Repositories\ProductVariationRepositoryInterface;
use Illuminate\Http\Request;

class ProductVariationController extends Controller
{
    protected $model, $repository;

    public function __construct(ProductVariationRepositoryInterface $repository, ProductVariation $model)
    {
        $this->middleware('permission:Create Product Variation|Update Product Variation')->only('related');
        $this->middleware('permission:Create Product Variation')->only('store');
        $this->middleware('permission:Update Product Variation')->only('update');
        $this->middleware('permission:Delete Product Variation')->only('destroy');
        // $this->middleware('permission:View Product Variation')->only('index');
        $this->repository = $repository;
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ProductVariation::with('product')->paginate(10);
        return view('Admin.Variations.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Product::get();
        return view('Admin.Variations.add', compact('items'));
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
            'design' => 'required',
            'size' => 'required',
            'headboard' => 'required',
            'color_or_fabric' => 'required',
            'matteres' => 'required',
            'storage' => 'required',
            'product_id' => 'required',
        ]);
        $data['design'] =  $this->json($request->input('design'));
        $data['size'] =  $this->json($request->input('size'));
        $data['headboard'] =  $this->json($request->input('headboard'));
        $data['color_or_fabric'] =  $this->json($request->input('color_or_fabric'));
        $data['matteres'] =  $this->json($request->input('matteres'));
        $data['storage'] =  $this->json($request->input('storage'));
        $this->model->create($data);
        return redirect('productvariation')->with('status', 'Variation Created Successfully!');
    }
    public function json($input)
    {
        $allDataArray = explode(',', $input);
        return json_encode($allDataArray);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductVariation  $productVariation
     * @return \Illuminate\Http\Response
     */
    public function show(ProductVariation $productVariation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductVariation  $productVariation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = $this->model->find($id);
        $product = Product::where('id', $items->product_id)->first();
        $products = Product::get();

        $design = $items->design;
        $size = $items->size;
        $headboard = $items->headboard;
        $color_or_fabric = $items->color_or_fabric;
        $matteres = $items->matteres;
        $storage = $items->storage;

        $designArray = json_decode($design);
        $sizeArray = json_decode($size);
        $headboardArray = json_decode($headboard);
        $color_or_fabricArray = json_decode($color_or_fabric);
        $matteresArray = json_decode($matteres);
        $storageArray = json_decode($storage);
        return view('Admin.Variations.edit', compact('items', 'product', 'products' , 'designArray' , 'sizeArray' , 'headboardArray', 'color_or_fabricArray', 'matteresArray' , 'storageArray'));
    }

    /**
     * Update the specified resource in storage.
     *       $data = $this->validate($request, [
            'design' => 'required',
            'size' => 'required',
            'headboard' => 'required',
            'color_or_fabric' => 'required',
            'matteres' => 'required',
            'storage' => 'required',
            'product_id' => 'required',
        ]);
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductVariation  $productVariation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'design' => 'required',
            'size' => 'required',
            'headboard' => 'required',
            'color_or_fabric' => 'required',
            'matteres' => 'required',
            'storage' => 'required',
            'product_id' => 'required',
        ]);
        $data['design'] =  $this->json($request->input('design'));
        $data['size'] =  $this->json($request->input('size'));
        $data['headboard'] =  $this->json($request->input('headboard'));
        $data['color_or_fabric'] =  $this->json($request->input('color_or_fabric'));
        $data['matteres'] =  $this->json($request->input('matteres'));
        $data['storage'] =  $this->json($request->input('storage'));
        $this->repository->update($id, $data);
        return redirect('productvariation')->with('status', 'Variation Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductVariation  $productVariation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->find($id)->delete();
        return back()->with('status', 'Variation Deleted Successfully!');
    }
}

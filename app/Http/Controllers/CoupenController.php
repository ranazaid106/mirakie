<?php

namespace App\Http\Controllers;

use App\Models\Coupen;
use App\Repositories\CoupenRepositoryInterface;
use Illuminate\Http\Request;

class CoupenController extends Controller
{
    protected $model, $repository;

    public function __construct(CoupenRepositoryInterface $repository, Coupen $model)
    {
        $this->middleware('permission:Create Coupen|Update Coupen')->only('related');
        $this->middleware('permission:Create Coupen')->only('store');
        $this->middleware('permission:Update Coupen')->only('update');
        $this->middleware('permission:Delete Coupen')->only('destroy');
        // $this->middleware('permission:View Coupen')->only('index');
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
        $items = Coupen::paginate(10);
        return view('Admin.Coupen.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Coupen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:coupens,name',
            'price' => 'required|string',
            'type' => 'nullable|in:plain,percentage',
        ]);
        $this->repository->create($data);
        return redirect('coupen_index')->with('success', '   Coupen Created Successfully .');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function show(Coupen $coupen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Coupen::find($id);
        return view('Admin.Coupen.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:coupens,name',
            'price' => 'required|string',
            'type' => 'nullable|in:plain,percentage',
        ]);
        $this->repository->update($id, $data);
        return redirect('coupen_index')->with('success', '   Coupen Created Successfully .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupen = $this->repository->delete($id);
        return redirect('coupen_index')->with('success', ' Coupen Successfully Deleted');
    }
}

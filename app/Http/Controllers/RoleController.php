<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Repositories\RoleRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    protected $model, $repository;

    public function __construct(RoleRepositoryInterface $repository, Role $model)
    {
        $this->middleware('permission:Create Role|Update Role')->only('related');
        $this->middleware('permission:Create Role')->only('store');
        $this->middleware('permission:Update Role')->only('update');
        $this->middleware('permission:Delete Role')->only('destroy');
        $this->repository = $repository;
        $this->model = $model;
        $this->repository->guard_name = 'web';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = $this->model->paginate(10);
        // dd($items);
        return view('Admin.Role.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Permission::get();
        return view('Admin.Role.add', compact('items'));
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
            'name' => [
                'required',
                'max:190',
                Rule::unique('roles')->where(function ($query) {

                    return $query->where('guard_name', 'web');
                }),
            ],

            'permissions' => 'array',
            'permissions.*' => 'required'

        ]);
        $this->repository->create($data);
        return redirect('role')->with('status', 'Role Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductVariation  $productVariation
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $item = $this->model->find($id);
        $permissions = $item->permissions()->pluck('name')->toArray();
        $allPermissions = Permission::get();
        return view('Admin.Role.edit', compact('item', 'permissions', 'allPermissions'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductVariation  $productVariation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $data = $this->validate($request, [
            'name' => [
                'required',
                'max:190',
            ],
            'permissions' => 'array',
            'permissions.*' => 'required'
        ]);

//         $roles = DB::table('model_has_roles')->where('role_id', $id)->get();
// dd($roles);

//         foreach ($roles as $role) {
//             $user = User::where('id', $role->role_id)->first();
//         dd($user);

//             $user->permissions()->sync($data['permissions']);
//         }    
        $this->repository->update($id, $data);
        return redirect('/role')->with('status', 'Role Updated Successfully!');
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
        return back()->with('status', 'Role Deleted Successfully!');
    }
}

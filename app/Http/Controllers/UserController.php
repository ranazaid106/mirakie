<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    protected $model, $repository;



    public function __construct(UserRepositoryInterface $repository, User $model)
    {
        $this->middleware('permission:Create User|Update User')->only('related');
        $this->middleware('permission:Create User')->only('store');
        $this->middleware('permission:Update User')->only('update');
        $this->middleware('permission:Delete User')->only('destroy');
        $this->repository = $repository;
        $this->model = $model;
    }


public function deleteAllusers(Request $request)

{
    // dd($request->all());
    
    $ids = $request->join_selected_values;
    $product_ids = explode(",", $ids);
    foreach ($product_ids as $product_id) {
        
        // User::where('id', $product_id)->delete();
         $this->repository->delete($product_id);
      
    }



    return response()->json([
        'status' => 200,
        'all_ids'=> $request->join_selected_values,
    ]);
}





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->id)){
            $items = $this->model->where('id',$request->id)->paginate(100000);
        }else{
            $items = $this->model->paginate(100000);
        }
        return view('Admin.User.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('Admin.User.add', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->role[0]);

        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:' . User::class . ',email',
            'password' => 'required',
            'role' => 'required',
        ]);
        $data['show_pswword'] = $data['password'];
        $data['password'] = Hash::make($data['password']);
        $item = $this->model->create($data);

        if($request->role[0]){

            $user_status = new UserStatus;
            $user_status->status = $request->role[0];
            $user_status->user_id = $item->id ;
            $user_status->save();
        
        }

      
       
        if (isset($data['role'])) {
            $item->assignRole($data['role']);
            $permissions = [];
            foreach ($data['role'] as $role) {
                $role_id = Role::where('id', $role)->with('permissions')->first();
                $permissionsGet = $role_id->permissions;
                array_push($permissions, $permissionsGet);
            }
            $item->givePermissionTo($permissions);
        }
        return redirect('/user')->with('status', 'User Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductVariation  $productVariation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $item = $this->model->with('roles')->find($id);
        $roles = Role::get();

        foreach ($item->roles as $role) {
            $role = Role::where('id', $role->id)->first();
        }
        if (isset($role)) {
            return view('Admin.User.edit', compact('item', 'roles', 'role'));
        } else {
            return view('Admin.User.edit', compact('item', 'roles'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductVariation  $productVariation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    //  dd($request->all());

        $user = $this->model->find($id);

        $data = $this->validate($request, [
            'name' => 'required|string|max:100',
            'password' => 'nullable|min:6|max:100',
            'email' => ['required',],
            'role' => 'nullable',
        ]);


        $Users = User::find($id);

        if ($request->hasFile('user_image')) {
            $oldImagePath = public_path('users_images') . '/' . $Users->image;

            // dd($oldImagePath );
        
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
        
            $file = $request->file('user_image');
            $imageName = time() . rand(1, 99) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('users_images'), $imageName);

            // dd($imageName);
        
            $Users->update([
                'image' => $imageName,
            ]);
        }
        
        // Rest of your code...
        





        if (isset($data['password']) && $data['password']) {
            $data['show_pswword'] = $data['password'];
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $user->password;
        }
        $user->update($data);
        $item = User::where('id', $id)->first();

        if($request->role[0]){
            UserStatus::where('user_id', $id)
            ->update([
                'status'=>$request->role[0],
                   ]);

        }
    



        if (isset($data['role'])) {
            $this->repository->syncRole($item, $data['role']);
            $permissions = [];
            foreach ($data['role'] as $role) {
                $role_id = Role::where('id', $role)->with('permissions')->first();
                $permissionsGet = $role_id->permissions;
                array_push($permissions, $permissionsGet);
            }
            $item->syncPermissions($permissions);
        }

        return redirect('/user')->with('status', 'User Updated Successfully!');
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

        UserStatus::where('user_id', $id)->delete();

        return back()->with('status', 'User Deleted Successfully!');
    }
}

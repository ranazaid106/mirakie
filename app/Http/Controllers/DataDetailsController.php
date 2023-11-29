<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\DataDetails;
use App\Models\UserStatus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\DataDetailsRepositoryInterface;


class DataDetailsController extends Controller
{
    // protected $model, $repository;

    // public function __construct(DataDetailsRepositoryInterface $repository, DataDetails $model)
    // {
    //     $this->middleware('permission:Create DataDetails|Update DataDetails')->only('related');
    //     $this->middleware('permission:Create DataDetails')->only('store');
    //     $this->middleware('permission:Update DataDetails')->only('update');
    //     $this->middleware('permission:Delete DataDetails')->only('destroy');
    //     $this->middleware('permission:View DataDetails')->only('index');

    //     $this->repository = $repository;
    //     $this->model = $model;
    // }



    public function index()
    {
        $users = UserStatus::where('user_id', Auth::user()->id)->first();
        // dd($users);


        $user = Auth::user(); // Get the currently logged in user
        $users_id = Auth::id(); // Get the currently logged in user
        $UserStat = UserStatus::where('user_id',$users_id)->first();
        $order_role = Role::where('id', @$UserStat->status)->first();

        if (@$order_role->name === 'Super Admin') {

            $items = DataDetails::paginate(200);
        }else{

            $items = DataDetails::where('role_id', @$order_role->id)->where('user_id',@$users_id)->paginate(200);

        }
        
        return view('Admin.Data_Details.index', compact('items', 'users'));
    }





    public function fetchUsersByRoleData(Request $request)
    {

        // dd($request->all());
        // $role = Role::findOrFail($request->roleId);
        $users = UserStatus::where('status',$request->roleId)
                ->leftjoin('users','users.id','user_status.user_id')
                ->get();
        // dd($users);
        return response()->json($users);
    }


    public function editUsersByRoleData(Request $request)
    {

        // dd($request->roleId);
        // $role = Role::findOrFail($request->roleId);
        $users = UserStatus::where('status',$request->roleId)
                ->leftjoin('users','users.id','user_status.user_id')
                ->get();
        // dd($users);
        return response()->json($users);
    }

    public function create()
    {
        $roles = Role::get();
        return view('Admin.Data_Details.create', compact('roles'));
    }


    public function store(Request $request)
    {
       

        $this->validate($request, [
            'role_id' => 'nullable',
            'links' => 'required',
            'note' => 'required',
            'user_id' => 'required',

        ]);

  

          foreach ($request->user_id as $key => $user_id_data) {
         
            $link = new DataDetails;
            $link->role_id = $request->input('role_id');
            $link->user_id = $user_id_data;
            $link->links = strip_tags($request->input('links'));
            $link->note = strip_tags($request->input('note'));
            $link->save();


        }
        
        return redirect()->back()->with('success', 'Data Details Add Successfully!');
        // return redirect()->back()->with('success', 'Link saved successfully.');
    }

    public function edit($id)
    {
        // dd($id);
        $item = DataDetails::findOrFail($id);
        $roles = Role::all();

        // dd($item);


        return view('Admin.Data_Details.edit', compact('item', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $dataDetail = DataDetails::findOrFail($id);

        // dd($request->role);

        $request->validate([
            'link' => strip_tags('required'),
            'role' =>  'required|exists:roles,id',
            'note' =>  strip_tags('required'),
            'user_id' => 'required',


        ]);

        $dataDetail->update([
            'links' => strip_tags($request->link),
            'role_id' => $request->role,
            'note' => strip_tags($request->note),
            'user_id' => $request->user_id,


        ]);

        return redirect('details')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);

          // Find the record by ID
          $record = DataDetails::find($id);
          $record->delete();
  
          return redirect()->back()->with('success', 'Record deleted successfully.');
      
    }
}

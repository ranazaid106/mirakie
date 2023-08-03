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

        if ($users->status == '2') {

            $items = DataDetails::paginate(10);
               
            }else {
                
                $items = DataDetails::where('role_id', $users->status)->paginate(10);
            }

        // dd($user->status);
        
        return view('Admin.Data_Details.index', compact('items', 'users'));
    }
    public function create()
    {
        $roles = Role::get();
        return view('Admin.Data_Details.create', compact('roles'));
    }


    public function store(Request $request)
    {
        // dd($request->role[0]);

        $this->validate($request, [
            'role_id' => 'nullable',
            'links' => 'required',
            'note' => 'required',
        ]);

        // $sanitizedLink = strip_tags($request->input('links'));

        $link = new DataDetails;
        $link->role_id = $request->input('role_id');
        $link->links = strip_tags($request->input('links'));
        $link->note = strip_tags($request->input('note'));
        $link->save();

        
        return redirect()->back()->with('success', 'Data Details Add Successfully!');
        // return redirect()->back()->with('success', 'Link saved successfully.');
    }

    public function edit($id)
    {
        // dd($id);
        $item = DataDetails::findOrFail($id);
        $roles = Role::all();

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

        ]);

        $dataDetail->update([
            'links' => strip_tags($request->link),
            'role_id' => $request->role,
            'note' => strip_tags($request->note),

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

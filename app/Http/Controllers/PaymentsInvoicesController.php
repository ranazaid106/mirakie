<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\PaymentsInvoices;
use App\Models\UserStatus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Repositories\DataDetailsRepositoryInterface;

class PaymentsInvoicesController extends Controller
{
    public function index()
    {
        $users = UserStatus::where('user_id', Auth::user()->id)->first();
        // dd($users);

        if ($users->status == '2') {

            $items = PaymentsInvoices::paginate(10);
               
            }else {
                
                $items = PaymentsInvoices::where('role_id', $users->status)->paginate(10);
            }

        // dd($user->status);
        
        return view('Admin.PaymentsInvoices.index', compact('items', 'users'));
    }
    public function create()
    {
        $roles = Role::get();
        return view('Admin.PaymentsInvoices.create', compact('roles'));
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

        $link = new PaymentsInvoices;
        $link->role_id = $request->input('role_id');
        $link->links = strip_tags($request->input('links'));
        $link->note = strip_tags($request->input('note'));
        $link->save();

        
        return redirect('PaymentsInvoices')->with('success', 'Data Details Add Successfully!');
        // return redirect()->back()->with('success', 'Link saved successfully.');
    }

    public function edit($id)
    {
        // dd($id);
        $item = PaymentsInvoices::findOrFail($id);
        $roles = Role::all();

        // dd($item);
        return view('Admin.PaymentsInvoices.edit', compact('item', 'roles'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);

        $dataDetail = PaymentsInvoices::findOrFail($id);

        // dd($request->role);

        $request->validate([
            'link' => strip_tags('required'),
            'role' => 'required|exists:roles,id',
            'note' => strip_tags('required'),

        ]);

        $dataDetail->update([
            'links' => strip_tags($request->link),
            'role_id' => $request->role,
            'note' => strip_tags($request->note),

        ]);

        return redirect('PaymentsInvoices')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);

          // Find the record by ID
          $record = PaymentsInvoices::find($id);
          $record->delete();
  
          return redirect()->back()->with('success', 'Record deleted successfully.');
      
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuggestionController extends Controller
{
    public function getSuggestions(Request $request)
{



    $query = $request->input('query'); // Word jo aapne type kiya hai
    if($query){
        $suggestions = User::select("*",
        DB::raw('(select name from users where user_status.user_id  = users.id ) as user_name'),
        )
        ->leftJoin("user_status","user_status.user_id","users.id")
        ->leftJoin("roles","user_status.status","roles.id")
        ->where('users.name', 'LIKE', $query . '%')
        ->where('roles.name', 'Agent')
        ->get();

    }else{
        $suggestions = "";
        
    }

    return response()->json($suggestions);
}





public function getSuggestionsproduct(Request $request)
{


    $querys = $request->input('querys'); // Word jo aapne type kiya hai




   



    if($querys){
                $suggestions = DB::table('products')
                ->select('name')
                ->distinct()
                ->where('name', 'LIKE',  $querys . '%')
                ->get();
    }else{
        $suggestions = "";
    }
    //  dd($suggestions);


    return response()->json($suggestions);
}


}

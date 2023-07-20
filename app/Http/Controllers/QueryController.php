<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class QueryController extends Controller
{
    //
    public function addquerytoteacher (Request $request, $ref_no){
        $add_query = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'user_id' => ['required', 'string', 'max:255'],
           
            'querytitle' => ['required', 'string', 'max:255'],
            'messages' => ['required', 'string'],
            
        ]);
        $add_query = new Query();
        $add_query->user_id = $request->user_id;
       
        $add_query->images = $request->images;
        $add_query->querytitle = $request->querytitle;
        $add_query->messages = $request->messages;
        $add_query->save();
        if ($add_query) {
            return redirect()->back()->with('success', 'you have added successfully');
            
        }else{
            return redirect()->back()->with('fail', 'you have not added successfully');
        }

    }

    public function queriedteachers(){
        $queried_teachers = Query::all();
        return view('dashboard.admin.queriedteachers', compact('queried_teachers'));
    }
}

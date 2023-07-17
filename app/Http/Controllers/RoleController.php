<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    //
    public function addrole(){

        return view('dashboard.admin.addrole');
    }
    public function createrol (Request $request){
        $request->validate([
            'role' => ['required', 'string', 'max:255'],
        ]);
        $registration = new Role();
        $registration->role = $request->role;
        $registration->save();
       
 
        if ($registration) {
            return redirect()->back()->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    public function assignrole(){

        return view('dashboard.admin.assignrole');
    }

    public function viewroles(){
        $view_roles = Role::all();
        return view('dashboard.admin.viewroles', compact('view_roles'));
    }
    
        
}


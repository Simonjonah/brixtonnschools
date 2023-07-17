<?php

namespace App\Http\Controllers;

use App\Models\Teacherassign;
use Illuminate\Http\Request;
use App\Models\User;
class TeacherassignController extends Controller
{
   

    public function assignteachertoclass (Request $request, $centername){
        $add_assignteacher = User::where('centername', $centername)->first();
        $request->validate([
            'user_id' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'ref_no' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'student_id' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'entrylevel' => ['required', 'string', 'max:255'],
            
        ]);
        $add_assignteacher = new Teacherassign();
        $add_assignteacher->user_id = $request->user_id;
        $add_assignteacher->fname = $request->fname;
        $add_assignteacher->ref_no = $request->ref_no;
        $add_assignteacher->middlename = $request->middlename;
        $add_assignteacher->surname = $request->surname;
        $add_assignteacher->classname = $request->classname;
        $add_assignteacher->centername = $request->centername;
        $add_assignteacher->student_id = $request->student_id;
        $add_assignteacher->gender = $request->gender;
        $add_assignteacher->entrylevel = $request->entrylevel;
        
        $add_assignteacher->images = $request->images;
        $add_assignteacher->save();

        return redirect()->back()->with('success', 'you have added successfully');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Classname;
use App\Models\Studycenter;
use App\Models\user;
use Illuminate\Http\Request;

class ClassnameController extends Controller
{
    public function addclass (){

        return view('dashboard.admin.addclass');
    }

    public function createclasses (Request $request){
        $request->validate([
            'classname' => ['required', 'string', 'max:255'],
            
        ]);
        $addclasses = new Classname();
        $addclasses->classname = $request->classname;
       
        $addclasses->save();

        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function viewclassestables(){
        $view_clesses = Classname::orderBy('created_at', 'DESC')->get();
        return view('dashboard.admin.viewclassestables', compact('view_clesses'));
    }

    public function editclasses($id){
        $edit_clesses = Classname::find($id);
        return view('dashboard.admin.editclasses', compact('edit_clesses'));
    }
    
    public function updateclass (Request $request, $id){
        $edit_clesses = Classname::find($id);
        $request->validate([
            'classname' => ['required', 'string', 'max:255'],
            
        ]);

        $edit_clesses->classname = $request->classname;
        $edit_clesses->update();

        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function classesdelete($id){
        $classdelted = Classname::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function classrooms($classname){
        $view_classstudents = Classname::where('classname', $classname)->first();
        $view_classstudents = user::where('classname', $classname)
        ->where('status', 'admitted')
        ->where('centername', 'Uyo')->get();

        $view_student_abujas = Classname::where('classname', $classname)->first();
        $view_student_abujas = user::where('classname', $classname)
        ->where('status', 'admitted')
        ->where('centername', 'Abuja')->get();

        $view_classes = Classname::all();
        $view_studycenters = Studycenter::all();



        return view('dashboard.admin.classrooms', compact('view_studycenters', 'view_classes', 'view_student_abujas', 'view_classstudents'));
    }

    


    public function printregclass($classname){
        $print_studentclasses = Classname::where('classname', $classname)->first();
        $print_studentclasses = user::where('classname', $classname)
        ->where('status', 'admitted')
        ->where('centername', 'Uyo')->get();

       

        return view('dashboard.admin.classrooms', compact('print_studentclasses'));
    }
}

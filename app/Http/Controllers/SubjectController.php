<?php

namespace App\Http\Controllers;

use App\Models\Classname;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function addsubject(){
        $view_classes = Classname::all();
        return view('dashboard.admin.addsubject', compact('view_classes'));
    }

    public function createsubject (Request $request){
        $request->validate([
            'subjectname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
        ]);
        $addsubjects = new Subject();
        $addsubjects->subjectname = $request->subjectname;
        $addsubjects->name = $request->name;
        $addsubjects->save();
        if ($addsubjects) {
            return redirect()->back()->with('success', 'you have successfully registered');
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    public function viewsubject(){
        $view_subjects = Subject::all();
        return view('dashboard.admin.viewsubject', compact('view_subjects'));
    }
}

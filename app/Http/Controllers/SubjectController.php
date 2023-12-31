<?php

namespace App\Http\Controllers;

use App\Models\Classname;
use App\Models\Subject;
use App\Models\User;

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
            'section' => ['required', 'string', 'max:255'],
            
        ]);
        $addsubjects = new Subject();
        $addsubjects->subjectname = $request->subjectname;
        $addsubjects->section = $request->section;
        $addsubjects->save();
        if ($addsubjects) {
            return redirect()->back()->with('success', 'you have successfully registered');
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    public function viewsubject(){
        $view_subjects = Subject::where('section', 'High School')->get();
        return view('dashboard.admin.viewsubject', compact('view_subjects'));
    }
    public function editsubject($id){
        $edit_subject = Subject::find($id);
        return view('dashboard.admin.editsubject', compact('edit_subject'));
    }
    public function deletesubject($id){
        $subjectsdelete = Subject::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have successfully deleted');
    }
    
    public function updatesubject (Request $request, $id){
        $edit_subject = Subject::find($id);

        $request->validate([
            'subjectname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            //'classname' => ['required', 'string', 'max:255'],
            
        ]);
        $edit_subject->subjectname = $request->subjectname;
        $edit_subject->section = $request->section;
       //$edit_subject->classname = $request->classname;
        $edit_subject->update();
        if ($edit_subject) {
            return redirect()->back()->with('success', 'you have successfully updated');
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }
    
    public function assignsubject($id){
        $assigned_subject = Subject::find($id);

        $assigned_teacherto_subjects = User::where('status', 'teacher')
        ->whereNotIn('section', ['High School'])->get();
        $assigned_highschool_subjects = User::where('status', 'teacher')
        ->where('section', 'High School')->get();
        $classnames = Classname::all();
        
        return view('dashboard.admin.assignsubject', compact('classnames', 'assigned_highschool_subjects', 'assigned_teacherto_subjects', 'assigned_subject'));
    }

    public function nurserysubjects(){
        $viewnursery_subjects = Subject::where('section', 'Primary')->get();
        return view('dashboard.admin.nurserysubjects', compact('viewnursery_subjects'));
    }
     
    
}

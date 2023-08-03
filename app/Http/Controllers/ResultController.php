<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\User;
use App\Models\Psycomotor;
use Illuminate\Support\Facades\Auth;
class ResultController extends Controller
{
    public function createresults(Request $request, $id){
       // $students = User::find($id);
        $data = [];
        //$students = User::find($id);
        $subjectnames = $request->input('subjectname');
        $test_1s = $request->input('test_1');
        $test_2s = $request->input('test_2');
        $test_3s = $request->input('test_3');
        $examss = $request->input('exams');
        $user_ids = $request->input('user_id');
       // $user_ids = $request->input('user_id');
        // $fnames = $request->input('fname');
        // $surnames = $request->input('surname');
        // $middlenames = $request->input('middlename');
        // $phones = $request->input('phone');
        // $classnames = $request->input('classname');
        // $centernames = $request->input('centername');
        // $genders = $request->input('gender');
        $teacher_ids = $request->input('teacher_id');
        // $ref_nos = $request->input('ref_no');
        // $statuss = $request->input('status');
        $entrylevels = $request->input('entrylevel');
        // $academic_sessions = $request->input('academic_session');
        // $sections = $request->input('section');
        // dd($students);
       
        for ($i = 0; $i < count($subjectnames); $i++) {
            $data[] = [
                'subjectname' => $subjectnames[$i],
                'test_1' => $test_1s[$i],
                'test_2' => $test_2s[$i],
                'test_3' => $test_3s[$i],
                'exams' => $examss[$i],
                'user_id' => $user_ids[$i],
                // 'fname' => $fnames[$i],
                // 'surname' => $surnames[$i],
                // 'middlename' => $middlenames[$i],
                // 'phone' => $phones[$i],
                // 'classname' => $classnames[$i],
                // 'centername' => $centernames[$i],
                // 'gender' => $genders[$i],
                'teacher_id' => $teacher_ids[$i],
                // 'ref_no' => $ref_nos[$i],
                // 'status' => $statuss[$i],
                'entrylevel' => $entrylevels[$i],
                // 'academic_session' => $academic_sessions[$i],
                // 'section' => $sections[$i],
                // 'regnumber' => $regnumbers[$i],
                
            ];
        }
//dd($data);
        Result::insert($data);
       
        //return redirect()->route('psycomotor', ['ref_no' =>$user_ids->ref_no]); 
        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function pioneertermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Pioneer Term')
        ->get();
        return view('dashboard.pioneertermresults', compact('view_myresults'));
    }
    
    public function teacherviewresults($user_id){
        $view_student = Result::find($user_id);
      
       $view_myresult_results = Result::where('teacher_id', auth::guard('web')->id())
       ->where('entrylevel', 'Pioneer Term')
        ->get();
        return view('dashboard.teacherviewresults', compact('view_student', 'view_myresult_results'));
    }
    
}



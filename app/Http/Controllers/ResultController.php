<?php

namespace App\Http\Controllers;

use App\Models\Academicsession;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Pin;
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
      
        $teacher_ids = $request->input('teacher_id');
        $academic_sessions = $request->input('academic_session');
        $regnumbers = $request->input('regnumber');
        $entrylevels = $request->input('entrylevel');
        // $academic_sessions = $request->input('academic_session');
        // $sections = $request->input('section');
        // dd($students);

        
    //    $data = Pin::create([
    //     'pins' => '1234',
    //     'user_id' => $request->user_id,
    //    ]);
       
        for ($i = 0; $i < count($subjectnames); $i++) {
            $data[] = [
                'subjectname' => $subjectnames[$i],
                'test_1' => $test_1s[$i],
                'test_2' => $test_2s[$i],
                'test_3' => $test_3s[$i],
                'exams' => $examss[$i],
                'user_id' => $user_ids[$i],
                'academic_session' => $academic_sessions[$i],
                'regnumber' => $regnumbers[$i],
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
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('entrylevel', 'Pioneer Term')
        ->get();

        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults', compact('view_results', 'view_myresult_results'));
    }

    public function teacherviewresults2nd($user_id){
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('entrylevel', 'Penultimate Term')
        ->get();

        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults', compact('view_results', 'view_myresult_results'));
    }


    public function teacherviewresults3rd($user_id){
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('entrylevel', 'Premium Term')
        ->get();
        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults3rd', compact('view_results', 'view_myresult_results'));
    }

    public function addpsychomotor($id){
        $add_psychomotor = Result::find($id);
        return view('dashboard.addpsychomotor', compact('add_psychomotor'));
    }
    public function premiumtermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Premium Term')
        ->get();
        return view('dashboard.premiumtermresults', compact('view_myresults'));
    }
    public function createpsychomotoro(Request $request, $user_id){
      //dd($request->all());
        $add_assignteacher = Result::find($user_id);
        $request->validate([
            'punt1' => ['nullable', 'string', 'max:255'],
            
        ]);

        // $add_assignteacher = new Psycomotor();
        // $add_assignteacher->user_id = $request->user_id;
        // $add_assignteacher->entrylevel = $request->entrylevel;
        
        // $add_assignteacher->teacher_id = Auth::guard('web')->user()->id;
        $add_assignteacher->punt1 = $request->punt1;
        $add_assignteacher->punt2 = $request->punt2;
        $add_assignteacher->punt3 = $request->punt3;
        $add_assignteacher->punt4 = $request->punt4;
        $add_assignteacher->punt5 = $request->punt5;

        
        $add_assignteacher->mentalalert1 = $request->mentalalert1;
        $add_assignteacher->mentalalert2 = $request->mentalalert2;
        $add_assignteacher->mentalalert3 = $request->mentalalert3;
        $add_assignteacher->mentalalert4 = $request->mentalalert4;
        $add_assignteacher->mentalalert5 = $request->mentalalert5;

        $add_assignteacher->respect1 = $request->respect1;
        $add_assignteacher->respect2 = $request->respect2;
        $add_assignteacher->respect3 = $request->respect3;
        $add_assignteacher->respect4 = $request->respect4;
        $add_assignteacher->respect5 = $request->respect5;

        $add_assignteacher->neat1 = $request->neat1;
        $add_assignteacher->neat2 = $request->neat2;
        $add_assignteacher->neat3 = $request->neat3;
        $add_assignteacher->neat4 = $request->neat4;
        $add_assignteacher->neat5 = $request->neat5;

        $add_assignteacher->polite1 = $request->polite1;
        $add_assignteacher->polite2 = $request->polite2;
        $add_assignteacher->polite3 = $request->polite3;
        $add_assignteacher->polite4 = $request->polite4;
        $add_assignteacher->polite5 = $request->polite5;

        $add_assignteacher->honesty1 = $request->honesty1;
        $add_assignteacher->honesty2 = $request->honesty2;
        $add_assignteacher->honesty3 = $request->honesty3;
        $add_assignteacher->honesty4 = $request->honesty4;
        $add_assignteacher->honesty5 = $request->honesty5;

        $add_assignteacher->relationship1 = $request->relationship1;
        $add_assignteacher->relationship2 = $request->relationship2;
        $add_assignteacher->relationship3 = $request->relationship3;
        $add_assignteacher->relationship4 = $request->relationship4;
        $add_assignteacher->relationship5 = $request->relationship5;
    
        $add_assignteacher->williness1 = $request->williness1;
        $add_assignteacher->williness2 = $request->williness2;
        $add_assignteacher->williness3 = $request->williness3;
        $add_assignteacher->williness4 = $request->williness4;
        $add_assignteacher->williness5 = $request->williness5;

        $add_assignteacher->teamspirit1 = $request->teamspirit1;
        $add_assignteacher->teamspirit2 = $request->teamspirit2;
        $add_assignteacher->teamspirit3 = $request->teamspirit3;
        $add_assignteacher->teamspirit4 = $request->teamspirit4;
        $add_assignteacher->teamspirit5 = $request->teamspirit5;

        $add_assignteacher->verbal1 = $request->verbal1;
        $add_assignteacher->verbal2 = $request->verbal2;
        $add_assignteacher->verbal3 = $request->verbal3;
        $add_assignteacher->verbal4 = $request->verbal4;
        $add_assignteacher->verbal5 = $request->verbal5;
        $add_assignteacher->teacher_comment = $request->teacher_comment;

        $add_assignteacher->sports1 = $request->sports1;
        $add_assignteacher->sports2 = $request->sports2;
        $add_assignteacher->sports3 = $request->sports3;
        $add_assignteacher->sports4 = $request->sports4;
        $add_assignteacher->sports5 = $request->sports5;

        $add_assignteacher->arts1 = $request->arts1;
        $add_assignteacher->arts2 = $request->arts2;
        $add_assignteacher->arts3 = $request->arts3;
        $add_assignteacher->arts4 = $request->arts4;
        $add_assignteacher->arts5 = $request->arts5;

        $add_assignteacher->creativity1 = $request->creativity1;
        $add_assignteacher->creativity2 = $request->creativity2;
        $add_assignteacher->creativity3 = $request->creativity3;
        $add_assignteacher->creativity4 = $request->creativity4;
        $add_assignteacher->creativity5 = $request->creativity5;
        
        $add_assignteacher->music1 = $request->music1;
        $add_assignteacher->music2 = $request->music2;
        $add_assignteacher->music3 = $request->music3;
        $add_assignteacher->music4 = $request->music4;
        $add_assignteacher->music5 = $request->music5;

        $add_assignteacher->dance1 = $request->dance1;
        $add_assignteacher->dance2 = $request->dance2;
        $add_assignteacher->dance3 = $request->dance3;
        $add_assignteacher->dance4 = $request->dance4;
        $add_assignteacher->dance5 = $request->dance5;
        $add_assignteacher->pins = substr(rand(0,time()),0, 9);
        $add_assignteacher->update();

        return redirect()->back()->with('success', 'you have added successfully');
    }


    public function pensulatermresults(){
        $view_myresult_penultimates = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Penultimate Term')
        ->get();
        return view('dashboard.pensulatermresults', compact('view_myresult_penultimates'));
    }
    
   
    public function checkresult(){
       $the_results = Academicsession::all();
        return view('dashboard.checkresult', compact('the_results'));
    }
    
}



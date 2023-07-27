<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\User;
class ResultController extends Controller
{
    public function createresults(Request $request, $ref_no){
        $add_scores = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'subjectname' => ['required', 'array', 'max:255'],
           // 'test_1' => ['required', [], 'max:255'],
            
        ]);
        //dd($request->all());
        foreach ($request->options as $key => $option) {
            $option = new QuestionOption();  ////////HERE I AM FACING THAT ERROR
            $option->question_id = $question->id;
            $option->option = $option;
            $option->status = 'active';
            $option->save();
        }
       foreach ($request->subjectname as $add_score){
        $add_score = new Result();
        $add_score->subjectname = $add_score;
        $add_score->user_id = $request->user_id;
        //$add_score->student_id = Auth::guard('student')->user()->id;
        $add_score->save();
    }
       
        $add_scores->save();

        return redirect()->back()->with('success', 'you have added successfully');
    }
}

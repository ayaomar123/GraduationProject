<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class FrontQuestionController extends Controller
{
    public function index(){
        if(auth()->user()) {
            $answers = Answer::all();
            return view('front.quiz', compact('answers'));
        }else{
            return view('auth.login');
        }
    }

    public function store(Request $request){
        //dd($request->all());
        $user= Auth::user();
        $requestData = $request->all();
        foreach($requestData['question_id'] as $qid){
            $qanswer = $requestData['q'.$qid];
            Result::create([
                'question_id'=>$qid,
                'answer_id'=>$qanswer ,
                 'user_id' => $user->id   ]
            );
        }
//        $requestData['answer_id'] = $request->answer_id;
//        $answer = Result::create($requestData);
//        $answer->answers()->attach($request->question_id);
//        dd($answer);

//
        Session::flash("msg","s: تمت الجابة بنجاح");
        return redirect()->back();
    }
}

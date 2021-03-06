<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class FrontQuestionController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            $questions = Question::with('answers')->get();
            return view('front.quiz', compact('questions'));
        } else {
            return view('auth.login');
        }
    }

    public function store(Request $request){
        //dd($request->all());
        $user= Auth::user();
        $requestData = $request->all();
        foreach($requestData['question_id'] as $qid){
            //dd($qid);
                $qanswer = $requestData['q' . $qid];
                Result::create([
                        'question_id' => $qid,
                        'answer_id' => $qanswer,
                        'user_id' => $user->id,
                        'answer_weight'=> 1
                    ]
                );

        }
        Session::flash("msg","s: تمت الإجابة بنجاح");
        return redirect()->back();
    }
}

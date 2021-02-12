<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontQuestionController extends Controller
{
    public function index(){
        $answers = Answer::all();
        //dd($answers);
        return view('front.quiz',compact('answers'));
    }

    public function store(Request $request){
        $requestData = $request->all();
        dd($requestData);
        $user= Auth::user();
        $answer = Answer::create($requestData);
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect(route("answers.index"));
    }
}

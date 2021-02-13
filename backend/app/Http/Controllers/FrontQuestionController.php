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
        $answers = Answer::all();
        //dd($answers);
        return view('front.quiz',compact('answers'));
    }

    public function store(Request $request){
        $user= Auth::user();
        $requestData = $request->all();
dd($requestData);
        $answer = Result::create($requestData);

        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect()->back();
    }
}

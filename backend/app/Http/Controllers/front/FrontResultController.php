<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Result;


class FrontResultController extends Controller
{
    public function index()
    {
        $answers = Result::where('user_id',auth()->user()->id)
            ->get();

        foreach ($answers as $answer){
//            dd($answers);
            $aya =  Answer::where('id',$answer->answer_id)
                ->get();
//            dd($aya);
        }
        return view('Front.result',compact('aya'));

    }

}

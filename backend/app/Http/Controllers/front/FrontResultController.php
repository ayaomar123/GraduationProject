<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Result;


class FrontResultController extends Controller
{
    public function index()
    {
        $answers = Result::where('user_id', auth()->user()->id)
            ->get();

//        dd($answers);
        $aya = 0;
        foreach ($answers as $answer) {

            $aya += Answer::where('id', $answer->answer_id)->avg('weight');


        }
        return view('Front.result', compact('answers', 'aya'));

    }

}

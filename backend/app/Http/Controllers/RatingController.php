<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    //تقييم المقالة
    public function postRating($course, Request $request)
    {
        //$requestData = $request->all();
        $requestData['user_id'] = Auth::id();
        //dd($course);
        $requestData['course_id'] = $course;
        $requestData['rating'] = $request->star;
        //dd($requestData);
        Rating::create($requestData);
        return redirect()->back();
    }
}

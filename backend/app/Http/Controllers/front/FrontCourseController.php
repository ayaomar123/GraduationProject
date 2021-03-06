<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;

class FrontCourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(6);
        //dd($courses);
        return view('front.courses.course', compact('courses'));
    }



    public function details($slug)
    {
        $courseDetails = Course::where('Courses.slug', $slug)
            ->where('status', 1)
            ->first();
         //dd($scholarDetails);

        return view('front.courses.courseDetails', compact('courseDetails'));
    }
}

<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;

class FrontCourseController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $courses = Course::paginate(6);
        //dd($courses);
        return view('front.courses.course', compact('courses','departments'));
    }

    public function subscription($slug){
        $departments = Department::all();
        $subscription = Course::where('Courses.slug', $slug)
            ->where('status', 1)
            ->first();
//        dd();
        return view('front.courses.coursesuscription', compact('subscription','departments'));
    }
    public function menu($id)
    {
        $departments = Department::all();
        $menus = Course::with('department')->where('department_id',$id)->get();
//        dd($menus);
        return view('front.courses.menu', compact('menus','departments'));
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

<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Rating;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Session;


class FrontCourseController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;
        $departments = Department::all();
        $courses = Course::whereRaw('(name like ?)', ["%$q%"])->paginate(6)->appends(['q' => $q]);
        //dd($courses);
        return view('front.courses.course', compact('courses', 'departments'));
    }

    public function subscription($slug)
    {
        $departments = Department::all();
        $subscription = Course::where('Courses.slug', $slug)
            ->where('status', 1)
            ->first();
//        dd();
        if (auth()->user()) {
            return view('front.courses.coursesuscription', compact('subscription', 'departments'));
        }
        else {
            session()->flash('msg', 's:قم بتسجيل الدخول كي تتمكن من التسجيل للدورة');
            return view('auth.login');
        }
    }


    protected function postSubscription(Request $request)
    {
        $requestData = $request->all();
        $subscription = Subscription::create($requestData);
        Session::flash("msg", "s: تمت التسجيل في الدورة بنجاح سيتم التواصل معكم في أقرب فرصة");
        return redirect(route("getCourses"));

    }

    public function menu($id, Request $request)
    {
        $q = $request->q;
        $departments = Department::all();
        $menus = Course::with('department')->where('department_id', $id)
            ->whereRaw('(name like ?)', ["%$q%"])->paginate(6)->appends(['q' => $q]);
//        dd($menus);
        return view('front.courses.menu', compact('menus', 'departments'));
    }


    public function details($slug)
    {
        $courseDetails = Course::where('Courses.slug', $slug)
            ->where('status', 1)
            ->first();
        //dd($courseDetails->id);
        $ratings = Rating::where('course_id', $courseDetails->id)->avg('rating');
        //dd($ratings);

        return view('front.courses.courseDetails', compact('courseDetails', 'ratings'));
    }
    public function destroy($id)
    {
        $itemDB = Subscription::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم الحذف بنجاح");
        return redirect(route("getCourses"));
    }
}

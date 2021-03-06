<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;

class FrontScholarController extends Controller
{
    public function index()
    {
        $scholars = Scholarship::paginate(6);
        //dd($scholars);
        return view('front.scholars.scholar', compact('scholars'));
    }


    public function internal()
    {
        $scholars = Scholarship::where('scholarships.internal',1)->paginate(6);
        //dd($scholars);
        return view('front.scholars.scholar', compact('scholars'));
    }


    public function external()
    {
        $scholars = Scholarship::where('scholarships.internal',0)->paginate(6);
        //dd($scholars);
        return view('front.scholars.scholar', compact('scholars'));
    }
    public function details($slug)
    {
        $scholarDetails = Scholarship::where('scholarships.slug', $slug)
            ->where('status', 1)
            ->first();
         //dd($scholarDetails);

        return view('front.scholars.scholarDetails', compact('scholarDetails'));
    }
}

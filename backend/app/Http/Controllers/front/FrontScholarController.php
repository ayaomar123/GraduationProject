<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class FrontScholarController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;
        $scholars = Scholarship::whereRaw('(name like ?)',["%$q%"])->paginate(6)->appends(['q'=>$q]);

        return view('front.scholars.scholar', compact('scholars'));
    }


    public function internal(Request $request)
    {
        $q = $request->q;
        $scholars = Scholarship::where('scholarships.internal',1)->whereRaw('(name like ?)',["%$q%"])->paginate(6)->appends(['q'=>$q]);
        //dd($scholars);
        return view('front.scholars.scholar', compact('scholars'));
    }


    public function external(Request $request)
    {
        $q = $request->q;
        $scholars = Scholarship::where('scholarships.internal',0)->whereRaw('(name like ?)',["%$q%"])->paginate(6)->appends(['q'=>$q]);;
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

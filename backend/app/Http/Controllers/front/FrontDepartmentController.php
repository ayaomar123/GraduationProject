<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class FrontDepartmentController extends Controller
{
    public function index(){
        $departments = Department::paginate(6);
//        dd($departments);
        return view('front.departments.department',compact('departments'));
    }

    public function details($slug)
    {
        $departmentDetails=Department::where ('departments.slug',$slug)
            ->where('status',1)
            ->first();
       // dd($product);

        return view('front.departments.departmentDetails',compact('departmentDetails'));
    }
}

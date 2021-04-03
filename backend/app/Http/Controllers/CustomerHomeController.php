<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\EditRequest;
use App\Models\Answer;
use App\Models\Course;
use App\Models\Result;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CustomerHomeController extends Controller
{
    public function index(){
        return view('front.CustomerHome');
    }
    public function show(){
        $user=auth()->user();
        return view('admin.Customer.profile')->withUser($user);
    }
    public function edit(){
        if (auth()->user()) {
            $user = auth()->user();
            return view('layouts.frontlayout.profile')->withUser($user);
        } else {
            return redirect(route('login'));
        }
    }
    public function update(EditRequest $request)
    {
        $user = auth()->user();
        $filename = "";
        $requestData = $request->all();
        //dd($requestData);

        if ($request->image) {
            $filename = $request->image->store('public/images');
            $imagename = $request->image->hashName();
            $requestData['image'] = $imagename;
        }
        $user->fill($requestData);
        //dd($requestData);
        $user->save();
        $customerDB = User::find($request->id);
        if ($customerDB) {
            $customerDB->update($requestData);
        }
        session()->flash('msg', 's:تم تعديل الملف الشخصي بنجاح');
        return redirect(route("myprofile.edit"));
    }

    public function myCourse()
    {
        //أسماء الدورات اللي مسجل فيها اليوزر اللي داخل
        if (auth()->user()) {
            $crs = Subscription::where('user_id', auth()->user()->id)->get();
//            dd($crs);
            foreach ($crs as $ce) {
                $c = Course::where('id', $ce->id)->take(10)->get();
                return view('layouts.frontlayout.myCourses', compact('crs'));
            }
            return view('layouts.frontlayout.myCourses', compact('crs'));
        } else {
            return redirect(route('login'));
        }

    }
}

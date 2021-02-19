<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\EditRequest;
use App\Models\Answer;
use App\Models\Result;
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

    public function update(EditRequest $request)
    {
        $user = auth()->user();
        $filename = "";
        $requestData = $request->all();

        if ($request->image) {
            $filename = $request->image->store('public/user-images');
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
        return redirect(route("profile.edit"));
    }

}

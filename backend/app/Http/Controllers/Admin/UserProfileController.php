<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Profile\EditRequest;


class UserProfileController extends Controller
{
    public function edit(){
        $user=auth()->user();
        return view('admin.user.profile')->withUser($user);
    }

    public function update(EditRequest $request)
    {
        $user = auth()->user();
        $filename="";
        $requestData= $request->all();

        if($request->image){
            $filename= $request->image->store('public/user-images');
            $imagename= $request->image->hashName();
            $requestData['image'] = $imagename;
        }
        $user->fill($requestData);
        //dd($requestData);
        $user->save();
        $customerDB= User::find($request->id);
        if($customerDB){
            $customerDB->update($requestData);
        }
        session()->flash('msg','s:تم تعديل الملف الشخصي بنجاح');
        return redirect(route("profile.edit"));
    }
}

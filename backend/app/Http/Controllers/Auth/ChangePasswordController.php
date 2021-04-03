<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Msg;
use Illuminate\Http\Request;
use App\Http\Requests\ChangePassword\EditRequest;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function edit(){
        return view('auth.change-password');
    }

    public function update(EditRequest $request){
        if(Hash::check($request->password,auth()->user()->password)){
            if($request->password == $request->new_password){
                session()->flash('msg','w: يجب أن تكون كلمة المرور الجديدة مختلفة عن كلمة المرور الحالية');
                return redirect(route('password.edit'));
            }
            $user = auth()->user();
            $user->password = bcrypt($request->new_password);
            $user->save();
            session()->flash('msg','s: تم تغيير كلمة السر بنجاح');
        }else{
            session()->flash('msg','e: كلمة المرور الحالية ليست صحيحة .. يُرجى المحاولة مرة أخرى');
        }
        return redirect(route('password.edit'));
    }


    //اظهار الرسائل الواردة
    public function show(){
        $msgs = Msg::all();
        return view('layouts.admin.msgs',compact('msgs'));
    }

    //حذف الرسائل
    public function destroy($id)
    {
        $msgs = Msg::all();
        $itemDB = Msg::find($id);
        $itemDB->delete();
        session()->flash("msg", "w:تم حذف الرسالة بنجاح");
        return redirect(route('msg.show'));
    }
}

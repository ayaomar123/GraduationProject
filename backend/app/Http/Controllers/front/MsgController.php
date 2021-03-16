<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Msg;
use Session;

class MsgController extends Controller
{
    public function store(Request $request){
        $requestData = $request->all();
        //dd($requestData);
        $msg = Msg::create($requestData);
        Session::flash("msg","s: تمت إرسال الرسالة بنجاح");
        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\MsgRequest;
use Illuminate\Http\Request;
use App\Models\Msg;
use Session;

class MsgController extends Controller
{
    public function store(Request $request){
        $requestData = $request->all();
        $msg = Msg::create($requestData);
        Session::flash("msg","s: تمت إرسال الرسالة بنجاح");
        return redirect()->back();

    }
}

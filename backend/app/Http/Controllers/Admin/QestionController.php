<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

class QestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $items = Question::whereRaw('(question_body like ?)',["%$q%"])->paginate(10)->appends(['q'=>$q]);
//dd($items);
        return view("admin.question.index")->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("admin.question.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        //dd($requestData);
        $user = Question::create($requestData);
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect(route("question.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = Question::find($id);
        if(!$item){
            session()->flash("msg","e:عنوان السؤال غير صحيح");
            return redirect(route("question.index"));
        }
        return view("admin.question.edit",compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $question = Question::find($id);
        $requestData = $request->all();
        $question->update($requestData);

        session()->flash("msg","s:تم تعديل السؤال بنجاح");
        return redirect(route("question.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $itemDB = Question::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم حذف السؤال بنجاح");
        return redirect(route("question.index"));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Session;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $question = Question::all();
        $items = Answer::whereRaw('(answer like ?)',["%$q%"])->paginate(10)->appends(['q'=>$q]);

        return view("admin.answer.index",compact('items','question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
        return view("admin.answer.create",compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $answer = Answer::create($requestData);
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect(route("answers.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Answer::find($id);
        $questions = Question::all();
        if(!$item){
            session()->flash("msg","e:عنوان السؤال غير صحيح");
            return redirect(route("answers.index"));
        }
        return view("admin.answer.edit",compact('item','questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $question = Answer::find($id);
        $requestData = $request->all();
        $question->update($requestData);

        session()->flash("msg","s:تم تعديل السؤال بنجاح");
        return redirect(route("answers.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemDB = Answer::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم حذف السؤال بنجاح");
        return redirect(route("answers.index"));
    }
}

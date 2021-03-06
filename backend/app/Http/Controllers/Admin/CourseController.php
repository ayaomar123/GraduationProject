<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

class CourseController extends Controller
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
        $items = Course::whereRaw('(name like ?)',["%$q%"])->paginate(10)->appends(['q'=>$q]);

        return view("admin.courses.index")->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $departments = Department::all();
        $trainers = Trainer::all();
        return view("admin.courses.create",compact('departments','trainers'));

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
        if($request->image){
            $filename= $request->image->store('public/images');
            $imagename= $request->image->hashName();
            $requestData['image'] = $imagename;
        }
        $course = Course::create($requestData);
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect(route("courses.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $item = Course::find($id);
        if(!$item){
            session()->flash("msg","w:غير متاح");
            return redirect(route("courses.index"));
        }
        return view("admin.courses.show",compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $departments = Department::all();
        $trainers = Trainer::all();
        $item = Course::find($id);
        if(!$item){
            session()->flash("msg","e:غير متاح");
            return redirect(route("courses.index"));
        }
        return view("admin.courses.edit",compact('item','departments','trainers'));
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
        $itemDB = Course::find($id);
        $requestData = $request->all();
        if($request->image){
            $fileName = $request->image->store("public/images");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
        }
        $itemDB->update($requestData);

        session()->flash("msg","s:تم التحديث بنجاح ");
        return redirect(route("courses.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $itemDB = Course::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم الحذف بنجاح");
        return redirect(route("courses.index"));
    }
}

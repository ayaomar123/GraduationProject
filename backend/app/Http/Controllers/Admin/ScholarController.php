<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

class ScholarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param ٌٌRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $items = Scholarship::whereRaw('(name like ?)',["%$q%"])->paginate(10)->appends(['q'=>$q]);
        //dd($items);
        return view("admin.scholarships.index")->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.scholarships.create");

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
        //dd($requestData);
        if($request->image){
            $filename= $request->image->store('public/images');
            $imagename= $request->image->hashName();
            $requestData['image'] = $imagename;
        }
        $Scholarship = Scholarship::create($requestData);
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect(route("scholarships.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Scholarship::find($id);
        if(!$item){
            session()->flash("msg","w:غير متاح");
            return redirect(route("scholarships.index"));
        }
        return view("admin.scholarships.show",compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Scholarship::find($id);
        if(!$item){
            session()->flash("msg","e:غير متاح");
            return redirect(route("scholarships.index"));
        }
        return view("admin.scholarships.edit")->with('item',$item);
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
        $itemDB = Scholarship::find($id);
        $requestData = $request->all();
        if($request->image){
            $fileName = $request->image->store("public/images");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
        }
        $itemDB->update($requestData);

        session()->flash("msg","s:تم التحدسث بنجاح ");
        return redirect(route("scholarships.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemDB = Scholarship::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم الحذف بنجاح");
        return redirect(route("scholarships.index"));
    }
}

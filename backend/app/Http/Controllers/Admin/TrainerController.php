<?php
namespace App\Http\Controllers\Admin;
use App\Http\Requests\Trainer\CreateRequest;
use App\Http\Requests\Trainer\EditRequest;
use App\Models\Trainer;
use Illuminate\Http\Request;
use DB;
use Session;

use App\Http\Controllers\Controller;


class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Trainer::all();
        return view("admin.trainers.index")->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.trainers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $requestData = $request->all();
        if($request->image){
            $fileName = $request->image->store("public/images");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
        }
        Trainer::create($requestData);
        Session::flash("msg","s:تمت عملية الإضافة بنجاح ");
        return redirect(route("trainers.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $item = Trainer::find($id);
        if(!$item){
            session()->flash("msg","w:غير متاح");
            return redirect(route("trainers.index"));
        }
        return view("admin.trainers.show",compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Trainer::find($id);
        if(!$item){
            session()->flash("msg","e:غير متاح");
            return redirect(route("trainers.index"));
        }
         return view("admin.trainers.edit")->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $itemDB = Trainer::find($id);
        $requestData = $request->all();
        if($request->image){
            $fileName = $request->image->store("public/images");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
        }
        $itemDB->update($requestData);

        session()->flash("msg","s:تم التحدسث بنجاح ");
        return redirect(route("trainers.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemDB = Trainer::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم الحذف بنجاح");
        return redirect(route("trainers.index"));
    }
}

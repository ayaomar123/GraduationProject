<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\StaticPage;
use App\Http\Requests\StaticPage\CreateRequest;
use App\Http\Requests\StaticPage\EditRequest;
use App\Http\Controllers\Controller;


class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = StaticPage::all();
        return view("static-page.index")->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("static-page.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        if(!isset($request['active'])){
            $request['active'] = 0;
        }
        $requestData = $request->all();
        if($request->image){
            $fileName = $request->image->store("public/images");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
        }
        StaticPage::create($requestData);
        Session::flash("msg","s:تمت عملية الإضافة بنجاح ");
        return redirect(route("static-page.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $item = StaticPage::find($id);
        if(!$item){
            session()->flash("msg","w:غير متاح");
            return redirect(route("static-page.index"));
        }
        return view("static-page.show",compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = StaticPage::find($id);
        if(!$item){
            session()->flash("msg","e:غير متاح");
            return redirect(route("static-page.index"));
        }
         return view("static-page.edit")->with('item',$item);
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
        $itemDB = StaticPage::find($id);        
        $requestData = $request->all();
        if($request->image){
            $fileName = $request->image->store("public/images");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
        }
        $itemDB->update($requestData);

        session()->flash("msg","s:تم التحدسث بنجاح ");
        return redirect(route("static-page.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemDB = StaticPage::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم الحذف بنجاح");
        return redirect(route("static-page.index"));
    }
}
<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\EditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Spatie\Permission\Models\Role;

class CustomerController extends Controller
{

    public function index(Request $request)
    {

        $q = $request->q;
        $adminRole = Role::findByName('customer');
        $items = $adminRole->users()->whereRaw('(email like ? or name like ?)',["%$q%","%$q%"])
            ->paginate(10)
            ->appends(['q'=>$q]);
        return view("admin.Customer.index")->with('items',$items);
    }





}

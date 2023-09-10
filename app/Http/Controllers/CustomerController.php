<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends BaseController
{
    function index()
    {
        $page_heading = "Customer";
        if ($this->isSiteHead) {
            $customers = User::where(['parent_id' => Auth::user()->id, 'usertype_id' => 5])->get();
        } else {
            $customers = User::where('usertype_id', 5)->get();
        }
        $layoutfor = $this->layoutfor;
        return view('pages.admin.customer.list', compact('page_heading', 'customers', 'layoutfor'));
    }
    function create()
    {
        $page_heading = 'Plot Registry';
        $customer = null;
        $layoutfor = $this->layoutfor;
        return view('pages.admin.customer.create', compact('customer', 'page_heading', 'layoutfor'));
    }
    function store(Request $req)
    {
        // dd($req->all());
        $customer = User::create($req->all());
        if ($customer instanceof User) {
            return redirect()->route('customer.list')->with('success', 'Customer created successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    function edit($id)
    {
        $page_heading = 'Customer';
        $customer = User::find($id);
        $layoutfor = $this->layoutfor;
        return view('pages.admin.customer.edit', compact('customer', 'page_heading', 'layoutfor'));
    }

    function update(Request $req)
    {
        $req->request->remove('_token');
        $customer = User::find($req->id);
       
        $customer->update($req->all());
        if ($customer) {
            return redirect()->route('customer.list')->with('success', 'Customer updated successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}

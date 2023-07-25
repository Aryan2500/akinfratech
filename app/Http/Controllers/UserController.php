<?php

namespace App\Http\Controllers;

use App\Helpers\UserHelper;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function  index()
    {
        $page_heading  = 'Users';
        $users = User::orderBy('created_at', 'ASC')->get();
        return view('pages.admin.user.list', compact('page_heading', 'users'));
    }
    public function  create()
    {
        $page_heading = 'Create a new user';
        $user = null;
        return view('pages.admin.user.create', compact('page_heading', 'user'));
    }
    public function store(Request $req)
    {
        // dd($req->all());
        if (UserHelper::checkReferCodeExist($req->refer_code)) {
            return redirect()->route('user.list')->with('error', 'Referal Code Already Exists');
        }
        try {
            User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'parent_id' => Auth::user()->id,
                'usertype_id' => $req->user_type,
                'refer_code' => $req->refer_code,
                'parent_refer_code' => $req->parent_refer_code,
                'address' => $req->address,
                'phone' => $req->phone,
            ]);
            return redirect()->route('user.list')->with('success', 'User created successfully');
        } catch (QueryException $th) {
            return redirect()->route('user.list')->with('error', 'something went wrong' . $th->getMessage());
        }
    }
    public function edit($id)
    {
        $page_heading = 'Edit user';

        $user = User::find($id);
        return view('pages.admin.user.edit', compact('user', 'page_heading'));
    }
    public function update(Request $req)
    {
        // dd($req->all());

        // if (UserHelper::checkReferCodeExist($req->refer_code)) {
        //     return redirect()->route('user.list')->with('error', 'Referal Code Already Exists');
        // }
        try {
            User::find($req->id)->update([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'parent_id' => Auth::user()->id,
                'usertype_id' => $req->user_type,
                'refer_code' => $req->refer_code,
                'parent_refer_code' => $req->parent_refer_code,
                'address' => $req->address,
                'phone' => $req->phone,
            ]);
            return redirect()->route('user.list')->with('success', 'User updated successfully');
        } catch (QueryException $th) {
            return redirect()->route('user.list')->with('error', 'something went wrong' . $th->getMessage());
        }
    }
    public function lock()
    {
    }
}

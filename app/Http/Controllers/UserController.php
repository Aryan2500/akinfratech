<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        return view('pages.admin.user.create', compact('page_heading'));
    }
    public function store(Request $req)
    {
        // dd($req->all());
        try {
            User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'parent_id' => Auth::user()->id,
                'usertype_id' => $req->user_type,
            ]);
            return redirect()->route('user.list')->with('success', 'User created successfully');
        } catch (\Throwable $th) {
            return redirect()->route('user.list')->with('error', 'something went wrong');
        }
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function lock()
    {
    }
}

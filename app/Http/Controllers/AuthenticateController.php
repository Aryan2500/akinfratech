<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    //

    public function login()
    {
        return view('pages.public.login');
    }

    public function doLogin(Request $req)
    {
        $data = $req->only('email', 'password');

        if (Auth::attempt($data)) {
            // dd(Auth::user()->type->name);
            if (Auth::user()->type->name == SITE_HEAD) {
                return redirect()->route('sh.dashboard');
            }
            if (Auth::user()->type->name == ADMIN) {
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid creadentials')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

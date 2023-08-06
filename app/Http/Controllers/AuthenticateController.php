<?php

namespace App\Http\Controllers;

use App\Mail\MfaMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        if (!session('otp') || empty($req->otp)) {
            return redirect()->back()->with('error', 'Otp not found ')->withInput();
        }

        if (session('otp') == $req->otp) {
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
        } else {
            return redirect()->back()->with('error', 'Otp Invalid ')->withInput();
        }
    }

    public function getOtp(Request $req)
    {
        if (empty($req->email)) return   response()->json(['status' => false, 'message' => 'Email id required'], 419);
        $otp = random_int(11111, 99999);
        session(['otp' => $otp]);
        $user = User::where('email', $req->email)->first();
        if ($user) {
            $data['otp'] = $otp;
            $data['name'] = $user->name;
            $data['email'] = $user->email;
            Mail::to($req->email)->send(new MfaMail($data));
            return response()->json(['status' => true, 'message' => 'OTP send to your email address']);
        } else {
            return response()->json(['status' => false, 'message' => 'Invalid creadentials']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

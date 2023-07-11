<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    //
    public function index()
    {
        $page_heading = 'Sites';
        $sites  = Site::all();
        return view('pages.admin.site.list', compact('page_heading', 'sites'));
    }
    public function create()
    {
        $page_heading = 'Create site';
        $site_heads = User::all();
        // dd($site_heads[0]->type);
        return view('pages.admin.site.create', compact('page_heading', 'site_heads'));
    }
    public function store(Request $req)
    {
        $site = Site::create([
            'name' => $req->name,
            'address' => $req->address,
            'total_size' => $req->total_size,
            'user_id' => Auth::user()->id,
            'sitehead_id' => $req->sitehead_id
        ]);
        if ($site instanceof Site) {
            return redirect()->route('site.list')->with('success', 'site created successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function update()
    {
    }
    public function edit()
    {
    }
}

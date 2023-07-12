<?php

namespace App\Http\Controllers;

use App\Models\Plottype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlottypeController extends Controller
{
    //
    public function index()
    {
        $page_heading = 'Plot type';
        $plottypes  = Plottype::all();
        return view('pages.admin.plottype.list', compact('page_heading', 'plottypes'));
    }
    public function create()
    {
        $page_heading = 'Create plot type';

        return view('pages.admin.plottype.create', compact('page_heading'));
    }
    public function store(Request $req)
    {
        $site = Plottype::create([
            'name' => $req->name,
            'user_id' => Auth::user()->id,
        ]);
        if ($site instanceof Plottype) {
            return redirect()->route('plottype.list')->with('success', 'plot type created successfully');
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

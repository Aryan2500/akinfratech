<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlotController extends Controller
{
    //

    public function index()
    {
        $page_heading = 'Plots';
        $plots  = Plot::all();
        return view('pages.admin.plot.list', compact('page_heading', 'plots'));
    }
    public function create()
    {
        $page_heading = 'Create plot';
        $sites = Site::all();
        // dd($site_heads[0]->type);
        return view('pages.admin.plot.create', compact('page_heading', 'sites'));
    }
    public function store(Request $req)
    {   
        // dd($req->all());
        $plot = Plot::create([
            'name' => $req->name,
            'address' => $req->address,
            'price' => $req->price,
            'size' => $req->size,
            'user_id' => Auth::user()->id,
            'site_id' => $req->site_id
        ]);
        if ($plot instanceof Plot) {
            return redirect()->route('plot.list')->with('success', 'plot created successfully');
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

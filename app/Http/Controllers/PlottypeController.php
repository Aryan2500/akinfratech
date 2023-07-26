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
        $ptype = null;
        return view('pages.admin.plottype.create', compact('page_heading', 'ptype'));
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

    public function edit($id)
    {
        $ptype = Plottype::find($id);
        $page_heading = "Update Plot Type";
        return view('pages.admin.plottype.edit', compact('ptype', 'page_heading'));
    }

    public function update(Request $req)
    {
        $site = Plottype::find($req->id)->update([
            'name' => $req->name,
            'user_id' => Auth::user()->id,
        ]);
        if ($site) {
            return redirect()->route('plottype.list')->with('success', 'plot type updated successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}

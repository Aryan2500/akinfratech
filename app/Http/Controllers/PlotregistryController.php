<?php

namespace App\Http\Controllers;

use App\Models\Plotregistry;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlotregistryController extends BaseController
{
    //

    function index()
    {
        $page_heading = "Registries";
        if ($this->isSiteHead) {
            $registries = Plotregistry::where('user_id', Auth::user()->id)->get();
        } else {
            $registries = Plotregistry::all();
        }
        $layoutfor = $this->layoutfor;
        return view('pages.admin.plot-registry.list', compact('page_heading', 'registries', 'layoutfor'));
    }
    function create()
    {
        $page_heading = 'Plot Registry';
        $registry = null;
        $layoutfor = $this->layoutfor;

        return view('pages.admin.plot-registry.create', compact('registry', 'page_heading', 'layoutfor'));
    }
    function store(Request $req)
    {
        $plotRegistry = Plotregistry::create(array_merge($req->all(), ['user_id' => Auth::user()->id]));
        if ($plotRegistry instanceof PlotRegistry) {
            return redirect()->route('plot-registry.list')->with('success', 'Registry created successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    function edit($id)
    {
        $page_heading = 'Plot Registry';
        $registry = Plotregistry::find($id);

        $layoutfor = $this->layoutfor;
        return view('pages.admin.plot-registry.edit', compact('registry', 'page_heading', 'layoutfor'));
    }

    function update(Request $req)
    {
        $plotRegistry = Plotregistry::find($req->id)->update($req->all());
        if ($plotRegistry) {
            return redirect()->route('plot-registry.list')->with('success', 'Registry updated successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Plotregistry;
use Illuminate\Http\Request;

class PlotregistryController extends Controller
{
    //

    function index()
    {
        $page_heading = "Registries";
        $registries = Plotregistry::all();
        return view('pages.admin.plot-registry.list', compact('page_heading', 'registries'));
    }
    function create()
    {
        $page_heading = 'Plot Registry';
        $registry = null;
        return view('pages.admin.plot-registry.create', compact('registry', 'page_heading'));
    }
    function store(Request $req)
    {
        $plotRegistry = Plotregistry::create($req->all());
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
        return view('pages.admin.plot-registry.edit', compact('registry', 'page_heading'));
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

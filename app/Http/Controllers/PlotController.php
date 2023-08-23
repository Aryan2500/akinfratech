<?php

namespace App\Http\Controllers;

use App\Helpers\BlockHelper;
use App\Helpers\PlotHelper;
use App\Helpers\SiteHelper;
use App\Models\Plot;
use App\Models\Plottype;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlotController extends BaseController
{
    //

    public function index()
    {
        $page_heading = 'Plots';

        if ($this->isSiteHead) {
            $plots  = Plot::where('user_id', Auth::user()->id)->get();
        } else {
            $plots  = Plot::all();
        }
        $layoutfor = $this->layoutfor;

        return view('pages.admin.plot.list', compact('page_heading', 'plots', 'layoutfor'));
    }
    public function create()
    {
        $page_heading = 'Create plot';
        $sites = SiteHelper::getAllSites();
        $blocks = BlockHelper::getAllBlocks();
        $plottypes = $this->isSiteHead ?  Plottype::where('user_id', Auth::user()->id) : Plottype::all();
        // dd($site_heads[0]->type);
        $plot = null;

        $layoutfor = $this->layoutfor;
        return view('pages.admin.plot.create', compact('page_heading', 'sites', 'blocks', 'plottypes', 'plot', 'layoutfor'));
    }
    public function store(Request $req)
    {
        // dd($req->all());
        $plot = Plot::create([
            'name' => $req->name,
            'address' => $req->address,
            'price' => $req->price,
            'size' => $req->size,
            'plottype_id' => $req->plottype_id,
            'user_id' => Auth::user()->id,
            'site_id' => $req->site_id,
            'block_id' => $req->block_id,
        ]);
        if ($plot instanceof Plot) {
            return redirect()->route('plot.list')->with('success', 'plot created successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function edit($id)
    {
        $plot = Plot::find($id);
        $blocks = BlockHelper::getAllBlocks();

        $page_heading = "Update Plot";

        $layoutfor = $this->layoutfor;
        return view('pages.admin.plot.edit', compact('plot', 'page_heading', 'blocks' ,'layoutfor'));
    }
    public function update(Request $req)
    {
        // dd($req->all());
        $plot = Plot::find($req->id)->update([
            'name' => $req->name,
            'address' => $req->address,
            'price' => $req->price,
            'size' => $req->size,
            'plottype_id' => $req->plottype_id,
            'user_id' => Auth::user()->id,
            'site_id' => $req->site_id,
            'block_id' => $req->block_id
        ]);
        if ($plot) {
            return redirect()->route('plot.list')->with('success', 'plot updated successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}

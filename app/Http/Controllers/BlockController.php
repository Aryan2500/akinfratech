<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlockController extends BaseController
{
    public function index()
    {
        $page_heading = 'Block';
        if ($this->isSiteHead) {
            $blocks  = Block::where('user_id', Auth::user()->id)->get();
        } else {
            $blocks  = Block::all();
        }
        $layoutfor = $this->layoutfor;
        return view('pages.admin.block.list', compact('page_heading', 'blocks', 'layoutfor'));
    }
    public function create()
    {
        $page_heading = 'Create block';
        if ($this->isSiteHead) {
            $sites  = Site::where('sitehead_id', Auth::user()->id)->get();
        } else {
            $sites  = Site::all();
        }

        $layoutfor = $this->layoutfor;
        return view('pages.admin.block.create', compact('page_heading', 'sites',  'layoutfor'));
    }
    public function store(Request $req)
    {
        // dd($req->all());
        $block = Block::create([
            'name' => $req->name,
            'area' => $req->area,
            'booked_area' => $req->booked_area,
            'remaining_area' => $req->area - $req->booked_area,
            'user_id' => Auth::user()->id,
            'site_id' => $req->site_id
        ]);

        if ($block instanceof Block) {
            return redirect()->route('block.list')->with('success', 'Block created successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function update(Request $req)
    {
        $b = Block::find($req->id);
        $b->update(array_merge($req->all(), ['user_id' => Auth::user()->id]));

        if ($b) {
            return redirect()->route('block.list')->with('success', 'Block updated successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
    public function edit($id)
    {
        $page_heading = 'Edit block';
        $block = Block::find($id);
        if ($this->isSiteHead) {
            $sites  = Site::where('sitehead_id', Auth::user()->id)->get();
        } else {
            $sites  = Site::all();
        }

        $layoutfor = $this->layoutfor;
        return view('pages.admin.block.edit', compact('page_heading', 'sites',  'block',   'layoutfor'));
    }
}

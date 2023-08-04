<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\Land;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandController extends BaseController
{
    //

    public function index()
    {
        $page_heading = 'Lands';
        if ($this->isSiteHead) {
            $lands = Land::where('user_id', Auth::user()->id)->get();
        } else {
            $lands  = Land::all();
        }

        $layoutfor = $this->layoutfor;
        return view('pages.admin.land.list', compact('page_heading', 'lands', 'layoutfor'));
    }
    public function create()
    {
        $page_heading = 'Create land';
        // dd($site_heads[0]->type);
        $land = null;
        $layoutfor = $this->layoutfor;
        return view('pages.admin.land.create', compact('page_heading', 'land', 'layoutfor'));
    }
    public function store(Request $req)
    {
        // dd($req->all());
        $land = Land::create([
            'khasra_numbers' => $req->khasra_number,
            'rakba' => $req->rakba,
            'area' => $req->area,
            'registry_status' => $req->registry_status,
            'payble_amount' => $req->payble_amount,
            'paid_amount' => $req->paid_amount,
            'balance_amount' => $req->balance_amount,
            'payment_mode' => $req->payment_mode,
            'payment_date' => $req->payment_date,
            'remark' => $req->remark,
            'user_id' => Auth::user()->id,
            'site_id' => $req->site_id,
            'farmer_id' => $req->farmer_id

        ]);

        if ($land instanceof Land) {
            return redirect()->route('land.list')->with('success', 'land created successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function edit($id)
    {
        $page_heading = 'Update land';

        $land = Land::find($id);
        $layoutfor = $this->layoutfor;
        return view('pages.admin.land.edit', compact('land', 'page_heading', 'layoutfor'));
    }

    public function update(Request $req)
    {
        $land = Land::find($req->id)->update([
            'khasra_numbers' => $req->khasra_number,
            'rakba' => $req->rakba,
            'area' => $req->area,
            'registry_status' => $req->registry_status,
            'payble_amount' => $req->payble_amount,
            'paid_amount' => $req->paid_amount,
            'balance_amount' => $req->balance_amount,
            'payment_mode' => $req->payment_mode,
            'payment_date' => $req->payment_date,
            'remark' => $req->remark,
            'user_id' => Auth::user()->id,
            'site_id' => $req->site_id,
            'farmer_id' => $req->farmer_id
        ]);

        if ($land) {
            return redirect()->route('land.list')->with('success', 'land updated successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}

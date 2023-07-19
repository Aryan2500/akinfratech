<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\Land;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandController extends Controller
{
    //

    public function index()
    {
        $page_heading = 'Lands';
        $lands  = Land::all();
        return view('pages.admin.land.list', compact('page_heading', 'lands'));
    }
    public function create()
    {
        $page_heading = 'Create land';
        $sites = Site::all();
        $farmers = Farmer::all();
        // dd($site_heads[0]->type);
        return view('pages.admin.land.create', compact('page_heading', 'sites', 'farmers'));
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
    public function update()
    {
    }
    public function edit()
    {
    }
}

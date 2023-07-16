<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\Site;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    //
    public function  index()
    {
        $page_heading  = 'Farmers';
        $farmers = Farmer::all();
        return view('pages.admin.farmer.list', compact('page_heading', 'farmers'));
    }
    public function  create()
    {
        $page_heading = 'Create a new Farmer';

        return view('pages.admin.farmer.create', compact('page_heading'));
    }
    public function store(Request $req)
    {
        // dd($req->all());
        try {
            $f = Farmer::create([
                'name' => $req->name,
                'state_id' => $req->state_id,
                'city_id' => $req->city_id,
                'country_id' => $req->country_id,
                'address' => $req->address,
                'phone' => $req->phone,
            ]);
            $f->sites()->attach($req->site_id);
            return redirect()->route('farmer.list')->with('success', 'Farmer created successfully');
        } catch (QueryException $th) {
            return redirect()->route('farmer.list')->with('error', 'something went wrong' . $th->getMessage());
        }
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function lock()
    {
    }
}

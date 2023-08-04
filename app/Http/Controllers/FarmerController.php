<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\Site;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class FarmerController extends BaseController
{
    //
    public function  index()
    {
        $page_heading  = 'Farmers';

        if ($this->isSiteHead) {
            $farmers = new Collection();
            foreach (Site::where('user_id', Auth::user()->id)->orWhere('sitehead_id', Auth::user()->id)->get() as $key => $site) {
                if (count($site->farmers) > 0) {
                    foreach ($site->farmers as $key => $farmer) {
                        $farmers->push($farmer);
                    }
                }
            }
            // dd($farmers);
        } else {
            $farmers = Farmer::all();
        }
        $layoutfor = $this->layoutfor;
        return view('pages.admin.farmer.list', compact('page_heading', 'farmers', 'layoutfor'));
    }

    public function  create()
    {
        $page_heading = 'Create a new Farmer';
        $farmer = null;

        $layoutfor = $this->layoutfor;
        return view('pages.admin.farmer.create', compact('page_heading', 'farmer', 'layoutfor'));
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
    public function edit($id)
    {
        $page_heading = 'Update Farmer';

        $farmer = Farmer::find($id);

        $layoutfor = $this->layoutfor;
        return view('pages.admin.farmer.edit', compact('farmer', 'page_heading', 'layoutfor'));
    }
    public function update(Request $req)
    {
        // dd($req->all());
        $farmer = Farmer::find($req->id);
        $farmer->sites()->detach($farmer->sites);

        try {
            $farmer->update([
                'name' => $req->name,
                'state_id' => $req->state_id,
                'city_id' => $req->city_id,
                'country_id' => $req->country_id,
                'address' => $req->address,
                'phone' => $req->phone,
            ]);
            $farmer->sites()->attach($req->site_id);
            return redirect()->route('farmer.list')->with('success', 'Farmer updated successfully');
        } catch (QueryException $th) {
            return redirect()->route('farmer.list')->with('error', 'something went wrong' . $th->getMessage());
        }
    }
    public function lock()
    {
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\Plot;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    function index()
    {
        $page_heading = 'Dashboard';
        $plots = Plot::all()->count();
        $sites = Site::all()->count();
        $users = User::all()->count();
        $farmers = Farmer::all()->count();
        return view('pages.admin.dashboard', compact('page_heading', 'users', 'sites', 'plots', 'farmers'));
    }

    function siteHeadDashboard()
    {
        $page_heading = 'Dashboard';
        // $plots = Plot::all()->count();
        // dd(Auth::user()->id);
        $sites = Site::where('sitehead_id', Auth::user()->id)->get();
        $sites = Site::with('plots')->withCount('plots')->where('sitehead_id', Auth::user()->id)->get();
        $plots = $sites->sum('plots_count');
        // $plots =  $sites->mapWithKeys(function ($site) {
        //     $totalPlots = $totalPlots + $site->plots_count;
        //     return [$site->id => $site->plots_count];
        // });
        // dd($plots);
        $users = User::all()->count();
        $farmers = Farmer::all()->count();
        return view('pages.site_head.dashboard', compact('page_heading', 'users', 'sites', 'plots', 'farmers'));
    }
}

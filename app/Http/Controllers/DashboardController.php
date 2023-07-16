<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\Plot;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index()
    {
        $page_heading = 'Dashboard';
        return view('pages.admin.dashboard' , compact('page_heading'));
    }
}

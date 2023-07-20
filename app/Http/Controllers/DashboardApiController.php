<?php

namespace App\Http\Controllers;

use App\Helpers\FarmerHelper;
use App\Helpers\PlotHelper;
use App\Models\Farmer;
use Illuminate\Http\Request;

class DashboardApiController extends Controller
{
    //

    function dashboardInfo(Request $req)
    {
        $plots = PlotHelper::getPlotsOfSite($req->site_id);
        $farmers = FarmerHelper::getFarmersOfSite($req->site_id);
        return response()->json(['plots' => $plots, 'farmers' => $farmers]);
    }
}

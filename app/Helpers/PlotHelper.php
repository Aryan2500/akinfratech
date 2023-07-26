<?php

namespace App\Helpers;

use App\Models\Plot;
use App\Models\Plottype;
use App\Models\Site;

class PlotHelper
{

    public static function getAllPlots()
    {
        return Plot::all();
    }

    public static function getPlotsOfSite($site)
    {
        return Plot::where(['site_id' => $site])->count();
    }

    public static function getAllPlotTypes()
    {
        return Plottype::all();
    }
}

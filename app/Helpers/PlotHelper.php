<?php

namespace App\Helpers;

use App\Models\Plot;
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
}

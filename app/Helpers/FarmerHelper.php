<?php

namespace App\Helpers;

use App\Models\Farmer;
use App\Models\Site;

class FarmerHelper
{

    public static function getAllFarmers()
    {
        return Farmer::all();
    }

    public static function getFarmersOfSite($site)
    {
        $site = Site::find($site);
        // dd($site);
        return count($site->farmers);
        // return $site->farmers;
    }
}

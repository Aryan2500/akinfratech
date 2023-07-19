<?php

namespace App\Helpers;

use App\Models\Farmer;

class FarmerHelper
{

    public static function getAllFarmers()
    {
        return Farmer::all();
    }
}

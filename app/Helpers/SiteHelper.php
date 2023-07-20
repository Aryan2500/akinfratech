<?php

namespace App\Helpers;

use App\Models\Site;

class SiteHelper
{

    public static function getAllSites()
    {
        return Site::all();
    }

    // public getAllS
}

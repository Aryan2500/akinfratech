<?php

namespace App\Helpers;

use App\Models\Site;

class SiteHelper
{

    public static function getSites()
    {
        return Site::all();
    }
}

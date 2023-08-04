<?php

namespace App\Helpers;

use App\Models\Site;
use Illuminate\Support\Facades\Auth;

class SiteHelper
{

    public static function getAllSites()
    {
        if (UserHelper::checkIfSiteHead()) {
            $sites =   Site::where('sitehead_id', Auth::user()->id)->orWhere('user_id', Auth::user()->id)->get();
        } else {
            $sites =  Site::all();
        }

        return $sites;
    }

    // public getAllS
}

<?php

namespace App\Helpers;

use App\Models\Block;
use App\Models\Site;
use Illuminate\Support\Facades\Auth;

class BlockHelper
{

    public static function getAllBlocks()
    {
        if (UserHelper::checkIfSiteHead()) {
            $blocks =   Block::where('user_id', Auth::user()->id)->get();
        } else {
            $blocks =  Block::all();
        }

        return $blocks;
    }
}

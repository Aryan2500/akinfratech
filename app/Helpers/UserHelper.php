<?php

namespace App\Helpers;

use App\Models\Usertype;

class UserHelper
{
    public static function getType()
    {
        return Usertype::all();
    }
}

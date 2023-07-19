<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Usertype;

class UserHelper
{
    public static function getType()
    {
        return Usertype::all();
    }

    public static function getAllUsers()
    {
        return User::all();
    }
}

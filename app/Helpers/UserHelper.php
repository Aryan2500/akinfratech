<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Usertype;
use Illuminate\Support\Facades\Auth;

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

    public static function checkReferCodeExist($code)
    {
        $u = User::where('refer_code', $code)->first();
        if ($u) {
            return true;
        } else {
            return false;
        }
    }

    public static function checkIfSiteHead()
    {
        return Auth::user()->type->name == SITE_HEAD;
    }


    public static function createDownlineHtml($tree)
    {

        $outPut = '<ul id="org" style="display:none">';
        // dd($tree);
        for ($i = 0; $i < $tree->count(); $i++) {
            $outPut .= "<li>" . $tree[$i]->name;
            $outPut .=   self::createDownlineHtml($tree[$i]->children);
            $outPut .= "</li>";
        }
        $outPut .= '</ul>';

        return $outPut;
    }
}

<?php

namespace App\Helpers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class PermissionHelper
{

    public static function hasPermission()
    {
        // dd(Auth::user()->role->permissions);
        foreach (Auth::user()->role->permissions as $key => $p) {

            if (Route::currentRouteName() == $p->url) {
                return true;
            }
        }
        return false;
    }
    public static function hasSpecifiPermission($routeName)
    {
        // dd($routeName);
        // dd(Auth::user()->role->permissions()->where('route_name' , $routeName)->get());
        foreach (Auth::user()->role->permissions as $key => $p) {

            if ($routeName == $p->url) {
                return true;
            }
        }
        return false;
    }

    public static function hasGroupPermission($groupId)
    {
        foreach (Auth::user()->role->permissions as $key => $p) {

            if ($groupId == $p->permissioncategory_id) {
                return true;
            }
        }
        return false;
    }
}

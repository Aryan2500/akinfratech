<?php

namespace App\Http\Controllers;

use App\Helpers\UserHelper;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public $layoutfor;
    public  $isSiteHead;
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (UserHelper::checkIfSiteHead()) {
                $this->isSiteHead = true;
                $this->layoutfor = 'site-head-base';
            } else {
                $this->layoutfor = 'base';
            }
            return $next($request);
        });
    }
}

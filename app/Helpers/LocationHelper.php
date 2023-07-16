<?php

namespace App\Helpers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;

class LocationHelper
{

    public static function getCountries()
    {
        $countries = Country::all();
        return $countries;
    }

    public static function getStates($countryId)
    {
        $states = State::where('country_id', $countryId)->get();
        return $states;
    }

    public static function getCities($stateId)
    {
        $cities = City::where('state_id', $stateId)->get();
        return $cities;
    }
}

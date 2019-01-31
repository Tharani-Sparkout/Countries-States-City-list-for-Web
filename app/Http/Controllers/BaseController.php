<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Country;
use App\Model\State;
use App\Model\City;
use DB;

class BaseController extends Controller
{
    //
     public function __construct(Country $country,State $state,City $city,DB $db,Request $request){

        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->db = $db;
     }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\State;
use App\Lga;

class StateController extends Controller
{
    public function states(Request $request) {
        
        return State::where('id_country', 1)->orderBy('name', 'ASC')->get(['id', 'name']);
        
    }

    
    public function lgas(State $state) {
           
        return $state->lgas()->orderBy('name', 'ASC')->get(['id', 'name']);
       
    }


}

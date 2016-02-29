<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\State;

class StateController extends Controller
{
    public function index(){
    	return State::all();
    }

    public function show(State $state){
    	return $state;
    }
}

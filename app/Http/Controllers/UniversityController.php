<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\State;
use App\University;
class UniversityController extends Controller
{
    public function index(State $state){
    	return $state->universities;
    }

    public function show(State $state,$university){
    	return $state->universities->find($university);
    }
}

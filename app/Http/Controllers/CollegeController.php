<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\State;
use App\University;
use App\College;

class CollegeController extends Controller
{
    public function index(State $state,University $university){
		return $state->universities->find($university)->colleges;
    }

    public function show(State $state,University $university,College $college){
    	return $state->universities->find($university)->colleges->find($college);
    }
}

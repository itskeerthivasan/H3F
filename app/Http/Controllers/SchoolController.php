<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\State;
use App\University;
use App\School;


class SchoolController extends Controller
{
    public function index(State $state,University $university){
		return $state->universities->find($university)->schools;
    }

    public function show(State $state,University $university,School $school){
    	return $state->universities->find($university)->schools->find($school);
    }
}

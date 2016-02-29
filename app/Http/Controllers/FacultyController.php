<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\State;
use App\University;
use App\College;
use App\School;
use App\Department;
use App\Faculty;

class FacultyController extends Controller
{
     public function index(State $state,University $university,$college,Department $department, Request $Request){

    	if($Request->segment(5) === 'college'){
			$faculties = $state->universities->find($university)->colleges->find($college)->departments->find($department)->faculties;
		}elseif($Request->segment(5) === 'school'){
			$faculties = $state->universities->find($university)->schools->find($college)->departments->find($department)->faculties;
		}

		return $faculties;

    }

    public function show(State $state,University $university,$college,Department $department,Faculty $faculty, Request $Request){

    	if($Request->segment(5) === 'college'){
			$faculties = $state->universities->find($university)->colleges->find($college)->departments->find($department)->faculties->find($faculty);
		}elseif($Request->segment(5) === 'school'){
			$faculties = $state->universities->find($university)->schools->find($college)->departments->find($department)->faculties->find($faculty);
		}

		return $faculties;

    }
}

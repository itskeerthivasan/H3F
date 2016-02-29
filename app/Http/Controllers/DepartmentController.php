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
class DepartmentController extends Controller
{
    public function index(State $state,University $university,$college, Request $Request){
		if($Request->segment(5) === 'college'){
			$departments = $state->universities->find($university)->colleges->find($college)->departments;
		}elseif($Request->segment(5) === 'school'){
			$departments = $state->universities->find($university)->schools->find($college)->departments;
		}
		
    	return $departments;
	
    }

    public function show(State $state,University $university,$college,Department $department, Request $Request){

    	if($Request->segment(5) === 'college'){
			$department = $state->universities->find($university)->colleges->find($college)->departments->find($department);
		}elseif($Request->segment(5) === 'school'){
			$department = $state->universities->find($university)->schools->find($college)->departments->find($department);
		}

		return $department;

    }
}

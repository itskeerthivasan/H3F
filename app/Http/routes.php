<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['api']], function () {
Route::get('/', function () {
    $states =  App\State::all();

   

		foreach ($states as $state) {
			 foreach ($state->Universities as $University) {

			 	foreach ($University->schools as $school) {
					foreach ($school->departments as $department) {
				 		foreach ($department->faculties as $faculty) {
				 			$faculty->papers;
				 		}				
			 		}
			 	}

			 	foreach ($University->colleges as $college) {
			 		foreach ($college->departments as $department) {
				 		foreach ($department->faculties as $faculty) {
				 			$faculty->papers;
				 		}
			 		}
			 	}

			 	
			 }
		}
    
	return $states;
    
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


    //
});

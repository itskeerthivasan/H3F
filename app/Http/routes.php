<?php

Route::group(['middleware' => ['api']], function () {

/**
     * University API Resource
     */
	Route::resource('/state', 'StateController',['only' => ['index', 'show']]);
	Route::resource('/state.university', 'UniversityController',['only' => ['index', 'show']]);

	Route::resource('/state.university.college', 'CollegeController',['only' => ['index', 'show']]);
	Route::resource('/state.university.college.department', 'DepartmentController',['only' => ['index', 'show']]);
	Route::resource('/state.university.college.department.faculty', 'FacultyController',['only' => ['index', 'show']]);


	Route::resource('/state.university.school', 'SchoolController',['only' => ['index', 'show']]);
	Route::resource('/state.university.school.department', 'DepartmentController',['only' => ['index', 'show']]);
	Route::resource('/state.university.school.department.faculty', 'FacultyController',['only' => ['index', 'show']]);




});

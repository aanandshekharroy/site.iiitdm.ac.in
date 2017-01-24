<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('tender', function(){
	return view('tender');
});
Route::get('jobs', function(){
	return view('jobs');
});
Route::get('administration/administrative_structure',function(){
	return view('administrative_structure');
});
Route::get('administration/bog',function(){
	return view('bog');
});
Route::get('administration/senate',function(){
	return view('senate');
});
Route::get('administration/finance-committee',function(){
	return view('finance_committee');
});
Route::get('administration/bwc',function(){
	return view('bwc');
});
Route::get('calender',function(){
	return view('calender');
});
Route::get('programme',function(){
	return view('programme');
});
Route::get('admission',function(){
	return view('admission');
});
Route::get('college-tour',function(){
	return view('college_tour');
});
Route::get('jagriti-tour',function(){
	return view('jagriti_tour');
});
Route::get('achievements',function(){
	return view('achievements');
});
Route::get('activities',function(){
	return view('activities');
});
Route::get('gallery',function(){
	return view('gallery');
});
Route::get('collaborators',function(){
	return view('collaborators');
});
Route::get('webteam',function(){
	return view('webteam');
});
Route::get('calender',function(){
	return view('calender');
});
Route::get('maps-direction',function(){
	return view('maps_direction');
});
Route::get('hindi',function(){
	return view('hindi');
});
Route::get('contact',function(){
	return view('contact');
});
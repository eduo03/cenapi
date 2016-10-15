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
    return view('welcome');
});

Route::group(array('prefix'=>'api'), function()
{
	Route::get('address/{user_id}/{province}/{municipality}/{barangay}/{building}/{fname}/{lname}/{contact}','CensusController@address');

	Route::get('member/{address_id}/{fname}/{mname}/{lname}/{exname}/{relation_head}/{gender}/{birthday}/{birth_certificate}/{marital}/{religion}/{school_attendance}/{literacy}/{highest_grade}/{employed}/{occupation}','CensusController@member');

	Route::get('housing/{address_id}/{building}/{roof}/{wall}/{light}/{drink}/{cooking}/{tenure}','CensusController@housing');

	Route::get('death/{address_id}/{fname}/{lname}/{gender}/{age_at_death}/{registry_office}/{death_certificate}','CensusController@death');

	Route::get('login/{user}/{password}','CensusController@login1');
	Route::get('addressid','CensusController@addressid');
	

});
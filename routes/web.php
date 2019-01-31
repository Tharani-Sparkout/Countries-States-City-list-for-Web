<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('countries_list');
});

Route::GET('/get_backup','AppendController@Get_Backup');

Route::GET('/get_country_ajax','AppendController@Get_Country');

Route::GET('/get_state_ajax/{id}','AppendController@Get_State');

Route::GET('/get_city_ajax/{id}','AppendController@Get_City');
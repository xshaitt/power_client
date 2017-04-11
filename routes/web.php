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

Route::get('/', function () {
    return view('index');
});

Route::get('/curl', function () {
    var_dump(getApiData('http://ps.dev/curl', env('API_TOKEN')));
});

Route::get('/enterlist', 'EnterpriseController@enterpriseList');
Route::get('/createenter', 'EnterpriseController@showCreateEnterForm');
Route::post('/createenter', 'EnterpriseController@createEnter');

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
//企业相关
Route::get('/enterlist/{limit?}', 'EnterpriseController@enterpriseList');
Route::get('/createenter', 'EnterpriseController@showCreateEnterForm');
Route::post('/createenter', 'EnterpriseController@createEnter');
Route::get('/delenter/{id}', 'EnterpriseController@delenter');
Route::post('/editenter/{id}', 'EnterpriseController@editenter');


//用户相关
Route::get('/createuser', 'UserController@showCreateUserForm');
Route::post('/createuser', 'UserController@createUser');
Route::get('/userlist/{limit?}', 'UserController@userList');
Route::get('/deluser/{id}', 'UserController@deluser');
Route::post('/edituser/{id}', 'UserController@editUser');
Route::get('/activeuser/{id}', 'UserController@activeUser');

Route::get('/login','UserController@showLoginForm');
Route::post('/login','UserController@login');
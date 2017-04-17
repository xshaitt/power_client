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

Route::get('/enterlist/{limit?}', 'EnterpriseController@enterpriseList');
Route::get('/createenter', 'EnterpriseController@showCreateEnterForm');
Route::post('/createenter', 'EnterpriseController@createEnter');
Route::get('/delenter/{id}', 'EnterpriseController@delenter');
Route::post('/editenter/{id}', 'EnterpriseController@editenter');

Route::get('/systemid','SystemController@showSystemIp');//系统Ip展示
Route::get('/showmessage','SystemController@showMessage');//短信列表展示
Route::get('/delmessage','SystemController@delMessage');//删除短信
Route::get('/editminpower','SystemController@editMinPower');//修改告警电量
Route::get('/editups','SystemController@editUps');//修改ups是否发送短信状态

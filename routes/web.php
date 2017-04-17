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

Route::group(['middleware' => 'login'], function () {
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

    Route::get('/changepwd', 'UserController@showChangepwdForm');
    Route::post('/changepwd', 'UserController@changepwd');

    Route::get('/logout', 'UserController@logout');

    //电源管家相关
    Route::get('/allotpower/{limit?}', 'PowerController@showAllotPowerForm');
    Route::post('/allotpower', 'PowerController@allotpower');
    Route::get('/createpower', 'PowerController@showCreatePowerForm');
    Route::post('/createpower', 'PowerController@createPower');
    Route::get('/powerlist/{limit?}', 'PowerController@powerList');
    Route::post('/editpower/{id}', 'PowerController@editpower');
});

Route::group(['middleware' => 'no.login'], function () {
    Route::get('/login', 'UserController@showLoginForm');
    Route::post('/login', 'UserController@login');
});



/**
 * UserController
 * 用户管理
 */
//用户列表页
Route::get('userview','RbacController@showuser');
//修改用户页
Route::get('usereditview/{id}','RbacController@edituser');
//执行修改用户
Route::post('useredit','RbacController@updateuser');

/**
 * RoleController
 * 角色管理
 */
//角色列表页
Route::get('roleview','RbacController@showrole');
//添加角色页
Route::get('roleaddview','RbacController@addrole');
Route::get('roledel/{id}','RbacController@delrole');
//修改角色页
Route::get('roleeditview/{id}','RbacController@editrole');
//添加角色页
Route::post('roleadd','RbacController@createrole');
//执行修改角色
Route::post('roleedit','RbacController@updaterole');

/**
 * PermissionsController
 * 权限节点管理
 */
//权限列表页
Route::get('perview','RbacController@showpermissions');
//添加权限页
Route::get('peraddview','RbacController@addpermissions');
Route::get('perdel/{id}','RbacController@delpermissions');
//修改权限页
Route::get('pereditview/{id}','RbacController@editpermissions');
//执行添加
Route::post('peradd','RbacController@createpermissions');
//执行修改
Route::post('peredit','RbacController@updatepermissions');


/**
 * BindController
 * 绑定角色 及 权限
 */
//角色绑定权限页
Route::post('bindpermissions','RbacController@bindpermissions');
//用户绑定角色页
Route::post('bindrole','RbacController@bindrole');
Route::get('unbindrole/{userid}/{roleid}','RbacController@unbindrole');
Route::get('unbindpermissions/{roleid}/{perid}','RbacController@unbindpermissions');
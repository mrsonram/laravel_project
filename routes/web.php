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
    return view('welcome');
});

Route::get('/employee', 'EmployeeController@index');

Route::get('/employee/create', 'EmployeeController@create');

Route::post('/employee', 'EmployeeController@store');

Route::get('/employee/{id}', 'EmployeeController@show');

Route::get('/employee/{id}/edit', 'EmployeeController@edit');

Route::put('/employee/{id}', 'EmployeeController@update');

Route::delete('/employee/{id}', 'EmployeeController@destroy');

Route::get('/student', 'StudentController@index');

Route::get('student/create', 'StudentController@create');

Route::post('/student', 'StudentController@store');

Route::get('/student/{id}', 'StudentController@show');

Route::get('/student/{id}/edit', 'StudentController@edit');

Route::put('/student/{id}', 'StudentController@update');

//Test Mid Term//

Route::get('/product', 'ProductController@index');

Route::get('/product/create', 'ProductController@create');

Route::post('/product', 'ProductController@store');

Route::get('/product/{id}', 'ProductController@show');

Route::get('/product/{id}/edit', 'ProductController@edit');

Route::put('/product/{id}', 'ProductController@update');

Route::delete('/product/{id}', 'ProductController@destroy');
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

/*
|--------------------------------------------------------------------------
| Using Routing Basics
|--------------------------------------------------------------------------
*/

Route::get('/home', function() {
    return '<h1>This is home page</h1>';
});

Route::get('/blog/{page_id}', function($page_id) {
    return "<h1>This is blog page : $page_id </h1>";
});

Route::get('/blog/{page_id}/edit', function($page_id) {
    return "<h1>This is blog page : $page_id for edit</h1>" ;
});

Route::get('/product/{a}/{b}/{c}', function($a, $b, $c) {
    return "<h1>This is product page </h1><div>$a , $b, $c</div>" ;
});

Route::get('/category/{a?}', function($a = "mobile") {
    return "<h1>This is category page : $a </h1>" ;
});

/*
|--------------------------------------------------------------------------
| Using View Basics
|--------------------------------------------------------------------------
*/

Route::get('/hello', function () {	
    return view('hello');
});

Route::get('/greeting', function () {
	$data = [
'name'      => 'James' ,
'last_name' => 'Mars'
];
return view('greeting', $data);
});

Route::get('/combine/{id}', function ($id) {
	$data = [
'id' => $id
];
return view('combine', $data);
});

/*
|--------------------------------------------------------------------------
| Using Controller Basics
|--------------------------------------------------------------------------
*/

Route::get('/profile/create', 'ProfileController@create');

Route::get('/profile/{id}', 'ProfileController@show');

/*
|--------------------------------------------------------------------------
| Using Model Basics
|--------------------------------------------------------------------------
*/

Route::get('/profile', 'ProfileController@index');

/*
|--------------------------------------------------------------------------
| Laravel CRUD : Read from database
|--------------------------------------------------------------------------
*/

Route::get('/employee', 'EmployeeController@index');

Route::get('/employee/create', 'EmployeeController@create');

Route::post('/employee', 'EmployeeController@store');

Route::get('/employee/{id}', 'EmployeeController@show');

Route::get('/employee/{id}/edit', 'EmployeeController@edit');

Route::put('/employee/{id}', 'EmployeeController@update');

Route::delete('/employee/{id}', 'EmployeeController@destroy');

/*
|--------------------------------------------------------------------------
| Case Study : Student
|--------------------------------------------------------------------------
*/

Route::get('/student', 'StudentController@index');

Route::get('student/create', 'StudentController@create');

Route::post('/student', 'StudentController@store');

Route::get('/student/{id}', 'StudentController@show');

Route::get('/student/{id}/edit', 'StudentController@edit');

Route::put('/student/{id}', 'StudentController@update');

/*
|--------------------------------------------------------------------------
| Midterm Exam : Product Table
|--------------------------------------------------------------------------
*/

Route::get('/product', 'ProductController@index');

Route::get('/product/create', 'ProductController@create');

Route::post('/product', 'ProductController@store');

Route::get('/product/{id}', 'ProductController@show');

Route::get('/product/{id}/edit', 'ProductController@edit');

Route::put('/product/{id}', 'ProductController@update');

Route::delete('/product/{id}', 'ProductController@destroy');

/*
|--------------------------------------------------------------------------
| Template Engine : Blade
|--------------------------------------------------------------------------
*/

Route::get('/bootstrap', function () {
    return view('bootstrap/index');
});    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

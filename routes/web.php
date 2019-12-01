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
    return view('claint.welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


Route::get('use', function () {
    return view('use');
});


Route::get('sucess', function () {
    return view('sucess');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('addimage', 'ImageController@add');
Route::post('store', 'ImageController@store');


//Admin Route
  Route::group(['prefix' => 'admin'],function(){
  Route::get('/home', 'Backend\PagesController@index')->name('admin.index');
  // Admin Login Routes
  Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
  Route::post('/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');
});

  //test
  Route::get('sucess', function () {
    return view('sucess');
});
  Route::get('category', function () {
    return view('category');
});

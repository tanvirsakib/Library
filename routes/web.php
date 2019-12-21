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

    //Catagory Route
    Route::group(['prefix' => '/catagories'], function(){
    Route::get('/create','Backend\CatagoriesController@create')->name('admin.catagory.create');
    Route::get('/edit/{id}','Backend\CatagoriesController@edit')->name('admin.catagory.edit');
    Route::get('/','Backend\CatagoriesController@index')->name('admin.catagories');
    Route::post('/store','Backend\CatagoriesController@store')->name('admin.catagory.store');
    Route::post('/catagory/edit/{id}','Backend\CatagoriesController@update')->name('admin.catagory.update');
    Route::post('/catagory/delete/{id}','Backend\CatagoriesController@delete')->name('admin.catagory.delete');

    //Issue Book Route
    Route::group(['prefix' => '/issuedbooks'],function(){
        Route::get('/create', 'IssuedbookController@create')->name('admin.issuedbook.create');
        Route::get('/', 'IssuedbookController@index')->name('admin.issuedbooks');
        Route::post('/store', 'IssuedbookController@store')->name('admin.issuedbook.store');
        Route::get('/update/{id}', 'IssuedbookController@update')->name('admin.issuedbook.update');
        Route::get('/notreturn/{id}', 'IssuedbookController@notreturn')->name('admin.issuedbook.notreturn');
    });
    Route::get('/userlist', function () {
        return view('backend.pages.userlist');
    });
});
  // books Route
  Route::group(['prefix' => '/books'], function(){
  Route::get('/create','BookController@create')->name('admin.book.create');
  Route::get('/edit/{id}','BookController@edit')->name('admin.book.edit');
  Route::get('/','BookController@index')->name('admin.books');
  Route::post('/store','BookController@store')->name('admin.book.store');
  Route::post('/book/edit/{id}','BookController@update')->name('admin.book.update');
  Route::post('/book/delete/{id}','BookController@delete')->name('admin.book.delete');

});

  Route::get('issueBook','BookIssueController@index')->name('admin.issueBook');

});

//Frontend
Route::get('catagory/{id}','Frontend\BooksController@show')->name('catagories.show');


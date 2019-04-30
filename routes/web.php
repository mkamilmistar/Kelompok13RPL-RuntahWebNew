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

//route untuk sites
Route::get('/', 'SiteController@home');
Route::get('/register', 'SiteController@register');
Route::post('/postregister', 'SiteController@postregister');
Route::get('/about', 'SiteController@about');
Route::get('/diy', 'PostController@diy');
Route::get('/diy/create', 'PostController@create')->name('post.create');
Route::post('/diy/create', 'PostController@publish')->name('post.publish');

Route::get('/profile', 'UserController@profile');
Route::get('/profile/{id}/edit', 'UserController@edit');
Route::post('/profile/edit/save', 'UserController@save');


//route untuk admin
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/login', 'AuthController@login')->name('login');


Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('admins', 'AdminController@index');
    Route::post('/admins/create', 'AdminController@create');
    Route::get('/admins/{volunteer}/edit', 'AdminController@edit');
    Route::post('/admins/{volunteer}/update', 'AdminController@update');
    Route::get('/admins/{volunteer}/delete', 'AdminController@delete');
    Route::get('/admins/dashboard', 'AdminController@dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

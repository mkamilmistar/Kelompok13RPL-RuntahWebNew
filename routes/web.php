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

Route::get('/profile', 'UserController@profile')->name('profile.awal');


//route untuk admin
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/login', 'AuthController@login')->name('login');


Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/volunteer', 'VolunteerController@index');
    Route::post('/volunteer/create', 'VolunteerController@create');
    Route::get('/volunteer/{volunteer}/edit', 'VolunteerController@edit');
    Route::post('/volunteer/{volunteer}/update', 'VolunteerController@update');
    Route::get('/volunteer/{volunteer}/delete', 'VolunteerController@delete');
    Route::get('/dashboard', 'VolunteerController@dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/information', 'SiteController@information');


//route DIY
Route::get('/diy', 'PostController@diy');

//route PROFILE USER
Route::get('/profile', 'UserController@profile');
Route::get('/profile/{id}/edit', 'UserController@edit');
Route::post('/profile/edit/save', 'UserController@save');

Route::get('/profile/changepassword', 'UserController@changepassword')->name('changepassword');
Route::post('/profile/savepassword', 'UserController@savepassword')->name('savepassword');

//route auth
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/login', 'AuthController@login')->name('login');

//route report
Route::get('/report','SiteController@report');
Route::post('/postreport','SiteController@postreport')->name('postreport');
//route untuk admin
Route::get('admins/login', 'AdminController@adminlogin');
Route::post('admins/postlogin', 'AdminController@adminpostlogin');
Route::get('admins/logout', 'AdminController@adminlogout');
Route::get('admins', 'AdminController@admins');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admins/index', 'AdminController@index');
    Route::post('/admins/create', 'AdminController@create');
    Route::get('/admins/{id}/edit', 'AdminController@edit');
    Route::post('/admins/{id}/update', 'AdminController@update');
    Route::get('/admins/{id}/delete', 'AdminController@delete');
    Route::get('/admins/dashboard', 'AdminController@dashboard');

    //untuk post diy
    Route::get('/admins/diypost', 'AdminController@diypost');
    Route::get('/admins/diypost/create', 'AdminController@createpost')->name('post.create');
    Route::post('/admins/diypost/create', 'AdminController@publishpost')->name('post.publish');
    Route::get('/admins/diypost/{id}/edit', 'AdminController@editpost')->name('post.edit');
    Route::post('/admins/diypost/{id}/update', 'AdminController@updatepost')->name('post.update');
    Route::get('/admins/diypost/{id}/delete', 'AdminController@deletepost')->name('post.delete');

    //untuk information
    Route::get('/admins/information', 'AdminController@information');
    Route::post('/admins/information/create', 'AdminController@publishinfo')->name('info.publish');

    //untuk repot
    Route::get('/admins/report', 'AdminController@report');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

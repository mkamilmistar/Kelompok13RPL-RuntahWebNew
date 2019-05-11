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
Route::get('/diy', 'DIYController@diy');

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
Route::get('/report', 'ReportController@report');
Route::post('/postreport', 'ReportController@postreport')->name('postreport');

//route untuk admin
Route::get('admins/login', 'AdminController@adminlogin');
Route::post('admins/postlogin', 'AdminController@adminpostlogin');
Route::get('admins/logout', 'AdminController@adminlogout');
Route::get('admins', 'AdminController@admins');

//Route untuk volunteer
Route::get('/volunteer', 'VolunteerController@volunteer');
Route::get('/volunteer/{id}/join', 'VolunteerController@join')->name('join');
Route::get('/volunteer/{id}/joined', 'VolunteerController@joined')->name('joined');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admins/index', 'AdminController@index');
    Route::post('/admins/create', 'AdminController@create');
    Route::get('/admins/{id}/edit', 'AdminController@edit');
    Route::post('/admins/{id}/update', 'AdminController@update');
    Route::get('/admins/{id}/delete', 'AdminController@delete');
    Route::get('/admins/dashboard', 'AdminController@dashboard');

    //untuk post diy
    Route::get('/admins/diypost', 'DIYController@diypost');
    Route::get('/admins/diypost/create', 'DIYController@createpost')->name('post.create');
    Route::post('/admins/diypost/create', 'DIYController@publishpost')->name('post.publish');
    Route::get('/admins/diypost/{id}/edit', 'DIYController@editpost')->name('post.edit');
    Route::post('/admins/diypost/{id}/update', 'DIYController@updatepost')->name('post.update');
    Route::get('/admins/diypost/{id}/delete', 'DIYController@deletepost')->name('post.delete');

    //untuk information
    Route::get('/admins/information', 'InformationController@information');
    Route::post('/admins/information/create', 'InformationController@publishinfo')->name('info.publish');
    Route::get('/admins/information/{id}/edit', 'InformationController@editinfo')->name('info.edit');
    Route::post('/admins/information/{id}/update', 'InformationController@updateinfo')->name('info.update');
    Route::get('/admins/information/{id}/delete', 'InformationController@deleteinfo')->name('info.delete');

    //untuk repot
    Route::get('/admins/report', 'ReportController@viewreport');
    Route::get('/admins/report/{id}/delete', 'ReportController@deletereport')->name('report.delete');

    //untuk event admin
    Route::get('/admins/event', 'VolunteerController@viewevent');
    Route::post('/admins/event/create', 'VolunteerController@publishevent')->name('event.publish');
    Route::get('/admins/event/{id}/edit', 'VolunteerController@editevent')->name('event.edit');
    Route::post('/admins/event/{id}/update', 'VolunteerController@updateevent')->name('event.update');
    Route::get('/admins/event/{id}/delete', 'VolunteerController@deleteevent')->name('event.delete');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

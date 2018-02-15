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

Route::get('/', 'Pages@main');//main page
Route::get('/home', 'Pages@main');
Route::get('/form/setting','FormSettingsController@index');
Route::get('/form/{name?}', 'Pages@getForms');//get desired form
Route::get('/course/get/{id?}', 'CoursesController@getCourse');//get desired course details
Route::post('/workshop/submit', 'WrkshopController@submit');//submit worshop form
Route::post('/contact/submit', 'Contacts@submit');
Route::post('/college/workshop/submit', 'WrkshopController@submitCollegeWorkshop');
Route::post('/corporate/workshop/submit', 'WrkshopController@submitCorporateTraining');
Route::post('/industrial/training/submit', 'WrkshopController@submitIndustrialTraining');
Route::post('/classroom/training/submit', 'WrkshopController@submit');

Auth::routes();

Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create')->middleware('auth');
Route::post('/albums/store', 'AlbumsController@store')->middleware('auth');
Route::get('/albums/show', 'AlbumsController@adminIndex')->middleware('auth');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::get('/photos/create/{id}', 'PhotosController@create')->middleware('auth');
Route::post('/photos/store', 'PhotosController@store')->middleware('auth');
Route::get('/photos/{id}', 'PhotosController@show');
Route::get('/dashboard', 'Dashboards@index')->middleware('auth');
Route::get('/enquiries/view/individual','EnquiresController@individualView');
Route::get('/enquiries/view/individual/{id}','EnquiresController@individualView');
Route::delete('/enquiries/individual/{id}','EnquiresController@destroy');
Route::get('/form/setting/{id}','FormSettingsController@show');
Route::post('/form/setting/{id}/store','FormSettingsController@store');
Route::get('/courses/list','CoursesController@courseList');
Route::post('/courses/list/{id}/store','CoursesController@store');
Route::get('/courses/list/{id}','CoursesController@courseList');
Route::get('/courses/create','CoursesController@create');
Route::post('/courses/add','CoursesController@store');
Route::delete('/courses/delete/{id}','CoursesController@destroy');
Route::post('/images','ImagesController@index');
//for corporates
Route::get('/enquiries/view/corporate','EnquiresController@corporateView');
Route::get('/enquiries/view/corporate/{id}','EnquiresController@corporateView');
Route::delete('/enquiries/corporate/{id}','EnquiresController@destroyCorporate');
//for industrial enquiries
Route::get('/enquiries/view/industrial','EnquiresController@industrialView');
Route::get('/enquiries/view/industrial/{id}','EnquiresController@industrialView');
Route::delete('/enquiries/industrial/{id}','EnquiresController@destroyindustrial');
//for college workshop enquiries
Route::get('/enquiries/view/college','EnquiresController@collegeView');
Route::get('/enquiries/view/college/{id}','EnquiresController@collegeView');
Route::delete('/enquiries/college/{id}','EnquiresController@destroyCollege');
//for contact us enquiries
Route::get('/enquiries/view/contact','Contacts@show');
Route::get('/enquiries/view/contact/{id}','Contacts@show');
Route::delete('/enquiries/contact/{id}','Contacts@destroy');

Route::get('/export/{model}','EnquiresController@export');
Route::get('/contact/export','Contacts@export');

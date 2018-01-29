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
Route::get('/form/{name?}', 'Pages@getForms');//get desired form
Route::get('/course/get/{id?}', 'CoursesController@getCourse');//get desired course details
Route::post('/workshop/submit', 'WrkshopController@submit');//submit worshop form
Route::post('/contact/submit', 'Contacts@submit');
Route::post('/college/workshop/submit', 'WrkshopController@submitCollegeWorkshop');
Route::post('/corporate/workshop/submit', 'WrkshopController@submitCorporateTraining');
Route::post('/industrial/training/submit', 'WrkshopController@submitIndustrialTraining');
Route::post('/classroom/training/submit', 'WrkshopController@submit');

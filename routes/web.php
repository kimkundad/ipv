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


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {

  Route::resource('welcome', 'WelcomeController');
  Route::resource('user_profile', 'User_profileController');
  Route::post('update_pass', 'User_profileController@update_pass');

  Route::post('update_pic', 'User_profileController@update_pic');
  Route::post('image-crop', 'User_profileController@imageCropPost');
  Route::resource('patient', 'PatientController');
  Route::get('add_patient', 'PatientController@add_patient');
  Route::get('add_item-{id}-{sub_id}', 'PatientController@add_item');
  Route::post('patient_item', 'PatientController@patient_item');

  Route::get('api/get_chart', 'PatientController@get_chart');

  Route::post('patient_item_edit', 'PatientController@patient_item_edit');
  Route::post('patient_item_del', 'PatientController@patient_item_del');
  Route::get('report_item', 'PatientController@report_item');
  Route::post('search_case', 'PatientController@search_case');
  Route::resource('news', 'NewsController');
  Route::get('blog_detail', 'NewsController@blog_detail');


});

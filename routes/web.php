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

Route::resource('student', 'StudentController');

Route::get('ajaxdata', 'AjaxdataController@index')->name('ajaxdata');

Route::get('ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');
Route::post('ajaxdata/postdata', 'AjaxdataController@postdata')->name('ajaxdata.postdata');
Route::get('ajaxdata/fetchdata', 'AjaxdataController@fetchdata')->name('ajaxdata.fetchdata');
Route::get('ajaxdata/removedata', 'AjaxdataController@removedata')->name('ajaxdata.removedata');
Route::get('ajaxdata/massremove', 'AjaxdataController@massremove')->name('ajaxdata.massremove');

Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');


Route::get('userlogin', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');
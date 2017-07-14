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

Route::get('admin', 'LoginController@authCheck')->name('admin');

Route::post('admin/login', 'LoginController@authenticate');
Route::post('admin/logout', 'LoginController@logout');

Route::group(['middleware' => 'auth'], function() {

	Route::get('admin/addEvent', 'AdminController@addEvent')->name('admin_home');
	Route::get('admin/addComp', 'AdminController@addComp');

	Route::get('admin/editEvent/{id}', 'AdminController@editEvent');
	Route::get('admin/editComp/{id}', 'AdminController@editComp');

	Route::post('admin/storeEvent', 'AdminController@storeEvent');
	Route::post('admin/storeComp', 'AdminController@storeComp');

	Route::post('admin/updateEvent/{id}', 'AdminController@updateEvent');
	Route::post('admin/updateComp/{id}', 'AdminController@updateComp');

	Route::get('admin/removeEvent/{id}', 'AdminController@removeEvent');
	Route::get('admin/removeComp/{id}', 'AdminController@removeComp');

	Route::get('admin/showMessages', 'AdminController@showMessages');
	Route::get('admin/deleteMessage/{id}', 'AdminController@deleteMessage');

});



/*Route::get('admin/register', function() {
	return view('auth.register');
});*/

Route::get('/', 'HomepageController@index')->name('home');

Route::get('allEvents', 'EventController@allEvents');
Route::get('allComps', 'EventController@allComps');

Route::get('showEvent/{id}', 'EventController@showEvent');

Route::get('aboutUs', 'InfoController@about');

Route::get('contact', 'InfoController@contact');
Route::post('contact/sendMessage', 'InfoController@leaveMessage');

Route::get('documents', 'InfoController@documents');

Route::get('stats', 'InfoController@stats');

Route::get('competitions', 'CompetitionController@index');

Route::post('comment', 'CommentController@addComment');

Auth::routes();


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/test', 'BobController@index');
//Route::get('/aboutme', 'BobController@indexF');

Route::get('/MainPage', 'MainController@Main');
Route::get('/AboutMe', 'About@Me');

Route::get('/WorkList', 'TaskList@List');
	Route::post('new-task', 'TaskList@CreateTask');
	Route::post('new-button', 'TaskList@Done');
	Route::post('delete-button', 'TaskList@Delete');
	Route::post('change-task', 'TaskList@Сhange');

Route::get('/Users', 'CreateUser@NewUser');

Route::get('/pagination', 'Users@users');
Route::post('delete-btn', 'Users@Delete');






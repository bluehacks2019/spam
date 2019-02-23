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
    return view('home');
});

Route::get('/test', function () {
    return "test successful";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/progress', 'HomeController@progress')->name('progress');
Route::get('/history', 'HomeController@history')->name('history');
Route::get('/myday', 'HomeController@myday')->name('myday');

Route::get('/profile', 'UserController@show')->name('users.show');

Route::get('/profile/edit', 'UserController@edit')->name('users.edit');

Route::patch('/profile/update', 'UserController@update')->name('users.update');

Route::patch('/home/add', 'HomeController@addActivities')->name('activities.add');


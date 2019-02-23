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

Route::get('/test', function () {
    return "test successful";
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/progress', 'HomeController@progress')->name('progress');
Route::get('/history', 'HomeController@history')->name('history');

Route::get('/profile', 'UserController@show')->name('users.show');

Route::get('/profile/edit', 'UserController@edit')->name('users.edit');

Route::patch('/profile/update', 'UserController@update')->name('users.update');

Route::patch('/home/add', 'HomeController@addActivities')->name('activities.add');

Route::get('/myday', 'EntryController@show')->name('entries.show');

Route::patch('/myday/update', 'EntryController@update')->name('entries.update');
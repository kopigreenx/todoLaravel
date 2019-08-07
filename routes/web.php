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
//==== INDEX ROUTE ===
Route::get('/', 'WelcomeController@index')->name('welcome');
//==== ABOUT ROUTE ===
Route::get('/about','AboutController@index')->name('about');
//==== PROFILE ROUTE ===
Route::get('/profile', 'HomeController@index')->name('profile');
Route::get('/profile/userinfo', 'HomeController@getUserInformation');
Route::post('/profile/save', 'HomeController@store');
//==== TODO ROUTE ===

Route::get('/todo', 'TodoController@index')->name('todo');
Route::get('/todo/list', 'TodoController@show');
Route::post('/todo', 'TodoController@update');
Route::put('/todo', 'TodoController@create');
Route::post('/todo/delete', 'TodoController@destroy');


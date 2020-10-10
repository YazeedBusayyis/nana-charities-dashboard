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

// Main Pages
Route::get('/home', 'HomeController@index')->name('home')->middleware('charity');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

/* Charities Management */

// List all charities
Route::get('/charities','CharityController@index');
// Add a new charity
Route::post('/charities','CharityController@store');
// Update charity information
Route::patch('/charities/{id}','CharityController@update');
// Delete charity
Route::delete('/charities/{id}','CharityController@destroy');



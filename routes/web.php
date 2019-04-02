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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sign', 'App\SignatureController@create')->name('sign');

/** 
 * Admin Dashboard Routes
*/

Route::prefix('api')->namespace('Api')->group(function(){
    Route::get('/student','StudentController@getAllStudents');
});



/** 
 * Admin Dashboard Routes
*/
// Route::get('/admin/{any?}','Admin\DashboardController@index')->where('any','.*');

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/{any?}','DashboardController@index')->where('any','.*');
});

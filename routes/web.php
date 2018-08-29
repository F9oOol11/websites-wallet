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
Route::get('/', 'HomeController@index')->name('home');
Route::post('/contact', ['uses' =>'ContactController@index']);
Route::get('/home', 'HomeController@user');
Route::post('/add-new', 'WalletController@add_new');
Route::get('/{User}/sites', 'HomeController@sites_list');
Route::get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');
Auth::routes();

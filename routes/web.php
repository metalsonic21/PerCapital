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
    return view('main.landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mutual', 'MutualController@index')->name('mutual');
Route::get('/FI', 'FIController@index')->name('FI');
Route::get('/riskcapital', 'RiskCapitalController@index')->name('riskcapital');
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/calculators', 'CalculatorsController@index')->name('calculators');
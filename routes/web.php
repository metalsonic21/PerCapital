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
Route::get('/mutual', 'MutualController@index')->name('fondomutual');
//Route::get('/FI', 'FIController@index')->name('FI');
//Route::get('/riskcapital', 'RiskCapitalController@index')->name('riskcapital');
Route::get('/services', 'ServicesController@index')->name('servicios');
Route::get('/about', 'AboutController@index')->name('percapital');
Route::get('/calculators', 'CalculatorsController@index')->name('calculadoras');
Route::get('/strategies', 'StratsController@index')->name('estrategias');
Route::get('/calendar', 'CalendarController@index')->name('calendario');

/*ENGLISH*/

Route::get('/en/mutual', 'MutualController@indexEN')->name('mutual');
Route::get('/en/services', 'ServicesController@indexEN')->name('services');
Route::get('/en/about', 'AboutController@indexEN')->name('about');
Route::get('/en', function () {
    return view('en.main.landing');
});
Route::get('/en/calculators', 'CalculatorsController@indexEN')->name('calculators');
Route::get('/en/strategies', 'StratsController@indexEN')->name('strategies');
//Route::get('/en/calendar', 'CalendarController@index')->name('calendar');


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
/*Route::get('/vue/{vue_capture?}', function () {
    return view('vue.index');
   })->where('vue_capture', '[\/\w\.-]*');*/


Route::get('/', function () {
    //return view ('welcome');
    return view('main/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

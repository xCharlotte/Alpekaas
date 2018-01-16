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
Route::get('/safety', 'SafetyController@index')->name('safety');

Route::get('/vuetest', 'VuetestController@index')->name('vuetest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/safetycheck', 'SafetyValueController@index')->name('safetycheck');

Route::get('/retro', 'RetroController@index')->name('retro');
Route::post('retro', 'RetroController@store');
// admin prefix
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
  });

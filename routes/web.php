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


Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');


Route::get('/routes/create', 'RouteController@create')->name('routes.create');
Route::post('/routes/create', 'RouteController@store');
Route::get('/routes', 'RouteController@index')->name('routes.index');


Route::get('/expeditions', 'ExpeditionController@index')->name('expeditions.index');


Route::get('/settings/profile', 'SettingController@profile')->name('settings.profile');
Route::get('/settings/export', 'SettingController@profile')->name('settings.export');
Route::get('/settings', 'SettingController@index')->name('settings.index');

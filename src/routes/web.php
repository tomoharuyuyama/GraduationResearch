<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\General\GeneralController@index')->name('top_page');
Route::post('/', 'App\Http\Controllers\General\GeneralController@add_table')->name('add_table');
Route::get('/table-list', 'App\Http\Controllers\General\GeneralController@tableList')->name('table_list');
Route::get('/upload', 'App\Http\Controllers\General\GeneralController@upload')->name('upload');
Route::get('/result', 'App\Http\Controllers\General\GeneralController@result')->name('result');
Route::get('/table-setting', 'App\Http\Controllers\General\GeneralController@tableSetting')->name('table_setting');
Route::get('/column-setting', 'App\Http\Controllers\General\GeneralController@columnSetting')->name('column_setting');
Route::get('/teacher-data', 'App\Http\Controllers\General\GeneralController@teacherData')->name('teacher_data');
Route::get('/record-list', 'App\Http\Controllers\General\GeneralController@recordList')->name('record_list');
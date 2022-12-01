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
Route::post('/edit-table-name', 'App\Http\Controllers\General\GeneralController@edit_table_name')->name('edit_table_name');
Route::post('/add-column', 'App\Http\Controllers\General\GeneralController@add_column')->name('add_column');
Route::get('/delete-column', 'App\Http\Controllers\General\GeneralController@delete_column')->name('delete_column');
Route::get('/{tableId}/delete', 'App\Http\Controllers\General\GeneralController@delete_table')->name('delete_table');
Route::get('/{tableId}/table-list', 'App\Http\Controllers\General\GeneralController@tableList')->name('table_list');
Route::get('/{tableId}/upload', 'App\Http\Controllers\General\GeneralController@upload')->name('upload');
Route::post('/upload', 'App\Http\Controllers\General\GeneralController@uploadImg')->name('upload_img');
Route::get('/{tableId}/result', 'App\Http\Controllers\General\GeneralController@result')->name('result');
Route::get('/{tableId}/table-setting', 'App\Http\Controllers\General\GeneralController@tableSetting')->name('table_setting');
Route::get('/{tableId}/{columnId}/column-setting', 'App\Http\Controllers\General\GeneralController@columnSetting')->name('column_setting');
Route::post('/column-setting', 'App\Http\Controllers\General\GeneralController@editColumn')->name('edit_column');
Route::get('/{tableId}/teacher-data', 'App\Http\Controllers\General\GeneralController@teacherData')->name('teacher_data');
Route::get('/{tableId}/record-list', 'App\Http\Controllers\General\GeneralController@recordList')->name('record_list');
Route::get('/python', 'App\Http\Controllers\General\GeneralController@python')->name('python');
Route::post('/python', 'App\Http\Controllers\General\GeneralController@execute_python')->name('execute_python');

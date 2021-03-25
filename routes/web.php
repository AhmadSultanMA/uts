<?php

use Illuminate\Support\Facades\Route;
$url = "App\http\Controllers";

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

Route::get('uts',$url . "\utsController@index");
Route::get('addTable',$url. "\utsController@addTable");
Route::post('saveTable',$url. "\utsController@saveTable");
Route::get('editTable/{id}',$url. "\utsController@editTable");
Route::post('updateTable',$url. "\utsController@updateTable");
Route::get('deleteTable/{id}',$url. "\utsController@deleteTable");

//export table
Route::get('uts/export/xlsx', $url . '\utsController@exportXL');
Route::get('uts/export/csv', $url . '\utsController@exportCSV');
Route::get('uts/export/pdf', $url . '\utsController@exportPDF');

// //import table
Route::get('upload', $url . '\utsController@upload');
Route::post('uts/upload/table', $url . '\utsController@uploadTable');
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

Route::get('/', 'OperationsController@index' );


Route::get('/operations', 'OperationsController@index');
Route::get('/operationsByParams', 'OperationsController@listByParams');

Route::get('/reports', 'ReportsController@index');
Route::get('/reportsByParams', 'ReportsController@listByParams');

Route::get('charts', 'ReportsController@charts');

Route::get('chartsByType', 'ReportsController@chartsByType');
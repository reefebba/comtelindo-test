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

Route::get('/iku', 'IkuController@index')->name('iku.index');
Route::post('/iku/mission', 'IkuController@storeMission')->name('iku.mission');
Route::post('/iku/tujuan', 'IkuController@storeTujuan')->name('iku.tujuan');
Route::post('/iku/sasaran', 'IkuController@storeSasaran')->name('iku.sasaran');
Route::post('/iku/indikator', 'IkuController@storeIndikator')->name('iku.indikator');

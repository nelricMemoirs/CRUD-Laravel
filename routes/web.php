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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pertanyaan', 'PertanyaanController');
Route::get('jawaban/{pertanyaan_id}', 'JawabanController@create')->name('jawaban.create');

Route::post('jawaban/{pertanyaan_id}', 'JawabanController@store')->name('jawaban.store');
// Route::resource('jawaban', 'JawabanController');
// Route::post('jawaban/{pertanyaan_id}', 'JawabanController@store');


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
    $users = \App\Models\User::all()->toArray();
    return view('binary.add', compact('users'));
})->name('home');


Route::post('/add', 'BinaryController@store')->name('storeSeller');
Route::get('/binary-datatable', 'BinaryController@sellersDatatable')->name('binaryDatatable');
Route::get('/binary', 'BinaryController@index')->name('binaryIndex');
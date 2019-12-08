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

//admin
Route::get('/admin', 'HomeController@index')->name('admin');

//operator
Route::get('/operator', 'buyer\buyerController@index')->name('buyer');

//Payer
Route::get('/payer', 'payer\PayerController@index')->name('payer');

//Vault
Route::get('/vault', 'vault\VaultController@index')->name('vault');

//Logistics
Route::get('/logistics', 'logistics\LogisticsController@index')->name('logistics');

//Processing
Route::get('/process', 'process\ProcessController@index')->name('process');

//Equipments
Route::get('/equip', 'equip\EquipmentController@index')->name('equip');


Route::group(['middleware' => 'auth'], function() {

    Route::get('/userLog', 'admin\userLogController@index')->name('userLog');
    Route::get('/adminLog', 'admin\adminLogController@index')->name('adminLog');
});

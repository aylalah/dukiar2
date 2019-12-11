<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace' => 'Api'], function () {

    Route::post('signup', 'AuthenticateController@signup')->name('signup');
    Route::post('login', 'AuthenticateController@login')->name('login');
    Route::post('login_face', 'AuthenticateController@login_face')->name('login_face');
//    Route::get('logout', 'AuthenticateController@logout')->name('logout');
//    Route::post('verify-user', 'AuthenticateController@verifyUser');

    Route::group(['middleware' => 'auth:api'], function(){
 Route::post('getUser', 'AuthenticateController@getUser');
 Route::post('updateUser', 'AuthenticateController@updateUser');
 Route::post('newTransaction', 'TransactionController@new');
 Route::get('transaction/{transaction_id}', 'TransactionController@getDetails');
 Route::get('transactionHistory/{user_id}', 'TransactionController@history');
 });
});

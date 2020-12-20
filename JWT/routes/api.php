<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('refresh','App\Http\Controllers\API\AuthController@refresh' );
Route::post('login','App\Http\Controllers\API\AuthController@login');

Route::group(['middleware' => 'auth:api','jwt.refresh'],function(){
   Route::get('users',function (){
       return \App\Models\User::all();
   });
   Route::post('logout','App\Http\Controllers\API\AuthController@logout' );
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LoginController;
use  App\Http\Controllers\PermissionController;
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
Route::resource('admin',AdminController::class);
Route::resource('city',CityController::class);
Route::resource('state',StateController::class);
Route::resource('country',CountryController::class);
Route::resource('login',LoginController::class);
Route::resource('permission',PermissionController::class);

Route::group(['middleware'=>['auth'=>'has.permission']],function(){


});

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

Route::get('/', 'App\Http\Controllers\SiteController@index');

Route::get('/unit', 'App\Http\Controllers\UnitController@index');

Route::get('/merch', 'App\Http\Controllers\MerchandiseController@index');

Route::get('/cat', 'App\Http\Controllers\CategoryController@index');

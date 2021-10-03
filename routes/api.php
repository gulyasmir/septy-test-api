<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Screen\Screen1Controller;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('screen', 'App\Http\Controllers\Screen\ScreenController@screen');
Route::get('screen/{id}', 'App\Http\Controllers\Screen\ScreenController@screenById');
Route::post('screen', 'App\Http\Controllers\Screen\ScreenController@screenSave');
Route::put('screen/{screen}', 'App\Http\Controllers\Screen\ScreenController@screenEdit');
Route::delete('screen/{screen}', 'App\Http\Controllers\Screen\ScreenController@screenDelete');

Route::get('contacts', 'App\Http\Controllers\Screen\ContactsController@contacts');

Route::get('list-screen2', 'App\Http\Controllers\Screen\ListScreen2Controller@list');
Route::get('list-screen3', 'App\Http\Controllers\Screen\ListScreen3Controller@list');
Route::get('list-screen4', 'App\Http\Controllers\Screen\ListScreen4Controller@list');

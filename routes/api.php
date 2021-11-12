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

Route::get('screen', 'App\Http\Controllers\Api\Screen\ScreenController@screen');
Route::get('screen/{id}', 'App\Http\Controllers\Api\Screen\ScreenController@screenById');
Route::post('screen', 'App\Http\Controllers\Screen\Api\ScreenController@screenSave');
Route::put('screen/{screen}', 'App\Http\Controllers\Api\Screen\ScreenController@screenEdit');
Route::delete('screen/{screen}', 'App\Http\Controllers\Api\Screen\ScreenController@screenDelete');

Route::get('contacts', 'App\Http\Controllers\Screen\ContactController@contacts'); // берет 1ю строку
Route::get('contacts/{id}', 'App\Http\Controllers\Screen\ContactController@contactsById');
Route::post('contacts', 'App\Http\Controllers\Screen\ContactController@contactsSave');
Route::put('contacts/{contacts}', 'App\Http\Controllers\Screen\ContactController@contactsEdit');
Route::delete('contacts/{contacts}', 'App\Http\Controllers\Screen\ContactController@contactsDelete');

Route::get('list-screen2', 'App\Http\Controllers\Screen\ListScreen2Controller@list');
Route::get('list-screen2/{id}', 'App\Http\Controllers\Screen\ListScreen2Controller@listById');
Route::post('list-screen2', 'App\Http\Controllers\Screen\ListScreen2Controller@listSave');
Route::put('list-screen2/{list}', 'App\Http\Controllers\Screen\ListScreen2Controller@listEdit');
Route::delete('list-screen2/{list}', 'App\Http\Controllers\Screen\ListScreen2Controller@listDelete');

Route::get('list-screen3', 'App\Http\Controllers\Screen\ListScreen3Controller@list');
Route::get('list-screen3/{id}', 'App\Http\Controllers\Screen\ListScreen3Controller@listById');
Route::post('list-screen3', 'App\Http\Controllers\Screen\ListScreen3Controller@listSave');
Route::put('list-screen3/{list}', 'App\Http\Controllers\Screen\ListScreen3Controller@listEdit');
Route::delete('list-screen3/{list}', 'App\Http\Controllers\Screen\ListScreen3Controller@listDelete');

Route::get('list-screen4', 'App\Http\Controllers\Screen\ListScreen4Controller@list');
Route::get('list-screen4/{id}', 'App\Http\Controllers\Screen\ListScreen4Controller@listById');
Route::post('list-screen4', 'App\Http\Controllers\Screen\ListScreen4Controller@listSave');
Route::put('list-screen4/{list}', 'App\Http\Controllers\Screen\ListScreen4Controller@listEdit');
Route::delete('list-screen4/{list}', 'App\Http\Controllers\Screen\ListScreen4Controller@listDelete');

Route::post('login', 'Api\Auth\LoginController@login');

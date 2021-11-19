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

Route::get('screen', 'App\Http\Controllers\Api\Screen\ScreenController@screen');
Route::get('screen/{id}', 'App\Http\Controllers\Api\Screen\ScreenController@screenById');


Route::get('contacts', 'App\Http\Controllers\Api\Screen\ContactController@contacts'); // берет 1ю строку
Route::get('contacts/{id}', 'App\Http\Controllers\Api\Screen\ContactController@contactsById');


Route::get('list-screen2', 'App\Http\Controllers\Api\Screen\ListScreen2Controller@list');
Route::get('list-screen2/{id}', 'App\Http\Controllers\Api\Screen\ListScreen2Controller@listById');


Route::get('list-screen3', 'App\Http\Controllers\Api\Screen\ListScreen3Controller@list');
Route::get('list-screen3/{id}', 'App\Http\Controllers\Api\Screen\ListScreen3Controller@listById');


Route::get('list-screen4', 'App\Http\Controllers\Api\Screen\ListScreen4Controller@list');
Route::get('list-screen4/{id}', 'App\Http\Controllers\Api\Screen\ListScreen4Controller@listById');


Route::post('login', 'App\Http\Controllers\Api\Auth\LoginController@login');

Route::post('upload',['as' => 'upload_file','uses' => 'UploadController@upload']);
Route::post('orders', 'App\Http\Controllers\Api\OrderController@orderSave');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('refresh', 'App\Http\Controllers\Api\Auth\LoginController@refresh');

    Route::post('screen', 'App\Http\Controllers\Api\Screen\ScreenController@screenSave');
    Route::put('screen/{screen}', 'App\Http\Controllers\Api\Screen\ScreenController@screenEdit');
    Route::delete('screen/{screen}', 'App\Http\Controllers\Api\Screen\ScreenController@screenDelete');

    Route::post('contacts', 'App\Http\Controllers\Api\Screen\ContactController@contactsSave');
    Route::put('contacts/{contacts}', 'App\Http\Controllers\Api\Screen\ContactController@contactsEdit');
    Route::delete('contacts/{contacts}', 'App\Http\Controllers\Api\Screen\ContactController@contactsDelete');

    Route::post('list-screen2', 'App\Http\Controllers\Api\Screen\ListScreen2Controller@listSave');
    Route::put('list-screen2/{list}', 'App\Http\Controllers\Api\Screen\ListScreen2Controller@listEdit');
    Route::delete('list-screen2/{list}', 'App\Http\Controllers\Api\Screen\ListScreen2Controller@listDelete');

    Route::post('list-screen3', 'App\Http\Controllers\Api\Screen\ListScreen3Controller@listSave');
    Route::put('list-screen3/{list}', 'App\Http\Controllers\Api\Screen\ListScreen3Controller@listEdit');
    Route::delete('list-screen3/{list}', 'App\Http\Controllers\Api\Screen\ListScreen3Controller@listDelete');

    Route::post('list-screen4', 'App\Http\Controllers\Api\Screen\ListScreen4Controller@listSave');
    Route::put('list-screen4/{list}', 'App\Http\Controllers\Api\Screen\ListScreen4Controller@listEdit');
    Route::delete('list-screen4/{list}', 'App\Http\Controllers\Api\Screen\ListScreen4Controller@listDelete');
});

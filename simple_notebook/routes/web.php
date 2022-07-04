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

Route::get('/', 'App\Http\Controllers\NoteController@index');
Route::post('/', 'App\Http\Controllers\UserController@login_check');

Route::get('login', 'App\Http\Controllers\SimpleNoteController@login');

Route::get('register', 'App\Http\Controllers\SimpleNoteController@register');
Route::post('register', 'App\Http\Controllers\SimpleNoteController@regist_confirm');

Route::post('register/complete', 'App\Http\Controllers\UserController@regist_complete');

Route::get('logout', 'App\Http\Controllers\SimpleNoteController@logout');

Route::post('upload', 'App\Http\Controllers\NoteController@upload');
Route::post('upload/complete', 'App\Http\Controllers\NoteController@upload_complete');

Route::get('edit', 'App\Http\Controllers\UserController@edit');
Route::post('edit', 'App\Http\Controllers\UserController@edit_confirm');
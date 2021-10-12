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

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'submit', 'as' => 'submit.'], function () {
        Route::get('/', [App\Http\Controllers\SubmitController::class, 'index'])->name('index');
        Route::post('/', [App\Http\Controllers\SubmitController::class, 'store'])->name('store');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'js'], function () {
    Route::get('/getAreas', [App\Http\Controllers\JavaScriptController::class, 'getAreas']);
});

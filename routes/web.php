<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\LoginController;

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

Route::prefix('user')->group(function () {
    Route::post('register', RegisterController::class);
    Route::post('login', LoginController::class);
});

Route::prefix('job')->group(function () {
    Route::post('create', 'App\Http\Controllers\Job\CreateController');
    Route::get('get/all', 'App\Http\Controllers\Job\GetAllController');
    Route::get('get/all/{id}', 'App\Http\Controllers\Job\GetAllByIdController');
    Route::delete('delete/{id}','App\Http\Controllers\Job\DeleteController');
    Route::put('update/{id}', 'App\Http\Controllers\Job\UpdateController');
});

Route::prefix('project')->group(function () {
    Route::post('create', 'App\Http\Controllers\Project\CreateController');
    Route::get('get/all', 'App\Http\Controllers\Project\GetAllController');
    Route::get('get/all/{id}', 'App\Http\Controllers\Project\GetAllByIdController');
    Route::delete('delete/{id}','App\Http\Controllers\Project\DeleteController');
    Route::put('update/{id}','App\Http\Controllers\Project\UpdateController');
});
   


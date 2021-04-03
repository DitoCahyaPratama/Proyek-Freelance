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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/roles', [App\Http\Controllers\PermissionController::class, 'Permission']);

Route::group(['middleware' => 'role:developer'], function() {

    Route::get('/admin', function() {
 
       return 'Welcome Admin';
       
    });
 
 });
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin
Route::get('/admin', function () {
    return view('admin.layouts.admin');
});

Route::prefix('/admin')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('get/all', 'App\Http\Controllers\Admin\User\GetAllController');
    });
    Route::prefix('testimoni')->group(function () {
        Route::post('create', 'App\Http\Controllers\Admin\Testimoni\CreateController');
        Route::get('get/all', 'App\Http\Controllers\Admin\Testimoni\GetAllController')->name('admin.testimoni.getAll');;
        Route::delete('delete/{id}','App\Http\Controllers\Admin\Testimoni\DeleteController');
    });
    Route::prefix('job')->group(function () {
        Route::post('create', 'App\Http\Controllers\Admin\Job\CreateController');
        Route::get('get/all', 'App\Http\Controllers\Admin\Job\GetAllController')->name('admin.job.getAll');
        Route::get('get/all/{id}', 'App\Http\Controllers\Admin\Job\GetAllByIdController');
        Route::delete('delete/{id}','App\Http\Controllers\Admin\Job\DeleteController');
        Route::put('update/{id}', 'App\Http\Controllers\Admin\Job\UpdateController');
    });    
    Route::prefix('project')->group(function () {
        Route::post('create', 'App\Http\Controllers\Admin\Project\CreateController');
        Route::get('get/all', 'App\Http\Controllers\Admin\Project\GetAllController')->name('admin.project.getAll');;
        Route::get('get/all/{id}', 'App\Http\Controllers\Admin\Project\GetAllByIdController');
        Route::delete('delete/{id}','App\Http\Controllers\Admin\Project\DeleteController');
        Route::put('update/{id}','App\Http\Controllers\Admin\Project\UpdateController');
    });
    Route::prefix('projectclaims')->group(function () {
        Route::post('create', 'App\Http\Controllers\Admin\ProjectClaim\CreateController');
        Route::get('get/all', 'App\Http\Controllers\Admin\ProjectClaim\GetAllController')->name('admin.projectclaims.getAll');
        Route::get('get/all/done', 'App\Http\Controllers\Admin\ProjectClaim\GetAllByStatusOneController');
        Route::put('complete/{id}', 'App\Http\Controllers\Admin\ProjectClaim\CompleteController');
        // Route::delete('delete/{id}','App\Http\Controllers\Admin\Project\DeleteController');
        // Route::put('update/{id}','App\Http\Controllers\Admin\Project\UpdateController');
    });
});

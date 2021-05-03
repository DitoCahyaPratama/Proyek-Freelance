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

Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index']);
Route::get('/kerja', [App\Http\Controllers\User\KerjaController::class, 'index']);
Route::get('/proyek', [App\Http\Controllers\User\ProyekController::class, 'index']);
Route::get('/tentang', [App\Http\Controllers\User\TentangController::class, 'index']);
Route::get('/kontak', [App\Http\Controllers\User\KontakController::class, 'index']);

Route::get('/carikerja', [App\Http\Controllers\User\KerjaController::class, 'search']);
Route::get('/cariprojek', [App\Http\Controllers\User\ProyekController::class, 'search']);


Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'role:pKaryawan'], function() {
    Route::prefix('/jobsaya')->group(function () {
        Route::get('/', [App\Http\Controllers\User\KerjaController::class, 'myjob']);
        Route::post('create', 'App\Http\Controllers\Admin\Job\CreateController');
        Route::get('get/all', 'App\Http\Controllers\Admin\Job\GetAllController')->name('admin.job.getAll');
        Route::get('get/all/{id}', 'App\Http\Controllers\Admin\Job\GetAllByIdController');
        Route::delete('delete/{id}','App\Http\Controllers\Admin\Job\DeleteController');
        Route::put('update/{id}', 'App\Http\Controllers\Admin\Job\UpdateController');
    });
    Route::get('/projeksaya', [App\Http\Controllers\User\ProyekController::class, 'myproyek']);
    Route::get('/profile-client', [App\Http\Controllers\User\ProfileController::class, 'client']);

});

Route::group(['middleware' => 'role:pKerja'], function() {
    Route::get('/projek-saya', [App\Http\Controllers\User\ProyekController::class, 'myproyek']);
    Route::get('/profile-freelance', [App\Http\Controllers\User\ProfileController::class, 'freelance']);

});

Route::group(['middleware' => 'role:admin'], function() {
    Route::prefix('/admin')->group(function () {
        Route::prefix('/dashboard')->group(function () {
            Route::get('get/all', 'App\Http\Controllers\Admin\Dashboard\GetCountController')->name('dashboard');
        });
        Route::prefix('/user')->group(function () {
            Route::get('get/all', 'App\Http\Controllers\Admin\User\GetAllController');
        });
        Route::prefix('/testimoni')->group(function () {
            Route::post('create', 'App\Http\Controllers\Admin\Testimoni\CreateController');
            Route::get('get/all', 'App\Http\Controllers\Admin\Testimoni\GetAllController')->name('admin.testimoni.getAll');
            Route::delete('delete/{id}','App\Http\Controllers\Admin\Testimoni\DeleteController');
        });
        Route::prefix('/job')->group(function () {
            Route::post('create', 'App\Http\Controllers\Admin\Job\CreateController');
            Route::get('get/all', 'App\Http\Controllers\Admin\Job\GetAllController')->name('admin.job.getAll');
            Route::get('get/all/{id}', 'App\Http\Controllers\Admin\Job\GetAllByIdController');
            Route::delete('delete/{id}','App\Http\Controllers\Admin\Job\DeleteController');
            Route::put('update/{id}', 'App\Http\Controllers\Admin\Job\UpdateController');
        });
        Route::prefix('/project')->group(function () {
            Route::post('create', 'App\Http\Controllers\Admin\Project\CreateController');
            Route::get('get/all', 'App\Http\Controllers\Admin\Project\GetAllController')->name('admin.project.getAll');
            Route::get('get/all/{id}', 'App\Http\Controllers\Admin\Project\GetAllByIdController');
            Route::delete('delete/{id}','App\Http\Controllers\Admin\Project\DeleteController');
            Route::put('update/{id}','App\Http\Controllers\Admin\Project\UpdateController');
        });
        Route::prefix('/projectclaims')->group(function () {
            Route::post('create', 'App\Http\Controllers\Admin\ProjectClaim\CreateController');
            Route::get('get/all', 'App\Http\Controllers\Admin\ProjectClaim\GetAllController')->name('admin.projectclaims.getAll');
            Route::get('get/all/done', 'App\Http\Controllers\Admin\ProjectClaim\GetAllByStatusOneController');
            Route::put('complete/{id}', 'App\Http\Controllers\Admin\ProjectClaim\CompleteController');
            // Route::delete('delete/{id}','App\Http\Controllers\Admin\Project\DeleteController');
            // Route::put('update/{id}','App\Http\Controllers\Admin\Project\UpdateController');
        });
    });
});


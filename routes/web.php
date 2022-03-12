<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\HostController;
use App\Http\Middleware\CheckPermissionsMiddleware;
use App\Http\Middleware\HostMiddleware;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

//route for admin
Route::middleware(['auth', CheckPermissionsMiddleware::class . ":read_dashboard"])->prefix('/admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('cities', CityController::class);
    Route::resource('sliders', SliderController::class)->except(['show']);

});

//Route For Host
Route::middleware(['auth', HostMiddleware::class])->group(function () {

    Route::get('/host-register', [HostController::class, 'create'])->name('host.register');

});



<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\FeatureController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\HostController;
use App\Http\Controllers\admin\HostController as HostAdminController;
use App\Http\Controllers\client\HotelController;
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
    Route::resource('features', FeatureController::class);
    Route::resource('sliders', SliderController::class)->except(['show']);
    Route::get('/hosts', [HostAdminController::class, 'index'])->name('hosts.index');
    Route::get('/hosts-photo', [HostAdminController::class, 'download'])->name('hosts.photo');
    Route::post('/hosts-accept', [HostAdminController::class, 'accept'])->name('hosts.accept');
    Route::post('/hosts-reject', [HostAdminController::class, 'reject'])->name('hosts.reject');

});

//Route For Host
Route::middleware(['auth', HostMiddleware::class])->group(function () {

    //check the user is not in db if there is then redirect to table and show status

    Route::get('/host', [HostController::class, 'index'])->name('client.host.index');
    Route::get('/hotels', [HotelController::class, 'index'])->name('client.hotel.index');
    Route::get('/hotels/create', [HotelController::class, 'create'])->name('client.hotel.create');
    Route::post('/hotels', [HotelController::class, 'store'])->name('client.hotel.store');
    Route::get('/hotels/{hotel}', [HotelController::class, 'show'])->name('hotels.show');
    Route::get('/host/edit', [HostController::class, 'edit'])->name('host.edit');
    Route::get('/host-register', [HostController::class, 'create'])->name('host.register');
    Route::post('/host-register', [HostController::class, 'store'])->name('host.register.post');
    Route::patch('/host/{host}/update', [HostController::class, 'update'])->name('host.update');


});



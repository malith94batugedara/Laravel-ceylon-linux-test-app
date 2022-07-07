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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin routes
Route::group(['middleware' => ['admin','auth']], function(){
    Route::get('/admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('admin')->name('admin.dashboard');

    Route::get('/admin/dashboard/zone',[App\Http\Controllers\Admin\DashboardController::class, 'viewzone'])->name('admin.dashboard.zone');

    Route::get('/admin/dashboard/region',[App\Http\Controllers\Admin\DashboardController::class, 'viewregion'])->name('admin.dashboard.region');

    Route::get('/admin/dashboard/territory',[App\Http\Controllers\Admin\DashboardController::class, 'viewterritory'])->name('admin.dashboard.territory');

    Route::get('/admin/dashboard/user',[App\Http\Controllers\Admin\DashboardController::class, 'viewuser'])->name('admin.dashboard.user');

    Route::get('/admin/dashboard/product',[App\Http\Controllers\Admin\DashboardController::class, 'viewproduct'])->name('admin.dashboard.product');

    Route::get('/admin/dashboard/product/view',[App\Http\Controllers\Admin\DashboardController::class, 'viewproductdetails'])->name('admin.dashboard.product.view');

    Route::post('/admin/dashboard/zone/store',[App\Http\Controllers\Admin\ZoneController::class, 'store'])->name('admin.dashboard.zone.store');

    Route::get('/admin/dashboard/zone/store/all',[App\Http\Controllers\Admin\ZoneController::class, 'allZones'])->name('admin.dashboard.zone.store.all');

    Route::get('/admin/dashboard/zone/{zoneId}/edit',[App\Http\Controllers\Admin\ZoneController::class, 'edit'])->name('admin.dashboard.zone.edit');

    Route::post('/admin/dashboard/zone/{zoneId}/update',[App\Http\Controllers\Admin\ZoneController::class, 'update'])->name('admin.dashboard.zone.update');

    Route::post('/admin/dashboard/region/store',[App\Http\Controllers\Admin\RegionController::class, 'store'])->name('admin.dashboard.region.store');

    Route::get('/admin/dashboard/region/store/all',[App\Http\Controllers\Admin\RegionController::class, 'allRegions'])->name('admin.dashboard.region.store.all');

    Route::get('/admin/dashboard/region/{regionId}/edit',[App\Http\Controllers\Admin\RegionController::class, 'edit'])->name('admin.dashboard.region.edit');

    Route::post('/admin/dashboard/region/{regionId}/update',[App\Http\Controllers\Admin\RegionController::class, 'update'])->name('admin.dashboard.region.update');
});
//user routes
Route::group(['middleware' => ['user','auth']],function(){
     Route::get('/home/user/add',[App\Http\Controllers\User\UserController::class, 'index'])->name('home.user.add');

     Route::get('/home/user/view',[App\Http\Controllers\User\UserController::class, 'indexview'])->name('home.user.view');
});
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('start');
});
Route::get('/monitor', function () {
    return view('frontend.monitor.index');
});
Route::get('/monitor/test', function () {
    return view('frontend.monitor.test');
})->name('monitor.test');
Route::get('/monitor/alarm', function () {
    return view('frontend.monitor.alarm');
})->name('monitor.alarm');
Route::get('/monitor/status', function () {
    return view('frontend.monitor.status');
})->name('monitor.status');

// CMS Routes
Route::name('cms.')->group(function() {
   Route::resource('vehicles', \App\Http\Controllers\CMS\VehicleController::class);
});

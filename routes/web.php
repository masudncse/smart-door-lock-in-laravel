<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DoorController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::resource('devices', DeviceController::class);
Route::resource('doors', DoorController::class);
Route::resource('people', PeopleController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
});

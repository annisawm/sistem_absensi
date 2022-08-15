<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SignaturePadController;
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
    return view('landing.index');
});

Route::resource('/guest', GuestController::class);
Route::resource('/program', ProgramController::class);



<?php

use App\Http\Controllers\Operator\GuestController;
use App\Http\Controllers\Operator\ProgramController;
use App\Http\Controllers\Auth\AuthController;
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
Route::get('login', 'App\Http\Controllers\Auth\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\Auth\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    // Route::group(['middleware' => ['cek_login::super_admin']], function () {
    //     Route::resource('super_admin',SuperAdminController::class );
    // });
    // Route::group(['middleware' => ['cek_login::admin']], function () {
    //     Route::resource('super_admin',AdminController::class );
    // });
    Route::group(['middleware' => ['cek_login::operator']], function () {
        Route::resource('super_admin',ProgramController::class );
    });
    // Route::group(['middleware' => ['cek_login::pejabat_pj']], function () {
    //     Route::resource('super_admin',PejabatPJController::class );
    // });
    // Route::group(['middleware' => ['cek_login::pejabat']], function () {
    //     Route::resource('super_admin',PejabatController::class );
    // });
});


Route::get('/guest/cetak', [GuestController::class, 'cetak']);
Route::resource('/guest', GuestController::class);
Route::resource('/program', ProgramController::class);
// Route::resource('/user', \App\Http\Controllers\Admin\UserController::class);
	




// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


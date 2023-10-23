<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\NomorAntrianController;
use App\Http\Controllers\PanggilanAntrianController;
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

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('landingpage.index');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('register.create');

//make route for admin page
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

//make route for admin page
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('spesialis', SpesialisController::class);
    Route::resource('dokter', DokterController::class);
    Route::resource('riwayat-tindakan', RiwayatTindakan::class);
    Route::resource('antrian', AntrianController::class);
    Route::resource('panggilan-antrian', PanggilanAntrianController::class);
});

require __DIR__ . '/auth.php';


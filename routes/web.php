<?php

use App\Http\Controllers\AmbilAntrianController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\AntrianDokterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ChangeStatusController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\PanggilanAntrianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DependantDropdownController;
use App\Http\Controllers\UserController;

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


Route::get('provinces', 'DependentDropdownController@provinces')->name('provinces');
Route::get('cities', 'DependentDropdownController@cities')->name('cities');
Route::get('districts', 'DependentDropdownController@districts')->name('districts');
Route::get('villages', [DependantDropdownController::class, 'villages'])->name('villages');

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('landingpage.index');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('register.create');

//make route for admin page
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('admin.profile');
})->name('profile');

Route::post('/update-status', [ChangeStatusController::class, 'updateStatus'])->name('update-status');
//make route for admin page
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('spesialis', SpesialisController::class);
    Route::resource('dokter', DokterController::class);
    Route::resource('riwayat-tindakan', RiwayatTindakan::class);
    Route::resource('antrian', AntrianController::class);
    Route::resource('user', UserController::class);
    Route::resource('ambil-antrian', AmbilAntrianController::class);

Route::resource('panggilan-antrian', PanggilanAntrianController::class);

Route::resource('antrian-dokter', AntrianDokterController::class);
});


require __DIR__ . '/auth.php';


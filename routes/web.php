<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\Jenis_SeleksiController;
use App\Http\Controllers\PeriodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SettingController;
use App\Models\Gelombang;

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
Route::get('create-akun', function () {
    return view('akun.create');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {





    // Akun dan Akun Controller
    Route::get('manajemen-akun', [AkunController::class, 'index'])->name('manajemen-akun')->middleware(['auth']);
    Route::get('create-akun', [AkunController::class, 'create'])->name('create-akun');
    Route::get('detail-akun/{user}', [AkunController::class, 'detail'])->name('detail-akun');
    
    
    
    
    
    
    
    
    
    // Role Manajemen
    Route::get('/buatakunMahasiswa', [RegisteredUserController::class, 'buatAkunMahasiswa'])->middleware(['auth']);
    Route::get('/buatakunPerMahasiswa/{user}', [RegisteredUserController::class, 'buatAkunPerMahasiswa'])->middleware(['auth']);
    Route::delete('/manajemen-akun/{user}', [RegisteredUserController::class, 'destroy']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


    // Controller Formulir
    Route::get('create-formulir', [FormulirController::class, 'create'])->name('create-formulir');
    Route::get('info-formulir', [FormulirController::class, 'info'])->name('info-formulir');
    Route::get('setting', [SettingController::class, 'setting'])->name('setting');
    // Controller Semester
    Route::get('semester', [SemesterController::class, 'index'])->name('semester');
    Route::post('semester', [SemesterController::class, 'store'])->name('semester');

    // Controller Periode

    Route::get('periode', [PeriodeController::class, 'index'])->name('periode');
    Route::post('periode', [PeriodeController::class, 'store'])->name('periode');
    // Controller Gelombang

    Route::get('gelombang', [GelombangController::class, 'index'])->name('gelombang');
    Route::post('gelombang', [GelombangController::class, 'store'])->name('gelombang');
    // Controller Jenis_seleksi

    Route::get('jenis-seleksi', [Jenis_SeleksiController::class, 'index'])->name('jenis-seleksi');
    Route::post('jenis-seleksi', [Jenis_SeleksiController::class, 'store'])->name('jenis-seleksi');



    Route::get('detail-registrasi', [RegistrasiController::class, 'index'])->name('registrasi-awal');
    Route::get('registrasi-awal', [RegistrasiController::class, 'create'])->name('registrasi-awal');
    Route::post('registrasi-awal', [RegistrasiController::class, 'store'])->name('registrasi-awal');

































    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';

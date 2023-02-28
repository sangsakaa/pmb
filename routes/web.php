<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FormulirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    Route::delete('/manajemen-akun/{user}', [RegisteredUserController::class, 'destroy']);
    Route::get('manajemen-akun', [AkunController::class, 'index'])->name('manajemen-akun')->middleware(['auth']);
    Route::get('create-akun', [AkunController::class, 'create'])->name('create-akun');
    Route::get('/buatakunMahasiswa', [RegisteredUserController::class, 'buatAkunMahasiswa'])->middleware(['auth']);
    Route::get('/buatakunPerMahasiswa/{user}', [RegisteredUserController::class, 'buatAkunPerMahasiswa'])->middleware(['auth']);


    // Controller Formulir
    Route::get('create-formulir', [FormulirController::class, 'create'])->name('create-formulir');






































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

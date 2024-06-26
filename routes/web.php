<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConsultaController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/consultas', [ConsultaController::class, 'index'])->name('consultas.index');

Route::get('/consultas/create', [ConsultaController::class, 'create'])->name('consultas.create');

Route::post('/consultas', [ConsultaController::class, 'store'])->name('consultas.store');

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/calendar', function () {return view('calendar');});

require __DIR__.'/auth.php';

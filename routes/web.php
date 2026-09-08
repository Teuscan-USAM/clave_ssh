<?php

use App\Http\Controllers\SiapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ssh.show');
})->name('ssh.show');

Route::get('/soporte', function () {
    return view('soporte/soporte');
})->name('soporte');

Route::get('/soporte/modulo1', function () {
    return view('soporte/modulo1');
})->name('soporte.modulo1');

Route::get('/soporte/modulo2', function () {
    return view('soporte/modulo2');
})->name('soporte.modulo2');

Route::get('/soporte/modulo3', function () {
    return view('soporte/modulo3');
})->name('soporte.modulo3');

Route::get('/soporte/modulo4', function () {
    return view('soporte/modulo4');
})->name('soporte.modulo4');

Route::get('/siap', [SiapController::class, 'index'])->name('siap.show');

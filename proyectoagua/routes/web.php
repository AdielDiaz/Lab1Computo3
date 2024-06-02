<?php

use App\Http\Controllers\regioncontroller;
use App\Http\Controllers\fuentedecontaminacioncontroller;
use App\Http\Controllers\recursoshidricoscontroller;
use App\Http\Controllers\impactoambientalcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/region', [regionController::class, 'index'])->name('region.index');
Route::post('/region/store', [regionController::class, 'store'])->name('region.store');

Route::get('/fuentedecontaminacion', [fuentedecontaminacionController::class, 'index'])->name('fuentedecontaminacion.index');
Route::post('/fuentedecontaminacion/store', [fuentedecontaminacionController::class, 'store'])->name('fuentedecontaminacion.store');

Route::get('/recursoshidricos', [recursoshidricoscontroller::class, 'index'])->name('recursoshidricos.index');
Route::post('/recursoshidricos/store', [recursoshidricoscontroller::class, 'store'])->name('recursoshidricos.store');

Route::get('/impactoambiental', [impactoambientalcontroller::class, 'index'])->name('impactoambiental.index');
Route::post('/impactoambiental/store', [impactoambientalcontroller::class, 'store'])->name('impactoambiental.store');

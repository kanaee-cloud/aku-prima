<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BupotController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bupot', [BupotController::class, 'index']);
Route::get('/bupot/create', [BupotController::class, 'create'])->name('pages.create');
Route::post('/bupot/create', [BupotController::class, 'generate'])->name('pages.generate');




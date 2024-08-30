<?php

use App\Http\Controllers\FaitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FaitController::class, 'index'])
        ->name('index');

Route::get('/faits', [FaitController::class, 'list'])
        ->name('faits.list');

Route::get('/faits/create', [FaitController::class, 'create'])
        ->name('faits.create');

Route::post('/faits', [FaitController::class, 'store'])
        ->name('faits.store');

Route::post('/faits/destroy', [FaitController::class, 'destroy'])
        ->name('faits.destroy');

// Bonus 1 – Édition 
Route::get('/faits/{id}/edit', [FaitController::class, 'edit'])
        ->name('faits.edit');

Route::post('/faits/update', [FaitController::class, 'update'])
        ->name('faits.update');

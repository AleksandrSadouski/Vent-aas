<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentController;

Route::get('/vents/random', [VentController::class, 'show'])->middleware('throttle:60,1');
Route::post('/vent', [VentController::class, 'store'])->middleware('throttle:60,1');
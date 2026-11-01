<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentController;

Route::get('/vent/random', [VentController::class, 'show']);
Route::post('/vent/post', [VentController::class, 'store']);
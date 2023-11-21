<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestPatternController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TestPatternController::class)->group(function () {
    Route::get('/factory', 'factory');
});

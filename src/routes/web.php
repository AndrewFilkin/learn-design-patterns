<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestPatternController;
use App\Http\Controllers\TestStructuralPatternController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TestPatternController::class)->group(function () {
    Route::get('/factory', 'factory');
    Route::get('/singleton', 'singleton');
    Route::get('/factory-method', 'factoryMethod');
    Route::get('/abstract-factory', 'abstractFactory');
    Route::get('/builder', 'builder');
    Route::get('/prototype', 'prototype');
});

Route::controller(TestStructuralPatternController::class)->group(function () {
    Route::get('/dependency-injection', 'dependencyInjection');
    Route::get('/registry', 'registry');
});

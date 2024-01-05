<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestPatternController;
use App\Http\Controllers\TestStructuralPatternController;
use App\Http\Controllers\TestBehavioralPatternController;

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
    Route::get('/composite', 'composite');
    Route::get('/adapter', 'adapter');
    Route::get('/bridge', 'bridge');
    Route::get('/decorator', 'decorator');
    Route::get('/facade', 'facade');
});

Route::controller(TestBehavioralPatternController::class)->group(function () {
    Route::get('/strategy', 'strategy');
    Route::get('/command', 'command');
    Route::get('/state', 'state');
    Route::get('/iterator', 'iterator');
});

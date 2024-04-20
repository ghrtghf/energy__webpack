<?php

use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Controllers\ProfileController;
use App\Controllers\LogInController;
use App\Controllers\SignUpController;
use App\Kernel\Router\Route;

return[
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/catalog', [CatalogController::class, 'index']),
    Route::get('/profile', [ProfileController::class, 'index']),
    Route::get('/logIn', [LogInController::class, 'index']),
    Route::get('/signUp', [SignUpController::class, 'index']),
    Route::get('/admin/catalog/add', [CatalogController::class, 'add']),
    Route::post('/admin/catalog/add', [CatalogController::class, 'store']),
];
<?php

use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Controllers\ProfileController;
use App\Controllers\LogInController;
use App\Controllers\RegisterController;
use App\Kernel\Router\Route;

return[
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/catalog', [CatalogController::class, 'index']),
    Route::get('/profile', [ProfileController::class, 'index']),
    Route::get('/admin/catalog/add', [CatalogController::class, 'add']),
    Route::post('/admin/catalog/add', [CatalogController::class, 'store']),
    Route::get('/register', [RegisterController::class, 'index']),
    Route::post('/register', [RegisterController::class, 'register']),
    Route::get('/logIn', [LogInController::class, 'index']),
    Route::post('/logIn', [LogInController::class, 'login']),
];
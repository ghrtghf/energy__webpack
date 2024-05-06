<?php

use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Controllers\ProfileController;
use App\Controllers\LogInController;
use App\Controllers\RegisterController;
use App\Kernel\Router\Route;
use App\Middleware\AuthMiddleware;

return[
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/catalog', [CatalogController::class, 'index']),
    Route::get('/profile', [ProfileController::class, 'index']),
    Route::get('/admin/catalog/add', [CatalogController::class, 'add']),
    Route::post('/admin/catalog/add', [CatalogController::class, 'store']),
    Route::get('/register', [RegisterController::class, 'index']),
    Route::post('/register', [RegisterController::class, 'register']),
    Route::get('/login', [LogInController::class, 'index']),
    Route::post('/login', [LogInController::class, 'login']),
    Route::post('/logout', [LogInController::class, 'logout']),

];
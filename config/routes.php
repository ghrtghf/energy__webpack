<?php

use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Controllers\ProfileController;
use App\Controllers\LogInController;
use App\Controllers\RegisterController;
use App\Controllers\AdminController;
use App\Controllers\StationController;
use App\Controllers\ModelController;
use App\Kernel\Router\Route;
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

return[
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/catalog', [CatalogController::class, 'index']),
    Route::get('/profile', [ProfileController::class, 'index']),
    Route::get('/admin', [AdminController::class, 'index']),
    Route::get('/admin/station/add', [StationController::class, 'create']),
    Route::get('/admin/station/update', [StationController::class, 'edit']),
    Route::post('/admin/station/update', [StationController::class, 'update']),
    Route::post('/admin/station/add', [StationController::class, 'store']),
    Route::post('/admin/station/destroy', [StationController::class, 'destroy']),
    Route::get('/admin/model/add', [ModelController::class, 'create']),
    Route::get('/admin/model/update', [ModelController::class, 'edit']),
    Route::post('/admin/model/update', [ModelController::class, 'update']),
    Route::post('/admin/model/add', [ModelController::class, 'store']),
    Route::post('/admin/model/destroy', [ModelController::class, 'destroy']),
    Route::get('/signUp', [RegisterController::class, 'index'], [GuestMiddleware::class]),
    Route::post('/signUp', [RegisterController::class, 'register']),
    Route::get('/login', [LogInController::class, 'index'], [GuestMiddleware::class]),
    Route::post('/login', [LogInController::class, 'login']),
    Route::post('/logout', [LogInController::class, 'logout']),
];
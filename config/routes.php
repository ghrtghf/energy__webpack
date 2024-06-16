<?php

use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Controllers\ProfileController;
use App\Controllers\LogInController;
use App\Controllers\HistoryController;
use App\Controllers\RegisterController;
use App\Controllers\CartController;
use App\Kernel\Router\Route;
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

return [
	Route::get('/', [HomeController::class, 'index']),
	Route::get('/cart', [CartController::class, 'index']),
	Route::get('/history', [HistoryController::class, 'index']),
	Route::get('/catalog', [CatalogController::class, 'index']),
	Route::get('/profile', [ProfileController::class, 'index']),
	Route::get('/admin/catalog/add', [CatalogController::class, 'add'], [AuthMiddleware::class]),
	Route::post('/admin/catalog/add', [CatalogController::class, 'store']),
	Route::get('/register', [RegisterController::class, 'index'], [GuestMiddleware::class]),
	Route::post('/register', [RegisterController::class, 'register']),
	Route::get('/login', [LogInController::class, 'index'], [GuestMiddleware::class]),
	Route::post('/login', [LogInController::class, 'login']),
	Route::post('/logout', [LogInController::class, 'logout']),
];

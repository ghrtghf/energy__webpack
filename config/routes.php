<?php

use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Controllers\ProfileController;
use App\Controllers\LogInController;
use App\Controllers\HistoryController;
use App\Controllers\RegisterController;
use App\Controllers\CartController;
use App\Controllers\ItemController;
use App\Controllers\AdminController;
use App\Controllers\StationController;
use App\Controllers\ModelController;
use App\Kernel\Router\Route;
use App\Middleware\AdminMiddleware;
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

return [
	Route::get('/', [HomeController::class, 'index']),
	Route::get('/cart', [CartController::class, 'index'], [AuthMiddleware::class]),
	Route::get('/history', [HistoryController::class, 'index'], [AuthMiddleware::class]),
	Route::get('/item', [ItemController::class, 'index']),
	Route::get('/catalog', [CatalogController::class, 'index']),
	Route::get('/profile', [ProfileController::class, 'index'], [AuthMiddleware::class]),
	Route::post('/profile', [ProfileController::class, 'update']),
	Route::get('/admin', [AdminController::class, 'index'], [AdminMiddleware::class]),
	Route::get('/admin/station/add', [StationController::class, 'create'], [AdminMiddleware::class]),
	Route::get('/admin/station/update', [StationController::class, 'edit'], [AdminMiddleware::class]),
	Route::post('/admin/station/update', [StationController::class, 'update'], [AdminMiddleware::class]),
	Route::post('/station/add', [StationController::class, 'store'], [AdminMiddleware::class]),
	Route::post('/admin/station/destroy', [StationController::class, 'destroy'], [AdminMiddleware::class]),
	Route::get('/admin/model/add', [ModelController::class, 'create'], [AdminMiddleware::class]),
	Route::get('/admin/model/update', [ModelController::class, 'edit'], [AdminMiddleware::class]),
	Route::post('/admin/model/update', [ModelController::class, 'update'], [AdminMiddleware::class]),
	Route::post('/model/add', [ModelController::class, 'store'], [AdminMiddleware::class]),
	Route::post('/model/destroy', [ModelController::class, 'destroy'], [AdminMiddleware::class]),
	Route::get('/signUp', [RegisterController::class, 'index'], [GuestMiddleware::class]),
	Route::post('/signUp', [RegisterController::class, 'register']),
	Route::get('/login', [LogInController::class, 'index'], [GuestMiddleware::class]),
	Route::post('/login', [LogInController::class, 'login']),
	Route::post('/logout', [LogInController::class, 'logout']),
	Route::get('/item', [CatalogController::class, 'show']),
	Route::post('/item', [CatalogController::class, 'store']),
	Route::post('/deleteItem', [CartController::class, 'delete']),
	Route::get('/plusItem', [CartController::class, 'plus']),
	Route::get('/minusItem', [CartController::class, 'minus']),
	Route::post('/updateStatus', [AdminController::class, 'updateStatus']),
	Route::post('/buy', [CartController::class, 'buy']),
];

<?php

use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Kernel\Router\Route;

return[
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/catalog', [CatalogController::class, 'index']),
    Route::get('/admin/catalog/add', [CatalogController::class, 'add']),
    Route::post('/admin/catalog/add', [CatalogController::class, 'store']),
];
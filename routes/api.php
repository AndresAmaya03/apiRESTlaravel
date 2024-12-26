<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 

Route::get('category', [CategoryController::class, 'getCategory']); 

Route::get('category/{id}', [CategoryController::class, 'getCategoryById']); 

Route::post('addCategory', [CategoryController::class, 'postCategory']);

Route::put('updateCategory/{id}', [CategoryController::class, 'putCategory']);

Route::delete('deleteCategory/{id}', [CategoryController::class, 'deleteCategory']);
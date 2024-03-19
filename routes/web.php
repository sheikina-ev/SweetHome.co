<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Главная страница
Route::get('/homes', function () {
    return view('home');
})->name('home');

// Маршруты для аутентификации и регистрации
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Маршруты для регистрации
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/products', [ProductController::class, 'index'])->name('products');
//Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::match(['get', 'post'], '/categories/new', [CategoryController::class, 'new']);
Route::match(['get', 'post'], '/products/new', [ProductController::class, 'new']);

Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:user'])->group(function () {
        // Маршруты доступные только пользователям
        Route::match(['get', 'post'], '/categories/{id}/update', [CategoryController::class, 'update']);
        Route::match(['get', 'post'], '/products/{id}/update', [ProductController::class, 'update']);

        Route::get('/categories/{id}/delete', [CategoryController::class, 'delete']);
        Route::get('/products/{id}/delete', [ProductController::class, 'delete']);
    });

    Route::middleware(['role:admin'])->group(function () {
        // Маршруты доступные только администраторам
        Route::match(['get', 'post'], '/admin/categories/{id}/update', [CategoryController::class, 'update']);
        Route::match(['get', 'post'], '/admin/products/{id}/update', [ProductController::class, 'update']);
        Route::get('/admin/categories/{id}/delete', [CategoryController::class, 'delete']);
        Route::get('/admin/products/{id}/delete', [ProductController::class, 'delete']);


    });
});
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profile', [UserController::class, 'updateProfile'])->name('profile');

// Просмотр списка пользователей
Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('auth');

Route::patch('/users/update/{id}', [UserController::class, 'update']);
// Обновление профиля пользователя








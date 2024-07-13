<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\NewController\NewController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TuanTVController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('clients.index');
})->name('home');
Route::get('/shop', function () {
    return view('clients.shop');
})->name('shop');
Route::get('/about', function () {
    return view('clients.about');
})->name('about');

// Lab 1

Route::controller(TuanTVController::class)
    ->name('tuantvph33227.')
    ->prefix('tuantvph33227')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/show', 'show')->name('show');
    });


// Lab 2

Route::controller(NewController::class)
    ->name('tintuc.')
    ->prefix('tintuc')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/xemnhieu', 'XemNhieu')->name('xemnhieu');
        Route::get('/moinhat', 'MoiNhat')->name('moinhat');
        Route::get('/{id}/theoloai', 'TheoLoai')->name('theoloai');
        Route::get('/{id}/show', 'show')->name('show');
    });


    // + 2 điểm asm 1


Route::controller(ProductController::class)
    ->name('products.')
    ->prefix('products')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/{id}/delete', 'delete')->name('delete');
        Route::get('getTop10', 'getTop10')->name('getTop10');
        Route::post('/store', 'store')->name('store');
    });


Route::controller(UserController::class)
    ->name('users.')
    ->prefix('users')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('getOver25', 'getOver25')->name('getOver25');
        Route::get('getActiveOver25', 'getActiveOver25')->name('getActiveOver25');
        Route::get('getAgeDown', 'getAgeDown')->name('getAgeDown');
        Route::get('getWithBirthday', 'getWithBirthday')->name('getWithBirthday');
    });


Route::controller(OrderController::class)
    ->name('orders.')
    ->prefix('orders')
    ->group(function () {
        Route::get('/getCompletedOrTotalOver100', 'getCompletedOrTotalOver100')->name('getCompletedOrTotalOver100');
        Route::get('/', 'getAll')->name('index');
        Route::get('updateProcessingToShipped', 'updateProcessingToShipped')->name('updateProcessingToShipped');
    });

Route::controller(CustomerController::class)
    ->name('customers.')
    ->prefix('customers')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('getNameWithJoin', 'getNameWithJoin')->name('getNameWithJoin');
    });

Route::controller(SaleController::class)
    ->name('sales.')
    ->prefix('sales')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('getInRange10005000', 'getInRange10005000')->name('getInRange10005000');
    });

Route::controller(EmployeeController::class)
    ->name('employees.')
    ->prefix('employees')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('getDepartmentIn123', 'getDepartmentIn123')->name('getDepartmentIn123');
    });

Route::controller(OrderItemController::class)
    ->name('orderitems.')
    ->prefix('orderitems')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('getTotalQuantitiesByProduct', 'getTotalQuantitiesByProduct')->name('getTotalQuantitiesByProduct');
    });


Route::controller(LogController::class)
    ->name('logs.')
    ->prefix('logs')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('deleteLogs', 'deleteLogs')->name('deleteLogs');
    });


Route::controller(NotifyController::class)
    ->name('notifies.')
    ->prefix('notifies')
    ->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/show', 'show')->name('wshow');
        Route::get('/{id}/newbycategory', 'newByCategory')->name('newbycategory');
    });
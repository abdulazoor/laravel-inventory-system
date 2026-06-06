<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('products', ProductController::class);

Route::get('/low-stock', function () {
    $products = \App\Models\Product::all();

    $lowStock = $products->filter(function ($product) {
        return $product->isLowStock();
    });

    return view('products.low_stock', compact('lowStock'));
});


/*
|--------------------------------------------------------------------------
| Sales Routes
|--------------------------------------------------------------------------
*/
Route::get('/sales', [SaleController::class, 'index']);
Route::get('/sales/create', [SaleController::class, 'create']);
Route::post('/sales', [SaleController::class, 'store']);
Route::get('/sales/{id}/invoice', [SaleController::class, 'invoice']);
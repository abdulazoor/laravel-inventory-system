<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalSales = Sale::count();
        $totalRevenue = Sale::sum('total_amount');

        $lowStockProducts = Product::whereColumn('quantity', '<=', 'low_stock_limit')
            ->count();

        $lowStockList = Product::whereColumn('quantity', '<=', 'low_stock_limit')
            ->get();

        return view('dashboard', compact(
            'totalProducts',
            'totalSales',
            'totalRevenue',
            'lowStockProducts',
            'lowStockList'
        ));
    }
}
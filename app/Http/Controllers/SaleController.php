<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleItem;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function create()
    {
        $products = Product::all();

        return view('sales.create', compact('products'));
    }

    public function index()
{
    $sales = Sale::latest()->get();

    return view('sales.index', compact('sales'));
}

    public function invoice($id)
{
    $sale = Sale::with('items.product')->findOrFail($id);

    return view('sales.invoice', compact('sale'));
}

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        
        // 🚨 STOCK VALIDATION (ADD HERE)
if ($product->quantity <= 0) {
    return back()->with(
        'error',
        $product->name . ' is currently out of stock.'
    );
}

if ($request->quantity > $product->quantity) {
    return back()->with(
        'error',
        'Only ' . $product->quantity .
        ' unit(s) of ' . $product->name .
        ' available in stock. Please reduce the quantity.'
    );
}

        $subtotal = $product->price * $request->quantity;

        $sale = Sale::create([
            'customer_name' => $request->customer_name,
            'customer_id' => $request->customer_id,
            'total_amount' => $subtotal,
        ]);

        SaleItem::create([
            'sale_id' => $sale->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'unit_price' => $product->price,
            'subtotal' => $subtotal,
        ]);

        $product->quantity -= $request->quantity;
        $product->save();

        return redirect('/sales/create')
            ->with('success', 'Sale completed successfully');
    }
}
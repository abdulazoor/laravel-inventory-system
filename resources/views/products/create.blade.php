@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Add New Product</h3>

    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">
        Back
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="code" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Low Stock Limit</label>
                <input type="number" name="low_stock_limit" class="form-control" value="5" required>
            </div>

            <button type="submit" class="btn btn-success w-100">
                Save Product
            </button>

        </form>

    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-0">Edit Product</h3>
            <small class="text-muted">Update product details safely</small>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm">
            ← Back
        </a>
    </div>

    <!-- Card -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-dark text-white">
            Product Information
        </div>

        <div class="card-body">

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text"
                               name="name"
                               value="{{ $product->name }}"
                               class="form-control"
                               required>
                    </div>

                    <!-- Code -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Product Code</label>
                        <input type="text"
                               name="code"
                               value="{{ $product->code }}"
                               class="form-control"
                               required>
                    </div>

                    <!-- Price -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Price (Rs.)</label>
                        <input type="number"
                               step="0.01"
                               name="price"
                               value="{{ $product->price }}"
                               class="form-control"
                               required>
                    </div>

                    <!-- Quantity -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="number"
                               name="quantity"
                               value="{{ $product->quantity }}"
                               class="form-control"
                               required>
                    </div>

                    <!-- Low stock -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Low Stock Limit</label>
                        <input type="number"
                               name="low_stock_limit"
                               value="{{ $product->low_stock_limit }}"
                               class="form-control"
                               required>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end gap-2 mt-3">

                    <a href="{{ route('products.index') }}" class="btn btn-light border">
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-success px-4">
                        Update Product
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
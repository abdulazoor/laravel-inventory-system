@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Create Sale</h3>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <a href="/sales" class="btn btn-secondary btn-sm">
        Back
    </a>
</div>

@if(session('success'))
    <p style="color:green;">
        {{ session('success') }}
    </p>
@endif

<div class="card shadow-sm">
    <div class="card-body">

<form method="POST" action="/sales">
    @csrf

    <div class="mb-3">
    <label class="form-label">Customer Name</label>
    <input type="text" name="customer_name" class="form-control" required>
</div>

    <div class="mb-3">
    <label class="form-label">Customer ID</label>
    <input type="text" name="customer_id" class="form-control">
</div>

    <div class="mb-3">
    <label class="form-label">Product</label>

    <select name="product_id" class="form-select">
        @foreach($products as $product)
            <option value="{{ $product->id }}">
                {{ $product->name }} (Stock: {{ $product->quantity }})
            </option>
        @endforeach
    </select>
</div>

   <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" name="quantity" class="form-control" required>
</div>

    <br><br>

    <button type="submit" class="btn btn-success w-100">
    Complete Sale
</button>
</form>
    </div>
</div>
@endsection
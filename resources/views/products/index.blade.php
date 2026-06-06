@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Product Management</h3>

    <a href="{{ route('products.create') }}" class="btn btn-success">
        + Add Product
    </a>
</div>


@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<br><br>

<div class="card shadow-sm">
    <div class="card-body">

<table class="table table-hover table-striped table-bordered bg-white shadow-sm">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Code</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Low Stock Limit</th>
        <th>Actions</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->code }}</td>
        <td>Rs. {{ $product->price }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->low_stock_limit }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
    </div>
</div>
@endsection
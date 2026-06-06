@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Low Stock Alerts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-danger mb-4">⚠ Low Stock Alerts</h2>

    @if($lowStock->count() == 0)
        <div class="alert alert-success">
            All products have sufficient stock.
        </div>
    @else

        <table class="table table-bordered table-striped">

            <thead class="table-dark">
                <tr>
                    <th>Product</th>
                    <th>Code</th>
                    <th>Current Stock</th>
                    <th>Minimum Required</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

            @foreach($lowStock as $product)

                <tr class="table-danger">
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->low_stock_limit }}</td>
                    <td><strong>LOW STOCK</strong></td>
                </tr>

            @endforeach

            </tbody>

        </table>

    @endif

</div>

</body>
</html>
@endsection
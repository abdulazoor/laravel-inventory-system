@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Inventory Dashboard</h2>

    <!-- STATS CARDS -->
    <div class="row">

        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5>Total Products</h5>
                    <h3>{{ $totalProducts }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5>Total Sales</h5>
                    <h3>{{ $totalSales }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <h5>Total Revenue</h5>
                    <h3>Rs. {{ number_format($totalRevenue, 2) }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5>Low Stock</h5>
                    <h3>{{ $lowStockProducts }}</h3>
                </div>
            </div>
        </div>

    </div>

    <!-- LOW STOCK TABLE -->
    <div class="card mt-4">
        <div class="card-header">
            <h5>Low Stock Products</h5>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Stock</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($lowStockList as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <span class="badge bg-danger">Low Stock</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>


</body>
</html>
@endsection
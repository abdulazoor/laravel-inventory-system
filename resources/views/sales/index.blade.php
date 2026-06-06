<!DOCTYPE html>
<html>
<head>
    <title>Sales History</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@extends('layouts.app')
@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-4">
        <h2>Sales History</h2>

        <a href="/sales/create" class="btn btn-success">
            New Sale
        </a>
    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

        <tr>
            <th>Invoice No</th>
            <th>Customer Name</th>
            <th>Customer ID</th>
            <th>Total Amount</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        </thead>

        <tbody>

        @foreach($sales as $sale)

        <tr>

            <td>
                INV-{{ str_pad($sale->id, 5, '0', STR_PAD_LEFT) }}
            </td>

            <td>
                {{ $sale->customer_name }}
            </td>

            <td>
                {{ $sale->customer_id }}
            </td>

            <td>
                Rs. {{ number_format($sale->total_amount, 2) }}
            </td>

            <td>
                {{ $sale->created_at->format('d-m-Y h:i A') }}
            </td>

            <td>
        <a href="/sales/{{ $sale->id }}/invoice" class="btn btn-primary btn-sm">
            View Invoice
        </a>
    </td>

        </tr>

        @endforeach

        </tbody>

    </table>

</div>
@endsection
</body>
</html>
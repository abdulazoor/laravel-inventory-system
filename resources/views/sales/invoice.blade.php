<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card">

        <div class="card-header bg-dark text-white">
            <h3>INVOICE</h3>
        </div>

        <div class="card-body">

            <h5>
                Invoice No:
                <strong>
                    INV-{{ str_pad($sale->id, 5, '0', STR_PAD_LEFT) }}
                </strong>
            </h5>

            <p><strong>Customer:</strong> {{ $sale->customer_name }}</p>
            <p><strong>Customer ID:</strong> {{ $sale->customer_id }}</p>
            <p><strong>Date:</strong> {{ $sale->created_at }}</p>

            <hr>

            <table class="table table-bordered">

                <thead class="table-dark">
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($sale->items as $item)

                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>Rs. {{ $item->unit_price }}</td>
                        <td>Rs. {{ $item->subtotal }}</td>
                    </tr>

                @endforeach

                </tbody>

            </table>

            <div class="text-end">
                <h4>
                    TOTAL:
                    <strong>Rs. {{ $sale->total_amount }}</strong>
                </h4>
            </div>

        </div>

    </div>

</div>

</body>
</html>
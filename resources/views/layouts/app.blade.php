<!DOCTYPE html>
<html>
<head>
    <title>Inventory System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: #1f2937;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: #cbd5e1;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #374151;
            color: white;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .topbar {
            background: white;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center mb-4">🛒INVENTORY & BILLING SYSTEM</h4>

    <a href="/dashboard">Dashboard</a>
    <a href="/products">Products</a>
    <a href="/products/create">Add Product</a>
    <a href="/sales">Sales</a>
    <a href="/sales/create">New Sale</a>
    <a href="/low-stock">Low Stock</a>
</div>

<!-- MAIN CONTENT -->
<div class="content">

    <div class="topbar">
        <h5>Inventory & Billing System</h5>
    </div>

    @yield('content')

</div>

</body>
</html>
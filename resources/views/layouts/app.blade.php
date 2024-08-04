<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Alat Tulis Kantor')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #5F9EA0;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            margin-bottom: 30px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn {
            margin-right: 5px;
        }
        .btn:last-child {
            margin-right: 0;
        }
        .form-label {
            font-weight: bold;
        }
        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            margin-bottom: 20px;
        }
        .form-container .form-group {
            margin-bottom: 15px;
        }
        .form-container .form-control {
            border-radius: 5px;
        }
        .form-container button[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Alat Tulis Kantor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('penerimaan_barang.index') }}">Penerimaan Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pengeluaran_barang.index') }}">Pengeluaran Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order_barang.index') }}">Order Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('suppliers.index') }}">Suppliers</a>
                    </li>
                    <!-- Add more navigation items as needed -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>
</html>

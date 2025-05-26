<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: #000;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #e2e6ea;
        }
        footer {
            text-align: center;
            padding: 10px;
            color: #666;
        }
    </style>

</head>
<body>
    <!-- ✅ Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">InvoiceApp</a>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <!-- ✅ Sidebar -->
            <div class="col-md-2 sidebar">
                <a href="{{ route('clients.index') }}">🧑‍💼 Klien</a>
                <a href="{{ route('users.index') }}">👤 Pengguna</a>
                <a href="{{ route('invoices.index') }}">🧾 Invoice</a>
            </div>

            <!-- ✅ Main Content -->
            <div class="col-md-10 p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- ✅ Footer -->
    {{-- <footer class="bg-light mt-4">
        <p>© {{ date('Y') }} InvoiceApp. All rights reserved.</p>
    </footer> --}}

    <!-- ✅ Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>
</html>

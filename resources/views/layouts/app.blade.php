<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Todo App')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
        }
    </style>
</head>

<body>
    <!-- Navigasi -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> Todo list Usk</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/todos') }}">List Todo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/todos/create') }}">Tambah Todo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Konten Utama -->
    <main class="container">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="text-center py-3 mt-5 text-muted">
        <small>&copy; {{ date('Y') }} Todo list Usk. kgs m novian yudistira.</small>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
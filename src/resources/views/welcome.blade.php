<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Gramedia APSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f7f7f7, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 1rem;
        }
        .footer {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="card shadow p-5 text-center w-100" style="max-width: 700px;">
            <h1 class="mb-4">📚 Selamat Datang di <strong>Gramedia APSI</strong></h1>
            <p class="lead">Sistem administrasi untuk manajemen buku, laporan, dan pengguna secara efisien.</p>

            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="btn btn-primary mt-4 px-5 py-2">Masuk ke Dashboard</a>
            @elseif (Route::has('filament.admin.pages.dashboard'))
                <a href="{{ route('filament.admin.pages.dashboard') }}" class="btn btn-primary mt-4 px-5 py-2">Masuk ke Admin</a>
            @else
                <p class="text-muted mt-4">Login belum tersedia.</p>
            @endif

            <hr class="my-4">

            <h5 class="mb-3">👥 Anggota Kelompok:</h5>
            <ul class="list-unstyled text-start mx-auto" style="max-width: 400px;">
                <li>1. Virya Agung Wibawa <span class="text-muted">(20230801009)</span></li>
                <li>2. Elfan Pradita Rusmin <span class="text-muted">(20230801068)</span></li>
                <li>3. Eka Jiparolim <span class="text-muted">(20230801078)</span></li>
                <li>4. Faiz Izaz Fathoni <span class="text-muted">(20230801081)</span></li>
                <li>5. Dinda Claudya <span class="text-muted">(20230801090)</span></li>
                <li>6. Muhammad Arifin Sulistiono <span class="text-muted">(20230801095)</span></li>
            </ul>
        </div>

        <footer class="mt-5 text-center footer">
            &copy; {{ now()->year }} Gramedia APSI - Kelompok 1.
        </footer>
    </div>
</body>
</html>

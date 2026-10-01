<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBlog - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">🎬 CineBlog</a>
            <div>
                <a class="nav-link d-inline text-warning px-2" href="{{ route('homepage') }}">Home</a>
                <a class="nav-link d-inline text-light px-2" href="{{ route('chi.siamo') }}">Chi Siamo</a>
                <a class="nav-link d-inline text-light px-2" href="{{ route('servizi') }}">Servizi</a>
                <a class="nav-link d-inline text-light px-2" href="{{ route('blog.index') }}">Blog Cinema</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container my-5 text-center">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
            <h1 class="display-4 fw-bold text-dark">Benvenuti su CineBlog 🎬</h1>
            <p class="fs-4 text-secondary my-3">Il blog ufficiale dedicato alla settima arte, recensioni e approfondimenti imperdibili.</p>
            <a href="{{ route('blog.index') }}" class="btn btn-dark btn-lg mt-3">Esplora il Blog</a>
        </div>
    </div>

</body>
</html>
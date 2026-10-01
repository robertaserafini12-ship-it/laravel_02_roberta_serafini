<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">🎬 CineBlog</a>
            <div>
                <a class="nav-link d-inline text-light px-2" href="{{ route('homepage') }}">Home</a>
                <a class="nav-link d-inline text-warning px-2" href="{{ route('blog.index') }}">Torna al Blog</a>
            </div>
        </div>
    </nav>

    <!-- Contenuto Articolo -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow border-0 p-4">
                    <h1 class="fw-bold mb-3 text-dark">{{ $article['title'] }}</h1>
                    <h4 class="text-muted h6 mb-4">A cura di: <span class="fw-semibold text-dark">{{ $article['director'] }}</span></h4>
                    <hr>
                    <p class="fs-5 text-secondary lh-lg mt-3">{{ $article['content'] }}</p>
                    <div class="mt-4">
                        <a href="{{ route('blog.index') }}" class="btn btn-dark">← Torna alla lista articoli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
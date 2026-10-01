<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - CineBlog</title>
    <!-- Includiamo Bootstrap per uno stile pulito e moderno -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">🎬 CineBlog</a>
            <div>
                <a class="nav-link d-inline text-light px-2" href="{{ route('homepage') }}">Home</a>
                <a class="nav-link d-inline text-light px-2" href="{{ route('chi.siamo') }}">Chi Siamo</a>
                <a class="nav-link d-inline text-light px-2" href="{{ route('servizi') }}">Servizi</a>
                <a class="nav-link d-inline text-warning px-2" href="{{ route('blog.index') }}">Blog Cinema</a>
            </div>
        </div>
    </nav>

    <!-- Contenuto Principale -->
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark">Tutti gli Articoli sul Cinema</h1>
            <p class="text-muted">Esplora le ultime recensioni e approfondimenti sulla settima arte</p>
        </div>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title h5 fw-bold text-primary">{{ $article['title'] }}</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Regista: {{ $article['director'] }}</h6>
                            <p class="card-text text-secondary flex-grow-1">{{ Str::limit($article['content'], 80) }}</p>
                            <a href="{{ route('blog.show', ['id' => $article['id']]) }}" class="btn btn-outline-dark btn-sm mt-auto">Leggi l'articolo completo</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Siamo - CineBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">🎬 CineBlog</a>
            <div>
                <a class="nav-link d-inline text-light px-2" href="{{ route('homepage') }}">Home</a>
                <a class="nav-link d-inline text-warning px-2" href="{{ route('chi.siamo') }}">Chi Siamo</a>
                <a class="nav-link d-inline text-light px-2" href="{{ route('servizi') }}">Servizi</a>
                <a class="nav-link d-inline text-light px-2" href="{{ route('blog.index') }}">Blog Cinema</a>
            </div>
        </div>
    </nav>

    <!-- Contenuto Chi Siamo / Cinema Atlantic -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow border-0 p-5 bg-white">
                    <h1 class="fw-bold mb-4 text-dark text-center">Chi Siamo &bull; Cinema Atlantic 🏛️</h1>
                    
                    <p class="fs-5 text-secondary lh-lg">
                        Nato dalla passione viscerale per la settima arte, il <strong>Cinema Atlantic</strong> è molto più di una semplice sala cinematografica: è un punto di riferimento storico per tutti gli amanti del grande schermo, un luogo in cui le storie prendono vita e le emozioni si amplificano nel buio della sala.
                    </p>
                    
                    <p class="fs-5 text-secondary lh-lg">
                        Attraverso questo CineBlog, il nostro team unisce l'atmosfera e la tradizione del Cinema Atlantic alle recensioni digitali, portando riflessioni profonde, approfondimenti sui registi e analisi cinematografiche direttamente a tutti gli appassionati.
                    </p>

                    <div class="mt-4 text-center">
                        <a href="{{ route('homepage') }}" class="btn btn-dark">← Torna alla Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
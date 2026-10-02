<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBlog - Tutti gli Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h1 class="mb-4 text-center">Tutti i Film & Articoli del Blog</h1>
        
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title h5 fw-bold">{{ $article['title'] }}</h3>
                            <p class="card-text text-secondary">{{ $article['content'] }}</p>
                            <!-- Link che punta alla rotta parametrica del singolo articolo -->
                            <a href="{{ route('blog.show', ['id' => $article['id']]) }}" class="btn btn-dark btn-sm">Leggi di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('homepage') }}" class="btn btn-outline-secondary">Torna alla Home</a>
        </div>
    </div>

</body>
</html>
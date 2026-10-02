<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBlog - Dettaglio Articolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm p-4">
                    <h1 class="mb-3 text-primary">{{ $article['title'] }}</h1>
                    <hr>
                    <p class="lead text-secondary mt-3">{{ $article['content'] }}</p>
                    
                    <div class="mt-4">
                        <a href="{{ route('blog.index') }}" class="btn btn-dark">Torna alla lista articoli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
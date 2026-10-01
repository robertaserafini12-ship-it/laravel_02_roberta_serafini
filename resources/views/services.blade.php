<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servizi e Spettacoli - Cinema Atlantic</title>
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
                <a class="nav-link d-inline text-warning px-2" href="{{ route('servizi') }}">Servizi & Spettacoli</a>
                <a class="nav-link d-inline text-light px-2" href="{{ route('blog.index') }}">Blog Cinema</a>
            </div>
        </div>
    </nav>

    <!-- Contenuto Principale -->
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark">Programmazione & Servizi 🎟️</h1>
            <p class="text-muted">Scopri gli orari delle proiezioni e le attività esclusive del Cinema Atlantic</p>
        </div>

        <!-- Sezione Orari e Spettacoli (Tabella) -->
        <div class="card shadow-sm border-0 mb-5 p-4 bg-white">
            <h2 class="h4 fw-bold text-dark mb-4">🕒 Orari Spettacoli in Sala (Questa Settimana)</h2>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Film / Evento</th>
                            <th>Genere</th>
                            <th>Orari Proiezioni</th>
                            <th>Sala</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-semibold">Oltre le Stelle: Ritorno a Utopia</td>
                            <td>Fantascienza</td>
                            <td>16:30 - 19:15 - 21:45</td>
                            <td>Sala 1 (Dolby Atmos)</td>
                        </tr>
                        <tr>
                            <td class="fw-semibold">Note nel Buio: La Storia di un Maestro</td>
                            <td>Biografico / Musicale</td>
                            <td>17:00 - 19:30 - 22:00</td>
                            <td>Sala 2</td>
                        </tr>
                        <tr>
                            <td class="fw-semibold">Il Mistero di Hollywood (Cineforum)</td>
                            <td>Thriller / Noir</td>
                            <td>18:15 - 21:15</td>
                            <td>Sala 3 (V.O. Sottotitolata)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Servizi Aggiuntivi (Card) -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 p-3 text-center">
                    <div class="card-body">
                        <div class="display-4 mb-3">🍿</div>
                        <h3 class="card-title h5 fw-bold text-dark">Area Gold & Lounge</h3>
                        <p class="card-text text-secondary mt-3">Poltrone reclinabili in ecopelle, servizio bar direttamente al posto e degustazioni di vini prima del film.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 p-3 text-center">
                    <div class="card-body">
                        <div class="display-4 mb-3">🎓</div>
                        <h3 class="card-title h5 fw-bold text-dark">Masterclass di Regia</h3>
                        <p class="card-text text-secondary mt-3">Workshop intensivi pomeridiani dedicati ai segreti della sceneggiatura e del montaggio cinematografico.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 p-3 text-center">
                    <div class="card-body">
                        <div class="display-4 mb-3">✍️</div>
                        <h3 class="card-title h5 fw-bold text-dark">Recensioni & Press</h3>
                        <p class="card-text text-secondary mt-3">Spazi editoriali su misura per festival indipendenti e anteprime esclusive per la stampa locale.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('homepage') }}" class="btn btn-dark">← Torna alla Home</a>
        </div>
    </div>

</body>
</html>
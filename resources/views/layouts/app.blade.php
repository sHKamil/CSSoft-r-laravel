<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>
<body style='font-family: "Ubuntu", sans-serif;'>
    <nav style="background-color: #eee;" class="navbar navbar-expand-lg">
        <div class="container-fluid gap-md-0 gap-lg-5">
            <span class="text-break "><a class="navbar-brand" href="/">Kamil Hałasa</a><a class="navbar-brand" href="/">Rekrutacja CSSoft 2024</a></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="/pracownik">Dodaj pracownika</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/firma">Dodaj firmę</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

<footer style="background-color: #eee;" class="footer mt-auto py-3">
    <div class="container text-muted d-flex justify-content-center align-items-center gap-4 flex-column flex-md-row " bis_skin_checked="1">
        <span>
            Copyright - &copy {{ env('AUTHOR_INITIALS') }}
        </span>
        <span>
            Wersja PHP: {{ PHP_VERSION }}
        </span>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
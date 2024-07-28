<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Bootstrap App')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://raw.githubusercontent.com/jsvine/nbpreview/master/css/notebook.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor/katex.min.css" />
    <link rel="stylesheet" href="css/vendor/prism.css" />
    <link rel="stylesheet" href="css/notebook.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">NaiveBayes Resa</a>
        @if(auth()->user())
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/training-data') }}">Data Training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}">Keluar</a>
                </li>
            </ul>
        </div>
        @endif
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/vendor/es5-shim.min.js"></script>
    <script src="js/vendor/marked.min.js"></script>
    <script src="js/vendor/purify.min.js"></script>
    <script src="js/vendor/ansi_up.min.js"></script>
    <script src="js/vendor/prism.min.js"></script>
    <script src="js/vendor/katex.min.js"></script>
    <script src="js/vendor/katex-auto-render.min.js"></script>
    <script src="js/vendor/notebook.min.js"></script>
    @stack('scripts')
</body>
</html>
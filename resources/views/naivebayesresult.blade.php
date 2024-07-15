<!DOCTYPE html>
<html>
<head>
    <title>Naive Bayes Result</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Hasil Naive Bayes</h1>
        <div class="alert alert-info text-center" role="alert">
            <b>{{ $text }}</b> <br>
            Hasil Sentimen: {{ $result }}
        </div>
        <div class="text-center">
            <a href="{{ route('showForm') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Naive Bayes Classifier</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Klasifikasi Naive Bayes</h1>
        <form action="{{ route('handleSubmit') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="text">Masukkan Teks:</label>
                <input type="text" id="text" name="text" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>
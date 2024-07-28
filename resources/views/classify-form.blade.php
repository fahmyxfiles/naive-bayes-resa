<!-- resources/views/welcome.blade.php -->
@extends('layout')

@section('title', 'Naive Bayes Resa')

@section('content')
    <div class="jumbotron">
        <h1 class="text-center display-4">Klasifikasi Naive Bayes</h1>
        <form action="{{ url('/predict') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="text">Masukkan Teks:</label>
                <input type="text" id="text" name="text" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
@endsection
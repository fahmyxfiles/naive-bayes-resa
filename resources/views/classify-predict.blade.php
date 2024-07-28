<!-- resources/views/welcome.blade.php -->
@extends('layout')

@section('title', 'Hasil Klasifikasi')

@section('content')
    <div class="jumbotron">
        <h1 class="text-center display-4">Hasil Naive Bayes</h1>
        <div class="alert alert-info text-center" role="alert">
            <b>{{ $text }}</b> <br>
            Hasil Sentimen: {{ $result }}
        </div>
        <div class="text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
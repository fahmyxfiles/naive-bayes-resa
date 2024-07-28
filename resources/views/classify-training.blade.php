<!-- resources/views/welcome.blade.php -->
@extends('layout')

@section('title', 'Naive Bayes Resa')

@section('content')
    <div class="jumbotron p-4">
        <h1 class="text-center display-4">Training Data</h1>
        <p>Training Data berikut di render dari file Jupyter Notebook di folder public/training.ipynb</p>
    </div>
    <div id="training-data">
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var data = {!!file_get_contents(public_path('data.ipynb'))!!};
            var notebook = nb.parse(data);
            var rendered = notebook.render();
            $("#training-data").append(rendered);
            Prism.highlightAll();
        });
    </script>
@endpush
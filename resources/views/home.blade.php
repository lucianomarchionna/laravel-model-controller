@extends('layouts.app')

@section('content')
<div class="single-movie">
    @foreach ($movies as $movie)
        <div class="movie">
            <p>TITOLO: {{ $movie['title'] }}</p>
            <p>TITOLO ORIGINALE: {{ $movie['original_title'] }}</p>
            <p>NAZIONALIÁ: {{ $movie['nationality'] }}</p>
            <p>DATA DI USCITA: {{ $movie['date'] }}</p>
            <p>VOTO: {{ $movie['vote'] }}</p>
        </div>     
    @endforeach
</div>
@endsection

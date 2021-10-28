@extends('layouts.app')

@section('content')
<div class="card">
    @foreach ($movies as $movie)
        <p>{{ $movie['title'] }}</p>
    @endforeach
</div>
@endsection

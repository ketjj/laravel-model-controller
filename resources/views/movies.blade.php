@extends('layouts.main')

@section('content')

<div class="k_container">
  @foreach ( $movies as $movie)
  <div class="k_card my-5">
    <h4>Titolo: {{ $movie->title }}</h4>
    <h5>Titolo Originale: {{ $movie->original_title }}</h5>
    <h5>L'Anno: {{ $movie->date }}</h5>
    <h5>Voto: {{ $movie->vote }}</h5>
  </div>
    
  @endforeach
</div>

@endsection

@section('title', 'movies')
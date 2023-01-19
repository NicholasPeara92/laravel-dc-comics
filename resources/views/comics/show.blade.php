@extends('layouts.main')

@section('page-content')
  <div class="container">
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <div>Serie: {{ $comic->series }}</div>
    <div>Data di pubblicazione: {{ $comic->sale_date }}</div>
    <div>Genere: {{ $comic->type }}</div>
    <div>Prezzo: {{ $comic->price }} €</div>
    <p>{{ $comic->description }}</p>
    <a href="{{ route('comics.index') }}">Torna alla lista</a>

  </div>
@endsection

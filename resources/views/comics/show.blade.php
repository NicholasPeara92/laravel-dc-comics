@extends('layouts.main')

@section('page-content')
  <div class="container">
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <p>{{ $comic->description }}</p>
    <a href="{{ route('comics.index') }}">Torna alla lista</a>

  </div>
@endsection

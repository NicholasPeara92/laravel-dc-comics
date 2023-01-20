@extends('layouts.main')

@section('page-content')
  <div class="container">
    <h1>Modifica: {{ $comic->title }}</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Titolo*</label>
        <input type="text" class="form-control" id="title" name="title" maxlength="50" value="{{ $comic->title }}"
          required>
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie*</label>
        <input type="text" class="form-control" id="series" name="series" maxlength="50"
          value="{{ $comic->series }}" required>
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data Vendita*</label>
        <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}"
          required>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipo*</label>
        <input type="text" class="form-control" id="type" name="type" maxlength="30"
          value="{{ $comic->type }}" required>
      </div>
      <div class=" mb-3">
        <label for="price" class="form-label">Prezzo*</label>
        <input type="number" class="form-control" id="price" name="price" step="any" min="3.99"
          max="99.99" {{ $comic->price }} required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione*</label>
        <textarea name="description" id="desciption" class="form-control" cols="30" rows="5" required>{{ $comic->description }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Salva</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
  </div>
@endsection

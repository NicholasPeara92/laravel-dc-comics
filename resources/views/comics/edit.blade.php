@extends('layouts.main')

@section('page-content')
  <div class="container">
    <h1>Modifica: {{ $comic->title }}</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Titolo*</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
          maxlength="50" value="{{ old('title', $comic->title) }}" required>
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie*</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
          maxlength="50" value="{{ old('series', $comic->series) }}" required>
        @error('series')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data Vendita*</label>
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
          id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
        @error('sale_date')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipo*</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
          maxlength="30" value="{{ old('type', $comic->type) }}" required>
        @error('type')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class=" mb-3">
        <label for="price" class="form-label">Prezzo*</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
          step="any" min="3.99" max="99.99" value="{{ old('price', $comic->price) }}" required>
        @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione*</label>
        <textarea name="description" id="desciption" class="form-control @error('description') is-invalid @enderror"
          cols="30" rows="5" required>{{ old('description', $comic->description) }}</textarea>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Salva</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
  </div>
@endsection

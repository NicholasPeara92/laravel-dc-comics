@extends('layouts.main')

@section('page-content')
  <div class="container">
    <h1>Aggiungi nuovo comic</h1>
    <form action="{{ route('comics.store') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Titolo*</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
          maxlength="50" required value="{{ old('title') }}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie*</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
          maxlength="50" required value="{{ old('series') }}">
        @error('series')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data Vendita*</label>
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
          id="sale_date" required value="{{ old('sale_date') }}">
        @error('sale_date')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipo*</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
          maxlength="30" required value="{{ old('type') }}">
        @error('type')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class=" mb-3">
        <label for="price" class="form-label">Prezzo*</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
          step="any" min="3.99" max="99.99" required value="{{ old('price') }}">
        @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione*</label>
        <textarea name="description" id="desciption" class="form-control @error('description') is-invalid @enderror"
          cols="30" rows="5" required>{{ old('description') }}</textarea>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Salva</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
  </div>
@endsection

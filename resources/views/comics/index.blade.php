@extends('layouts.main')

@section('page-content')
  <div class="container">
    <h1>Lista comics</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Titolo</th>
          <th scope="col">Serie</th>
          <th scope="col">Data pubblicazione</th>
          <th scope="col">Tipo</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Azioni</th>

        </tr>
      </thead>
      <tbody>

        @foreach ($comics as $comic)
          <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
            <td>{{ $comic->price }}</td>
            <td>
              <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vedi</a>
              <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
              <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi nuovo comic</a>
  </div>
@endsection

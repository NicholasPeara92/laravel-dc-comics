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
              <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Cancella
              </button>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi nuovo comic</a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cancella comic</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Sei sicuro di voler cancellare questo prodotto?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger ms-2">Confermo</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

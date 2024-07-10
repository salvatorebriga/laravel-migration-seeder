@extends('layouts.app')

@section('main')
  <h2>Lista Treni</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Azienda</th>
          <th>Partenza</th>
          <th>Arrivo</th>
          <th>Codice Treno</th>
          <th>Numero Carrozze</th>
          <th>In Orario</th>
          <th>Cancellato</th>
          <th>Partenza</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trains as $train)
          <tr>
            <td>{{ $train->azienda }}</td>
            <td>{{ $train->stazione_di_partenza }}</td>
            <td>{{ $train->stazione_di_arrivo }}</td>
            <td>{{ $train->codice_treno }}</td>
            <td>{{ $train->numero_carrozze }}</td>
            <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
            <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
            <td>{{ $train->partenza }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

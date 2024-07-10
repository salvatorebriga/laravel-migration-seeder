@extends('layouts.app')

@section('main')
  <main>
    <h2 class="mb-3"> Treni</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Azienda</th>
            <th>Parte da</th>
            <th>Arrivo</th>
            <th>Orario partenza</th>
            <th>Orario di arrivo</th>
            <th>Codice Treno</th>
            <th>Carrozze</th>
            <th>In Orario?</th>
            <th>Cancellato?</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trains as $train)
            <tr onclick="window.location='{{ route('show', $train->id) }}'">
              <td>{{ $train->azienda }}</td>
              <td>{{ $train->stazione_di_partenza }}</td>
              <td>{{ $train->stazione_di_arrivo }}</td>
              <td>{{ $train->orario_di_partenza }}</td>
              <td>{{ $train->orario_di_arrivo }}</td>
              <td>{{ $train->codice_treno }}</td>
              <td>{{ $train->numero_carrozze }}</td>
              <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
              <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
@endsection

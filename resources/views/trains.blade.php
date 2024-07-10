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
            <th class="text-primary">Edit</th>
            <th class="text-danger">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trains as $train)
            <tr>
              <td>{{ $train->azienda }}</td>
              <td>{{ $train->stazione_di_partenza }}</td>
              <td>{{ $train->stazione_di_arrivo }}</td>
              <td>{{ $train->orario_di_partenza }}</td>
              <td>{{ $train->orario_di_arrivo }}</td>
              <td>{{ $train->codice_treno }}</td>
              <td>{{ $train->numero_carrozze }}</td>
              <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
              <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
              <td><i class="fas fa-pencil"></i><span class="blue">Edit</span></td>
              <td><i class="fas fa-trash-can"></i><span class="red">Delete</span></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
@endsection

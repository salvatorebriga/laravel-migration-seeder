@extends('layouts.app')

@section('main')
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

    @foreach ($trains as $train)
      <div class="col">
        <div class="card mb-5 p-4">
          <p><strong>Azienda: </strong> {{ $train->azienda }}</p>
          <p><strong>Partenza:</strong> {{ $train->stazione_di_partenza }}</p>
          <p><strong>Arrivo:</strong> {{ $train->stazione_di_arrivo }}</p>
          <p><strong>Codice Treno:</strong> {{ $train->codice_treno }}</p>
          <p><strong>Numero Carrozze:</strong> {{ $train->numero_carrozze }}</p>
          <p><strong>In Orario:</strong> {{ $train->in_orario ? 'Sì' : 'No' }}</p>
          <p><strong>Cancellato:</strong> {{ $train->cancellato ? 'Sì' : 'No' }}</p>
          <p><strong>Creato il:</strong> {{ $train->created_at }}</p>
          <p><strong>Aggiornato il:</strong> {{ $train->updated_at }}</p>
        </div>
      </div>
    @endforeach
    </ul>
  </div>
@endsection

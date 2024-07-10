@extends('layouts.app')

@section('main')
  <main>
    <h2 class="mb-3">Dettaglio Treno</h2>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Treno: {{ $train->codice_treno }}</h5>
        <p class="card-text"><strong>Azienda:</strong> {{ $train->azienda }}</p>
        <p class="card-text"><strong>Parte da:</strong> {{ $train->stazione_di_partenza }}</p>
        <p class="card-text"><strong>Arrivo:</strong> {{ $train->stazione_di_arrivo }}</p>
        <p class="card-text"><strong>Orario partenza:</strong> {{ $train->orario_di_partenza }}</p>
        <p class="card-text"><strong>Orario di arrivo:</strong> {{ $train->orario_di_arrivo }}</p>
        <p class="card-text"><strong>Carrozze:</strong> {{ $train->numero_carrozze }}</p>
        <p class="card-text"><strong>In Orario?</strong> {{ $train->in_orario ? 'Sì' : 'No' }}</p>
        <p class="card-text"><strong>Cancellato?</strong> {{ $train->cancellato ? 'Sì' : 'No' }}</p>
      </div>
    </div>
    <a href="{{ route('trains') }}" class="btn btn-primary mt-3">Torna alla lista</a>
  </main>
@endsection

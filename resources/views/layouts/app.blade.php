<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
  </head>

  <body class="bg-dark text-light">
    {{-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="Paperella Laravel Template"> --}}

    <div class="container text-center">
      <header class="py-3">
        <h1>Treni</h1>
      </header>
      <main>
        @yield('main')
      </main>
      <footer>
        La visualizzazione è determinata dalla data odierna globale (utilizzando Carbon), quindi dopo qualche giorno
        diciamo che non verrà
        visualizzato nessun dato per ovvi motivi
      </footer>
    </div>



  </body>

</html>

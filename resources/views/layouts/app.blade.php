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

    <div class="container-full p-5">
      @include('shared.header')

      @yield('main')

      @include('shared.footer')
    </div>



  </body>

</html>

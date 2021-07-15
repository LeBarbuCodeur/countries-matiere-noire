<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>European Countries</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />
  </head>

  <body>  
    <div id="app">
      <app></app>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
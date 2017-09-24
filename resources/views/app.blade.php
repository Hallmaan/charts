<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    </head>
    <body>
      <div class="flex-center position-ref full-height">
        <div class="content">
          @yield('content')
        </div>
      </div>
    </body>
    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    @yield('asset_footer')
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      @yield('site title')
    </title>
    <link rel="shortcut icon" href="{!! asset('public/favicon.ico') !!}">
    <!-- bootstrap css -->
    <link href="{!! asset('public/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{!! asset('public/fontawesome/css/all.css') !!}">
    <!-- our css -->
    <link rel="stylesheet" href="{!! asset('public/css/global.css') !!}">
  </head>
  <body>
    @include('layouts.header')
    <main>
      @yield('content')
    </main>
    <footer>
      @extends('layouts.footer')
    </footer>
    <!-- bootstrap js -->
    <script src="{!! asset('public/bootstrap/js/bootstrap.bundle.min.js') !!}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- fontawesome js -->
    <script src="{!! asset('public/fontawesome/js/all.js') !!}"></script>
    <!-- multi menu js -->
    <script src="{!! asset('public/bootstrap/js/script.js') !!}"></script>
  </body>
</html>


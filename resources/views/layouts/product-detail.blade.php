<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      @yield('site title')
    </title>
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}">
    <!-- bootstrap css -->
    <link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{asset('public/fontawesome/css/all.css')}}">
    <!-- our css -->
    <link rel="stylesheet" href="{{asset('public/css/global.css')}}">
    <!-- image zoom css -->
    <link rel="stylesheet" href="{{asset('public/image-zoom/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/image-zoom/css/jqueryscripttop.css')}}">
  </head>
  <body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      @include('layouts.header')
    <main>
      @yield('productDetail')
      @yield('relatedProduct')
    </main>
    <footer>
      @extends('layouts.footer')
    </footer>
    <!-- bootstrap js -->
    <script src="{{asset('public/bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- fontawesome js -->
    <script src="{{asset('public/fontawesome/js/all.js')}}"></script>
    <!-- image zoom js -->
    <script src="{{asset('public/image-zoom/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/image-zoom/js/zoom-image.js')}}"></script>
    <script src="{{asset('public/image-zoom/js/main.js')}}"></script>
  </body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('css/app.css') }}" >
        <link rel="stylesheet" href="{{ url('css/bts_edits.css') }}" >
        <link rel="stylesheet" href="{{ url('css/style.css') }}" >
        <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}" >
        <title>مجمعة المواقع</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
      <nav class="navbar-expand-lg navbar navbar-dark bg-dark">
<a class="navbar-brand" href="/"> مجمعة المواقع </a>
<button class="navbar-toggler" id="nav-icon2" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class=""></span>
  <span class=""></span>
  <span class=""></span>
  <span class=""></span>
  <span class=""></span>
  <span class=""></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <ul class="navbar-nav">
    <li class="nav-item active">
    <a  class="nav-link" href="/">الرئيسية <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link">  اتصل بنا <i class="fa fa-phone" aria-hidden="true"></i> </a>
    </li>
    @guest
    <li class="nav-item">
      <a class="nav-link" href="/login">دخول  <i class="fa fa-sign-in" aria-hidden="true"></i> </a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link"href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"> خروج </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
     </form>
    </li>
    @endguest
  </ul>
</div>
</nav>

@yield('content')

  <script src=" {{url('js/app.js') }} "> </script>
  <script src=" {{url('js/run.js') }} "> </script>
    </body>
</html>

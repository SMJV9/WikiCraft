<!DOCTYPE html>
<html>
  <head>
  @vite(['resources/css/app.css','resources/js/app.css'])
    <title>@yield('tittle')</title>
    <link rel="icon" href="{{ asset('images/VVKTlogo.jpg') }}">
    
  </head>
  <body>
  @yield('content')
 
  <div class="menu"> 
     <footer>
        <p>© Todos los derechos reservados</p>
    </footer>
  </body>
</html>

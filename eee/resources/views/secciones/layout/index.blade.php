<!doctype html>
<html lang="en">
  <head>
   @include('secciones.layout.head')
   <script src="{{ asset('GD/js/script.js') }}"></script>
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{ url('GD/img/gdrobot.png') }}" type='image/x-icon'>
</head>
  <body>
    
    @include('secciones.layout.navbar')
 

   


    
    @yield('content')

    @include('secciones.layout.footer')


   
      
  </body>
</html>

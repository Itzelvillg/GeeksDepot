<!doctype html>
<html lang="en">
  <head>
   @include('admin.layout.head')
   
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{ url('GD/img/gdrobot.png') }}" type='image/x-icon'>
</head>
  <body>
    
    @include('admin.layout.navbar')
 

   


    
    @include('admin.layout.main')

    @include('admin.layout.footer')


   
      
  </body>
</html>

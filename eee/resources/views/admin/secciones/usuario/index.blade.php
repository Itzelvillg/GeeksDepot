<!DOCTYPE html>
<html lang="en">
<head>

  @extends('admin.layout.index')
  <!-- Required meta tags -->

  @section('title','Usuario')
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>
</head>

<body>
@section('content')
 
@include('admin.secciones.usuario.create')
@include('admin.secciones.usuario.data')    



@endsection

  
</body>
</html>
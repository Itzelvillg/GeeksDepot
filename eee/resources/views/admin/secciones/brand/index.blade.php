<!DOCTYPE html>
<html lang="en">
<head>

  @extends('admin.layout.index')
  <!-- Required meta tags -->

  @section('title','Brand')
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>
</head>

<body>
@section('content')
 
@include('admin.secciones.brand.create')
@include('admin.secciones.brand.data')    


@endsection

  
</body>
</html>
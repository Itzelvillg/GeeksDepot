<!DOCTYPE html>
<html lang="en">
<head>

  @extends('admin.layout.index')
  <!-- Required meta tags -->

  @section('title','Product')
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>
</head>

<body>
@section('content')

@include('admin.secciones.product.create')
@include('admin.secciones.product.data')    



@endsection

  
</body>
</html>
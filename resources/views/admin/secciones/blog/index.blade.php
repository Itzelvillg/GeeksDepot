<!DOCTYPE html>
<html lang="en">
<head>

  @extends('admin.layout.index')
  <!-- Required meta tags -->

  @section('title','Blog')
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>
</head>

<body>
@section('content')
@include('admin.secciones.blog.create')
@include('admin.secciones.blog.data')

@endsection

  
</body>
</html>
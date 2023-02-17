<!DOCTYPE html>
<html lang="en">
<head>

  @extends('admin.layout.index')
  <!-- Required meta tags -->

  @section('title','Purchase')
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>
</head>

<body>
@section('content')
 
          <img src="{{ url('GD/img/pcamarilla.png') }}" alt="">
       
          @include('admin.secciones.purchase.create')
          @include('admin.secciones.purchase.data')    
          


@endsection

  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>

  @extends('admin.layout.index')
  <!-- Required meta tags -->

  @section('title','Image')
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>
</head>

<body>
@section('content')
 
@include('admin.secciones.image.create')
@include('admin.secciones.image.data')    
       
        

@endsection

  
</body>
</html>
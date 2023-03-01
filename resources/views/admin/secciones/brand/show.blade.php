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
<form method="POST" action="/brandAdmin/{{$brand->id}}">
  @csrf
  @method('DELETE')
  <div class="form-group">
    <label for="nombre">Nombre de la marca</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $brand->nombre}}" disabled>
  </div>
  
  <div class="form-group">
    <img src="/admin/files/brand/{{ $brand->imagen}}" alt="" width="100">  </div>
    <label for="imagen">Su imagen</label>
  <button type="submit" class="btn btn-primary">Enviar para borrar</button>
</form>
@endsection

  
</body>
</html>
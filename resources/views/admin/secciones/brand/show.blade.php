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
    <label for="imagen">Selecione su imagen</label>
    <input type="text" class="form-control-file" id="imagen" name="imagen" value="{{ $brand->imagen}}" disabled>
  </div>
  <button type="submit" class="btn btn-primary">Enviar para borrar</button>
</form>
@endsection

  
</body>
</html>
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
<form method="POST" action="/brandAdmin/{{$brand->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="nombre">Nombre de la marca</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $brand->nombre}}">
  </div>
  
  <div class="form-group">
    l<img src="/admin/files/brand/{{ $brand->imagen}}" alt="" width="100">
    <label for="imagen">Selecione su imagen</label>
    <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar para editar</button>
</form>
@endsection

  
</body>
</html>
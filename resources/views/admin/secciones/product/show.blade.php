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
<form method="Post" action="/productAdmin/{{$product->id}}" enctype="multipart/form-data">
@csrf
@method('DELETE')
  <div class="form-group">
    <label for="nombre">ID</label>
    <input type="text" class="form-control" id="id" name="id" value="{{ $product->id}}" readonly>
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $product->nombre}}" readonly>
  </div>
  <div class="form-group">
    <label for="precio">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" value="{{ $product->precio}}" readonly>
  </div>
  <div class="form-group">
    <label for="cantidad">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $product->cantidad}}" readonly>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $product->descripcion}}" readonly >
  </div>
  <div class="form-group">
    <label for="tipo">Tipo</label>
    <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $product->tipo}}"  readonly>
  </div>
  <div class="form-group">
    <label for="brand_id">Marca</label>
    <input type="text"  class="form-control" id="brand_id" name="brand_id" value="{{$product->brand->id}}" readonly>
    
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" value="{{ $product->status}}"  readonly>
  </div>
  <div class="d-flex row  align-content-center justify-content-center">

    <div class="form-group mr-5">
      <img src="/admin/files/productos/{{ $product->img1 }}" alt="" width="100">
      <label for="imagen">Su 1ra imagen</label>
    </div>
    <div class="form-group mr-5">
      <img src="/admin/files/productos/{{ $product->img2 }}" alt="" width="100">
      <label for="imagen">Su 2da imagen</label>
    </div>
    <div class="form-group mr-5">
      <img src="/admin/files/productos/{{ $product->img3 }}" alt="" width="100">
      <label for="imagen">Su 3ra imagen</label>
    </div>
  </div>


  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection

  
</body>
</html>



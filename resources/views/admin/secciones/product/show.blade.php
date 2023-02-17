<form method="Post" action="/productAdmin/{{$product->id}}">
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
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $product->descripcion}}" readonly >
  </div>
  <div class="form-group">
    <label for="brand_id">Marca</label>
    <input type="number" class="form-control" id="brand_id" name="brand_id" value="{{ $product->brand_id}}" readonly>
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" value="{{ $product->status}}"  readonly>
  </div>


  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



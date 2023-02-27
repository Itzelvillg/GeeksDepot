<form method="POST" action="/productAdmin">
@csrf
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" >
  </div>
  <div class="form-group">
    <label for="precio">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" >
  </div>
  <div class="form-group">
    <label for="cantidad">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" >
  </div>
  <div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion"  >
  </div>
  <div class="form-group">
    <label for="brand_id">Marca</label>
    {{-- <input type="number" class="form-control" id="brand_id" name="brand_id" > --}}
    <select class="form-control" id="brand_id" name="brand_id">
      <option value="">Seleccione la marca</option>
      @foreach($brand as $brand)
      <option value="{{$brand->id}}">{{$brand->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status"  >
  </div>


  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



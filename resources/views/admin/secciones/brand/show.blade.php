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
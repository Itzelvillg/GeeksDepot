<form method="POST" action="/brandAdmin">
  @csrf
  <div class="form-group">
    <label for="nombre">Nombre de la marca</label>
    <input type="text" class="form-control" id="nombre" name="nombre" >
  </div>
  
  <div class="form-group">
    <label for="imagen">Selecione su imagen</label>
    <input type="text" class="form-control-file" id="imagen" name="imagen">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
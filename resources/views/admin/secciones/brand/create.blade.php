<form method="POST" action="/brandAdmin" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="nombre">Nombre de la marca</label>
    <input type="text" class="form-control" id="nombre" name="nombre" >
  </div>
  
  <div class="form-group">
    <label for="imagen">Selecione su imagen</label>
    <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
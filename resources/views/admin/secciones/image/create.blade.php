<form method="POST" action="/imageAdmin">
@csrf
  <div class="form-group">
    <label for="product_id">ID del producto</label>
    <input type="text" class="form-control" id="product_id" name="product_id" >
  </div>
 
  <div class="form-group">
    <label for="imagen">Selecione su imagen</label>
    <input type="text" class="form-control-file" id="imagen" name="imagen">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

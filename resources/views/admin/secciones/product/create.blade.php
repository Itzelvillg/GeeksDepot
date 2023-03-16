<form method="POST" action="/productAdmin" enctype="multipart/form-data">
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
    <label for="tipo">Tipo</label>
    
    <select class="form-control" id="tipo" name="tipo">
      <option value="">Seleccione la marca</option>
      <option value="armadas">Armadas</option>
      <option value="componentes">Componentes</option>
      <option value="monitores">Monitores</option>
      <option value="accesorios">Accesorios</option>
    </select>
  </div>
  <div class="form-group">
    <label for="brand_id">Marca</label>
   
    <select class="form-control" id="brand_id" name="brand_id">
      <option value="">Seleccione la marca</option>
      @foreach($brand as $brand)
      <option value="{{$brand->id}}">{{$brand->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" name="status"  id="status" >
                                       
      <option value="existencia" >Existencia</option>
      <option value="sinExistencia" >Sin existencia</option>
   </select>
  </div>
  <div class="d-flex row  align-content-center justify-content-center">
  <div class="form-group mr-5 ">
    <input type="file" class="form-control-file" id="img1" name="img1" accept="image/*" required>
    <label for="imagen">Selecione su 1ra imagen</label>
  </div>
  <div class="form-group mr-5">
    <input type="file" class="form-control-file" id="img2" name="img2" accept="image/*" required>
    <label for="imagen">Selecione su 2da imagen</label>
  </div>
  <div class="form-group mr-5">
    <input type="file" class="form-control-file" id="img3" name="img3" accept="image/*" required>
    <label for="imagen">Selecione su 3ra imagen</label>
  </div>
</div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



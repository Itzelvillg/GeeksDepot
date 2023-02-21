<form method="POST" action="/userAdmin/{{ $user->id}}">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="nickname">Nickname</label>
    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="JEJO" value="{{ $user->nickname}}" >
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ikselly" value="{{ $user->nombre}}">
  </div>
  <div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Villaseñor Villarruel" value="{{ $user->apellido}}" >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="ejemploCorreo@gmail.com" aria-describedby="emailHelp" value="{{ $user->email}}">
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $user->direccion}}"  >
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status"  value="{{ $user->status}}" >
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="{{ $user->password}}">
  </div>

  <button type="submit" class="btn btn-primary">Enviar para editar</button>
</form>

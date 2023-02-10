<!DOCTYPE html>
<html lang="en">
<head>

  @extends('secciones.layout.index')
  <!-- Required meta tags -->
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  @section('title','GeeksDepot')
</head>


@section('content')
  
  <main class="main-cuenta">
    <h1 class="titulo"> Inicia Sesión</h1>

    <div class="caja-inicio-sesion">

          <div class="caja-foto">
              <div class="caja-formulario-cuenta">

                    <div class="flex-column">
                      <label class="label-formulario" for="correo">Tu correo</label>
                      <input class="input-formulario" id="correo" type="email" name="correo" placeholder="dudas@gmail.com">

                    </div>
                    <div  class="flex-column">
                      <label class="label-formulario" for="contraseña">Tu contraseña</label>
                      <input class="input-formulario" id="contraseña" type="password" name="contraseña" placeholder="tu contraseña">

                    </div>
                    <div class="botones-cuenta">
                      <button class="btn-selector">Acceder</button>
                      <a href="{{ url('crearcuenta') }}">¿No tienes cuenta? Crea una aquí</a>
                    </div>


              </div>

               <div class="img-cuenta">
                 <img src="{{ url('GD/img/robot.png') }}" alt="Imagen de robot">
               </div>

          </div>

    </div>


  </main>







@endsection

  
</body>
</html>
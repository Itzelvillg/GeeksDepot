

    <!doctype html>
<html lang="en">

  <head>
    @extends('secciones.layout.index')
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>

    @section('title','Nosotros')
  </head>


@section('content')

<main class="main-content-conocenos">
  <div class="sobregd">
    <h1 class="titulo"> CONOCENOS</h1>
    <div class="new-caja ">
          
      <div class="caja-content flex-row">

      
            <div class="texto-news texto-nosotros">
              <h1> GEEKSDepot</h1>
              <p>
                Somos una tienda especializada en la venta de productos Geek desde 2019, y con presencia en la web desde 2023. 
                Tenemos la misíon de traer tus prodcutos favoritos en los mejores precios, así mismo queremos darte la experiencia que te mereces trayendo contenido nuevo para ti.
              </p>
            
            </div>
        
          <div class="img-conocenos">
            <img class="imagen-news" src="{{ url('GD/img/gdbot.png') }}" alt="">
          </div> 
        
      </div>


    </div>
  </div>

  <div  class="ubicacion">
    <h1>VISITANOS</h1>
    <div >
      <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10556.191289213768!2d-103.41695049463608!3d20.703026872218796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428aefd86a6e48d%3A0xee86b7bd74920eeb!2sAndares%20Centro%20Comercial!5e0!3m2!1ses!2smx!4v1675008299367!5m2!1ses!2smx" ></iframe>

      <p> Blvrd Puerta de Hierro 4965, Puerta de Hierro, 44100 Guadalajara, Jal.</p>

    </div>

  </div>

  <div class="discord">
      <div class="invitacion-discord">
        <h1>
          Unete a nuestra comonidad
        </h1>
        <img class="hi-img" src="{{ url('GD/img/hi.png') }}" alt="imagen de Hi robot">
      </div>
        <a href="https://discord.com/"><img src="{{ url('GD/img/discord.png') }}" alt="Imagen de discord"></a>
        
  </div>

  <div class="mandar-correo">
      <h1>¿Tienes dudas? mandanos un correo</h1>
      <div class="caja-correo ">
          <div class="content-correo-formulario">

              <div>
                <label class="label-formulario" for="email">Correo</label>
                <input class="input-formulario" id="email" type="email" name="email" placeholder="Dudas@gmail.com">

              </div>
              
              <div>
                <label class="label-formulario" for="mensaje-correo">Mensaje</label>
                <input class="input-formulario-grande" id="mensaje-correo" type="text" name="mensaje-correo" >

              </div>
          </div>

      </div>

  </div>






</main>


@endsection
<!-- main-->


    <!-- footer-->
  
    
  </body>
</html>
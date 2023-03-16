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
    <h1 class="titulo"> Más sobre</h1>

    <div class="caja-detalle">

          <div class="caja-foto">
            
              <div class="caja-formulario-cuenta">

                    <div class="flex-column">
                      <h3 class="label-formulario">Nombre</h3>
                     <p class="detalle-parrafos">{{$product->nombre}}</p>
                    </div>

                    <div  class="flex-column">
                      <h3 class="label-formulario">Descripción</h3>
                      <div>
                        <p class="detalle-parrafos">{{$product->descripcion}}</p>
                      </div>
                    </div>
                    <div  class="flex-column">
                      <h3 class="label-formulario">Precio</h3>
                      <div>
                        <p class="detalle-parrafos">{{$product->precio}}</p>
                      </div>
                    </div><div  class="flex-column">
                      <h3 class="label-formulario">Status</h3>
                      <div>
                        <p class="detalle-parrafos">{{$product->status}}</p>
                      </div>
                    </div>

                    <div class="botones-cuenta">
                      <button class="btn-selector">Comprar</button>
                    </div>
                    
              </div>

               <div class="img-detalle flex-column">
                 <img src="/admin/files/productos/{{$product->img1}}" alt="">
                 <img src="/admin/files/productos/{{$product->img2}}" alt="">
                 <img src="/admin/files/productos/{{$product->img3}}" alt="">
               </div>

          </div>

    </div>


  </main>







@endsection

  
</body>
</html>
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
      <main class="main-productos">
        <div class="selector-producto">
          <div class="selector-links">
          <button id="btn-armadas" type="button"  class="btn-selector ">Armadas</button>
          <button    id="btn-componentes" type="button" class="btn-selector">Componentes</button>
         <button  type="button" id="btn-monitores" class="btn-selector">Monitores</button></a>
         <button id="btn-accesorios" type="button" class="btn-selector">Accesorios</button>
          <button id="btn-todo" class="btn-selector ">Todo</button> 
          </div>
          
          <div class="btn-carrito">
            <a href="#"><img class="ver-carrito" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a>
          </div>
        </div>



   <div class="main-cards">
            
        <div class="product-card todo armadas">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div>
        <div class="product-card todo monitores">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> <div class="product-card todo componentes">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>
          
        </div> <div class="product-card todo componentes">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> <div class="product-card todo accesorios">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> <div class="product-card todo componentes">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> <div class="product-card todo accesorios">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> <div class="product-card todo monitoress">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> <div class="product-card todo armadas">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> 
        <div class="product-card todo monitores">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> <div class="product-card todo componentes">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div> <div class="product-card todo accesorios">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div>
        <div class="product-card todo armadas">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div>
        <div class="product-card todo monitores">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div>

        </div>
        <div class="product-card todo armadas">
          <img class="foto-producto" src="GD/img/pcamarilla.png" alt="">
          <div class="card-info">
            <h3 class="titulo-producto">Producto</h3>
           <p class="info-producto"> aaaaaaaaaaaaaaaa</p> 
           <div class="comprar"> 
             <p class="precio-producto">333</p>
             <div class="carrito"><a href="#"><img class="" src="{{ url('GD/img/carrito.png') }}" alt="Imagen de facebook" ></a></div>
            
           </div>
           

          </div> 

        </div> 

   </div>

      </main>
    @endsection

      
    </body>
    </html>
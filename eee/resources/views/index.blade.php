<!DOCTYPE html>
<html lang="en">
<head>

  @extends('secciones.layout.index')
  <!-- Required meta tags -->

  @section('title','GeeksDepot')
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>
</head>


@section('content')
  <main class="main-inicio">
      <section class="seccion1-inicio flex-row">
        <div>
          <h1 class="title">Encuentra la mejor calidad y tecnología para ti</h1>
          <p class="parrafo">Amplía tus horizontes y adquiere componentes de calidad de las mejores marcas en tu GeekWeb favorita.</p>
          <a href="{{ url('productos') }}"><button class="btn-más"> Descubre más</button></a>
        </div>
        <div class="imgpc">
          <img src="{{ url('GD/img/pcamarilla.png') }}" alt="">
        </div>
      </section>

      <section class="seccion2-inicio flex-column">
        <div>
           <h1 class="title">Descubre todo lo que tenemos especialmente para ti</h1>
          <p class="parrafos" >
            Nos encargamos de darte la mejor experiencia. En forma de agradecimiento te traemos la sección donde conoceras noticias, recomendaciones, eventos y mucho más.
          </p>
          <a href="{{ url('newsgeeks') }}"><button class="btn-news">NewGeeks</button></a>
        </div>
     
      </section>

  </main>
@endsection

  
</body>
</html>
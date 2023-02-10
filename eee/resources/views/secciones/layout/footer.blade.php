<footer class="footer">
  <div class="footer-nav flex-column">
    <a class="footer--link" href="{{ url('/') }}">Inicio </a>
    <a class="footer--link" href="{{ url('productos') }}">Productos</a>
    <a class="footer--link" href="{{ url('newgeeks') }}">NewGeeks</a>
    <a class="footer--link" href="{{ url('sobregd') }}">Sobre GD</a>
    <a class="footer--link" href="{{ url('cuenta') }}">Mi cuenta</a>

  </div>

  <div class="footer-socialmedia flex-column">
    <div class="footer-logo">
      <h1>GeeksDepot</h1>
    </div>

    <div>
      <a href="https://es-la.facebook.com/"><img class="svg-social" src="{{ url('GD/img/fb.png') }}" alt="Imagen de facebook" ></a>
      <a href="https://www.instagram.com/"><img class="svg-social" src="{{ url('GD/img/ig.png') }}" alt="Imagen de facebook" ></a>
    </div>

    <p> © 2023 por GeeksDepot</p>
    
  </div>

  <div class="footer-contact flex-column">
  <p>33 333 33 33 333</p>
  <a href="https://mail.google.com/">GeeksDepot@gmail.com</a>
  </div>
</footer>

<script src="{{ asset('GD/js/aaa.js') }}"></script>
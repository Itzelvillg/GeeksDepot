
<!DOCTYPE html>
<html lang="en">
<head>

  @extends('admin.layout.index')
  <!-- Required meta tags -->

  @section('title','Image')
  <link rel="shortcut icon" href="{{ url('GD/img/gdbot.png') }}" type='image/x-icon'>
</head>

<body>
@section('content')
  <form method="POST" action="/blogAdmin/{{$blog->id}}">
    @csrf
    @method('PUT')
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $blog->titulo}}">
      </div>
      <div class="form-group">
        <label for="noticia">Texto de la noticia</label>
        <input type="text" class="form-control" id="noticia" name="noticia" value="{{ $blog->noticia}}" >
      </div>
      
      <div class="form-group">
        <label for="imagen">Selecione su imagen</label>
        <input type="text" class="form-control-file" id="imagen" name="imagen" value="{{ $blog->imagen}}">
      </div>
      <button type="submit" class="btn btn-primary">Enviar para editar</button>
  </form>
  @endsection

  
</body>
</html>
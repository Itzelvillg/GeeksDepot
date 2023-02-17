<form method="POST" action="/blogAdmin/{{$blog->id}}">
  @csrf
  @method('DELETE')
    <div class="form-group">
      <label for="titulo">Titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $blog->titulo}}" disabled>
    </div>
    <div class="form-group">
      <label for="noticia">Texto de la noticia</label>
      <input type="text" class="form-control" id="noticia" name="noticia" value="{{ $blog->noticia}}" disabled >
    </div>
    
    <div class="form-group">
      <label for="imagen">Selecione su imagen</label>
      <input type="text" class="form-control-file" id="imagen" name="imagen" value="{{ $blog->imagen}}" disabled>
    </div>
    <button type="submit" class="btn btn-primary">Enviar para borrar</button>
  </form>
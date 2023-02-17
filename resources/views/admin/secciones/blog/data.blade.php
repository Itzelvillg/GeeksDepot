<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Noticia</th>
        <th scope="col">Imagen</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach ($blog as $blog)
          <tr>
        <th scope="row">{{ $blog->id }}</th>
        <td>{{ $blog->titulo }}</td>
        <td>{{ $blog->noticia }}</td>
        <td>{{ $blog->imagen }}</td>
      </tr> 
      @endforeach
     
      
    </tbody>
  </table>
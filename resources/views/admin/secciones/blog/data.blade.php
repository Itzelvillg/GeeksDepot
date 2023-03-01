<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Noticia</th>
        <th scope="col">Imagen</th>
         <th scope="col" class="text-danger">Editar</th>
        <th scope="col"class="text-warning">Borrar</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach ($blog as $blog)
          <tr>
        <th scope="row">{{ $blog->id }}</th>
        <td>{{ $blog->titulo }}</td>
        <td>{{ $blog->noticia }}</td>
        <td><img src="/admin/files/blog/{{ $blog->imagen }}" alt="" width="100"></td>
         <td> <a href="{{ url('/blogAdmin/'.$blog->id.'/edit')}}">Editar</a></td>
        <td> <a href="{{ url('/blogAdmin/'.$blog->id)}}">Borrar</a></td>
      </tr> 
      @endforeach
     
      
    </tbody>
  </table>
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Imagen</th>
        <th scope="col" class="text-danger">Editar</th>
        <th scope="col"class="text-warning">Borrar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($brand as $brand)
      <tr>
        <th scope="row">{{ $brand->id}}</th>
        <td>{{ $brand->nombre}}</td>
        <td>{{ $brand->imagen}}</td>
        <td> <a href="{{ url('/brandAdmin/'.$brand->id.'/edit')}}">Editar</a></td>
        <td> <a href="{{ url('/brandAdmin/'.$brand->id)}}">Borrar</a></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Imagen</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($brand as $brand)
      <tr>
        <th scope="row">{{ $brand->id}}</th>
        <td>{{ $brand->nombre}}</td>
        <td>{{ $brand->imagen}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
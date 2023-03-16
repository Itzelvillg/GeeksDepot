<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Descripción</th>
        <th scope="col">Tipo</th>
        <th scope="col">Marca</th>
        <th scope="col">Estatus</th>
        <th scope="col">Imagen1</th>
        <th scope="col">Imagen2</th>
        <th scope="col">Imagen3</th>
        <th scope="col" class="text-danger">Editar</th>
        <th scope="col"class="text-warning">Borrar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($product as $product)
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->precio }}</td>
        <td>{{ $product->cantidad }}</td>
        <td>{{ $product->descripcion }}</td>
        <td>{{ $product->tipo }}</td>
        <td>{{ $product->brand->nombre }}</td>
        <td>{{ $product->status }}</td>
        <td><img src="/admin/files/productos/{{ $product->img1 }}" alt="" width="100"></td>
        <td><img src="/admin/files/productos/{{ $product->img2 }}" alt="" width="100"></td>
        <td><img src="/admin/files/productos/{{ $product->img3 }}" alt="" width="100"></td>
        <td> <a href="{{ url('/productAdmin/'.$product->id.'/edit')}}">Editar</a></td>
        <td> <a href="{{ url('/productAdmin/'.$product->id)}}">Borrar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
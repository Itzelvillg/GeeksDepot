<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Descripción</th>
        <th scope="col">Marca</th>
        <th scope="col">Estatus</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($product as $product)
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->precio }}</td>
        <td>{{ $product->descripcion }}</td>
        <td>{{ $product->brand_id }}</td>
        <td>{{ $product->status }}</td>
      </tr>
      
    </tbody>
  </table>
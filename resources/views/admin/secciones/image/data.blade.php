<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID almacen IMG</th>
      <th scope="col">ID producto</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($image as $image)
    <tr>
      <th scope="row">{{ $image->id }}</th>
      <td>{{ $image->product_id }}</td>
      <td>{{ $image->imagen }}</td>
     
    </tr>
    @endforeach
  </tbody>
</table>
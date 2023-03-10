<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nickname</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Dirección</th>
        <th scope="col">Status</th>
        <th scope="col">Password</th>
        <th scope="col" class="text-danger">Editar</th>
        <th scope="col"class="text-warning">Borrar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $user)
      <tr>
        <th scope="row">{{ $user->id}}</th>
        <td><span>@</span>{{ $user->nickname}}</td>
        <td>{{ $user->nombre}}</td>
        <td>{{ $user->apellido}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->direccion}}</td>
        <td>{{ $user->status}}</td>
        <td>{{ $user->password}}</td>
        <td> <a href="{{ url('/userAdmin/'.$user->id.'/edit')}}">Editar</a></td>
        <td> <a href="{{ url('/userAdmin/'.$user->id)}}">Borrar</a></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
<h3>ACTUALIZAR</h3>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO</th>
            <th scope="col">APELLIDOS Y NOMBRES</th>
            <th scope="col">EDITAR</th>
        </tr>
  </thead>
  <tbody>
    @foreach($xAlumnos as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->codEst }}</td>
      <td>
        <a href="{{ route('Estudiante.xDetalle', $item->id ) }}">  
             {{ $item->apeEst }}, {{ $item->nomEst }}
        </a>
      </td>
        <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
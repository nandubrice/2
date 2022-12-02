@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">PAGINA LISTA</h1>
   
@endsection

@section('cuerpo')
    <h3>LISTA</h3>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO</th>
            <th scope="col">APELLIDOS Y NOMBRES</th>
            <th scope="col">Handle</th>
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
@endsection


   
   

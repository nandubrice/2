@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">PAGINA LISTA</h1>
   
@endsection

@section('cuerpo')
    @if(cuerpo('msj'))
      <div class="alert alert-sucess alert-dismissible fade show" role="alert">
        {{ session('msj') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif

    <form action="{{ route('Estudiante.xRegistrar') }}" method="post" class="d-grid gap-2">
      @csrf
      @error('codEst')
          <div class="alert alert-danger">
            El codigo es requerido
          </div>
      @enderror

      @error('nomEst')
          <div class="alert alert-danger">
              El nombre es requerido
          </div>
      @enderror

      @if($errors ->has('apeEst'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            El <strong>apellido</strong> es requerido
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
          </div>
      @endif

      <input type="text" name="codEst" placeholder="Codigo" value="{{ old('codEst') }}" class="form-control mb-2">
      <input type="text" name="nomEst" placeholder="Nombres" value="{{ old('nomEst') }}" class="form-control mb-2">
      <input type="text" name="apeEst" placeholder="Apellidos" value="{{ old('apeEst') }}" class="form-control mb-2">
      <input type="date" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ old('fnaEst') }}" class="form-control mb-2">
      <select name="turMat" class="form-control mb-2">
        <option value="">Seleccione...</option>
        <option value="1">Turno Dia</option>
        <option value="2">Turno Noche</option>
        <option value="3">Turno Tarde</option>
      </select>
      <select name="semMat" class="form-control mb-2">
        <option value="">Seleccione...</option>
        @for($i=0; $i < 7; $i++)
            <option value="{{$i}}">Semestre {{$i}}</option>
        @endfor
      </select>
      <select name="estMat" class="form-control mb-2">
        <option value="">Seleccione...</option>
        <option value="0">Inactivo</option>
        <option value="1">Activo</option>
      </select>
      <button class="btn btn-primary" type="submit">AGREGAR</button>
      
    </form>
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


   
   

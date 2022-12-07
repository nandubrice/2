@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">PAGINA LISTA</h1>
   
@endsection

@section('cuerpo')
    @if(session('msj'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('msj') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
      </div>
    @endif
<div class="btn btn-danger d-grid fs-5 mb-2"> REGISTRAR NUEVO SEGUIMIENTO... </div>
    <form action="{{ route('Estudiante.xRegistrar') }}" method="post" class="d-grid gap-2">
      @csrf
      @if($errors ->has('codEst'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            El <strong>apellido</strong> es requerido
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
          </div>
      @endif

      @if($errors ->has('nomEst'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            El <strong>apellido</strong> es requerido
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
          </div>
      @endif

      @if($errors ->has('apeEst'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            El <strong>apellido</strong> es requerido
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
          </div>
      @endif

      @if($errors ->has('fnaEst'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            El <strong>FECHA</strong> es requerido
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
          </div>
      @endif
      @if($errors ->has('turMat'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            El <strong>TURNO</strong> es requerido
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
      <button class="btn btn-danger" type="submit">AGREGAR</button>

    </form>
@endsection


   
   

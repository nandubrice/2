@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">PAGINA LISTA</h1>
   
@endsection

@section ('cuerpo')
    <h3> DETALLE DE ESTUDIANTES</h3>

    <p> Id:                        {{ $xDetAlumnos->id }} </p>
    <p> Codigo:                    {{ $xDetAlumnos->codEst }} </p>
    <p> Apellidos y Nombres:       {{ $xDetAlumnos->apeEst }}, {{ $xDetAlumnos->nomEst }} </p>
    <p> Fecha de Nacimiento:       {{ $xDetAlumnos->fnaEst }} </p>
    <p> Turno:                     {{ $xDetAlumnos->turEst }} </p>
    <p> Semestre:                  {{ $xDetAlumnos->semEst }} </p>
    <p> Estado de Matricula:       {{ $xDetAlumnos->estEst }} </p>

@endsection
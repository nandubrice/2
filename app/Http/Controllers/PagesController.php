<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    //
    public function fnIndex() {
        return view('welcome');
    }

    public function fnEstDetalle($id) {
        $xDetAlumnos = Estudiante::findOrFail($id);     //DATOS DE BD POR ID
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }

    public function fnLista() {
        $xAlumnos = Estudiante::all();     //DATOS DE BD
        return view('pagLista', compact('xAlumnos'));
    }

    public function fnGaleria($numero=0) {
        //return "FOTO DE CODIGO: ".$numero ;
        return view('pagGaleria', ['valor'=>$numero,'otro'=>25]);
    }



}
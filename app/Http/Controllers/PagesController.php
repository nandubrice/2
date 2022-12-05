<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    public function fnIndex() {
        return view('welcome');
    }
    public function fnEstDetalle($id) {
        $xDetAlumnos = Estudiante::findOrFail($id);     //DATOS DE BD POR ID
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }
    public function fnRegistrar (request $request){

        //return $request;          //verificando "token" y datos recibidos

        $request -> validate([
            'codEst'=>'required',
            'nomEst'=>'required',
            'apeEst'=>'required',
            'fnaEst'=>'required',
            'turMat'=>'required',
            'semMat'=>'required',
            'estMat'=>'required',
        ]);

        $nuevoEstudiante = new Estudiante;

        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;

        $nuevoEstudiante->save();       //guardar en BD

        //$xAlumnos = Estudiante::all();        //DATOS DE BD
        //return view('pagLista',compact('xAlumnos'));      /CARGA PAGINA   
        return back()->with('msj', 'Se registro con exito...');
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
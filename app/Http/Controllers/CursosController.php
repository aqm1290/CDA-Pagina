<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = Cursos::all();

        return view('cursos.index',compact('cursos'));
    }
    

    public function create()
    {

        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $curso = new Cursos();
        $curso->Nombre = $request->Nombre;
        $curso->Imagen = $request->Imagen;
        $curso->Lugar = $request->Lugar;
        $curso->Fecha = $request->Fecha;
        $curso->Hora = $request->Hora;
        $curso->Categoria = $request->Categoria;
        $curso->Precio = $request->Precio;
        $curso->Expositor = $request->Expositor;
        $curso->TextoAdicional = $request->TextoAdicional;
        $curso->Descipcion = $request->Descipcion;

        $curso->save();
        return redirect()->route('cursos.show',$curso->id);
    }

    public function show($id)
    {
        $cursos = Cursos::find($id);
        return view('cursos.show',compact('cursos'));
        
    }
}

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
        $request->validate([
            'Nombre' => 'required', 
            'Descipcion' => 'required',
            'Lugar' => 'required', 
            'Fecha' => 'required', 
            'Hora' => 'required', 
            'Categoria' => 'required',
            'Precio' => 'required', 
            'Expositor' => 'required', 
            'TextoAdicional' => 'required', 
            'Imagen' => 'required|image|mimes:jpeg,png,svg|max:1024',

        ]);

        $curso = $request->all();
        if($Imagen = $request->file('Imagen')){
            $rutaGuardarImg = 'Imagen/';
            $imagenCurso = date('YmdHis'). "." . $Imagen->getClientOriginalExtension();
            $Imagen->move($rutaGuardarImg, $imagenCurso);
            $curso['Imagen'] = "$imagenCurso";
        }
        Cursos::create($curso);
        return redirect()->route('cursos.index');
    }

    public function show($id)
    {
        $cursos = Cursos::find($id);
        return view('cursos.show',compact('cursos'));
        
    }
}

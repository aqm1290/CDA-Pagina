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
            'Nombre' => 'max:1000000', 
            'Descipcion' => 'max:1000000',
            'Lugar' => 'max:1000000', 
            'Fecha' => 'max:1000000', 
            'Hora' => 'max:1000000', 
            'Categoria' => 'max:1000000',
            'Precio' => 'max:100000000', 
            'Expositor' => 'max:1000000', 
            'TextoAdicional' => 'max:1000000', 
            'Imagen' => 'image|mimes:jpeg,png,svg,jpg|max:3024'
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
    
    public function edit(Cursos $cursos)
    {
        return view('cursos.edit', compact('cursos'));
    }

    public function update(Request $request, Cursos $cursos)
    {
        $request->validate([
            'Nombre' => 'max:1000000', 
            'Descipcion' => 'max:1000000',
            'Lugar' => 'max:1000000', 
            'Fecha' => 'max:1000000', 
            'Hora' => 'max:1000000', 
            'Categoria' => 'max:1000000',
            'Precio' => 'max:1000000', 
            'Expositor' => 'max:1000000', 
            'TextoAdicional' => 'max:1000000', 
            'Imagen' => 'image|mimes:jpeg,png,svg,jpg|max:3024'
        ]);
        $curso = $request->all();
        if($Imagen = $request->file('Imagen')){
            $rutaGuardarImg = 'Imagen/';
            $imagenCurso = date('YmdHis') . "." . $Imagen->getClientOriginalExtension(); 
            $Imagen->move($rutaGuardarImg, $imagenCurso);
            $curso['Imagen'] = "$imagenCurso";
        }else{
            unset($curso['Imagen']);
        }
        $cursos->update($curso);
        return redirect()->route('cursos.index');
    }

    public function destroy(Cursos $cursos)
    {
        $cursos->delete();
        return view('cursos.index',compact('cursos'));
    }
}


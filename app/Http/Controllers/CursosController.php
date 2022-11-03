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
            'Nombre' => 'required|max:1000000', 
            'Descipcion' => 'required|max:1000000',
            'Lugar' => 'required|max:1000000', 
            'Fecha' => 'required|max:1000000', 
            'Hora' => 'required|max:1000000', 
            'Categoria' => 'required|max:1000000',
            'Precio' => 'required|max:1000000', 
            'Expositor' => 'required|max:1000000', 
            'TextoAdicional' => 'required|max:1000000', 
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
    public function edit(Cursos $cursos)
    {
        return view('cursos.edit', compact('cursos'));
    }
    public function update(Request $request, Cursos $cursos)
    {
        $request->validate([
            'Nombre' => 'required|max:1000000', 
            'Descipcion' => 'required|max:1000000',
            'Lugar' => 'required|max:1000000', 
            'Fecha' => 'required|max:1000000', 
            'Hora' => 'required|max:1000000', 
            'Categoria' => 'required|max:1000000',
            'Precio' => 'required|max:1000000', 
            'Expositor' => 'required|max:1000000', 
            'TextoAdicional' => 'required|max:1000000'
        ]);

        $curso = $request->all();
        if($Imagen = $request->file('Imagen')){
            $rutaGuardarImg = 'Imagen/';
            $imagenCurso = date('YmdHis'). "." . $Imagen->getClientOriginalExtension();
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
        return redirect()->route('cursos.index');
    }
}

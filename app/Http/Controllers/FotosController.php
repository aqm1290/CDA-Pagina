<?php

namespace App\Http\Controllers;
use App\Models\Fotos;

use Illuminate\Http\Request;

class FotosController extends Controller
{
    public function index()
    {
        $fotos = Fotos::all();
        return view('fotos.index',compact('fotos'));
    }
    public function create()
    {

        return view('fotos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'max:1000000', 
            'Info' => 'max:1000000',
            'Imagen' => 'image|mimes:jpeg,png,svg|max:3024',
        ]);

        $fotos = $request->all();
        if($Imagen = $request->file('Imagen')){
            $rutaGuardarImg = 'Imagen/';
            $imagenFotos = date('YmdHis'). "." . $Imagen->getClientOriginalExtension();
            $Imagen->move($rutaGuardarImg, $imagenFotos);
            $fotos['Imagen'] = "$imagenFotos";
        }
        Fotos::create($fotos);
        return redirect()->route('fotos.index');
    }
    
    public function show($id)
    {
        $fotos = Fotos::find($id);
        return view('fotos.show',compact('fotos'));
    }
}

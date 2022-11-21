<?php

namespace App\Http\Controllers;
use App\Models\Noticias;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticias::all();
        return view('noticias.index',compact('noticias'));
    }
    public function create()
    {

        return view('noticias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'max:1000000', 
            'Info' => 'max:1000000',
            'Imagen' => 'image|mimes:jpeg,png,svg|max:3024',
        ]);

        $noticias = $request->all();
        if($Imagen = $request->file('Imagen')){
            $rutaGuardarImg = 'Imagen/';
            $imagenNoticias = date('YmdHis'). "." . $Imagen->getClientOriginalExtension();
            $Imagen->move($rutaGuardarImg, $imagenNoticias);
            $noticias['Imagen'] = "$imagenNoticias";
        }
        Noticias::create($noticias);
        return redirect()->route('noticias.index');
    }
    
    public function show($id)
    {
        $noticias = Noticias::find($id);
        return view('noticias.show',compact('noticias'));
    }
}

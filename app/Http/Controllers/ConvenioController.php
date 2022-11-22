<?php

namespace App\Http\Controllers;
use App\Models\Convenios;

use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    public function index()
    {
        $convenios = Convenios::all();
        return view('servicios.convenios',compact('convenios'));
    }
    public function create()
    {

        return view('servicios.createConvenios');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'max:1000000', 
            'Info' => 'max:1000000',
            'Imagen' => 'image|mimes:jpeg,png,svg|max:6024',
        ]);

        $convenio = $request->all();
        if($Imagen = $request->file('Imagen')){
            $rutaGuardarImg = 'Imagen/';
            $imagenConvenio = date('YmdHis'). "." . $Imagen->getClientOriginalExtension();
            $Imagen->move($rutaGuardarImg, $imagenConvenio);
            $convenio['Imagen'] = "$imagenConvenio";
        }
        Convenios::create($convenio);
        return redirect()->route('convenios');
    }
    public function show($id)
    {
        $convenios = Convenios::find($id);
        return view('servicios.showConvenios',compact('convenios'));
        
    }



}

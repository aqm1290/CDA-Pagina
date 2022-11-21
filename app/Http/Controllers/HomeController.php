<?php

namespace App\Http\Controllers;
use App\Models\Fotos;
use App\Models\Cursos;
use App\Models\Noticias;


use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function index()
    {
        $cursos = Cursos::paginate(6);
        $fotos = Fotos::all();
        $noticias = Noticias::all();

        return view('welcome',compact('cursos','fotos','noticias'));
    }
}

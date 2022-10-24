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
        $cursos = Cursos::all();

        return view('cursos.create',compact('cursos'));
    }
}

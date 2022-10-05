<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TribunalEticaController extends Controller
{
    public function index()
    {
        return view('inscripcion.requisitosInscripcion');
    }
}

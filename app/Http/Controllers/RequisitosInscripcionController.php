<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisitosInscripcionController extends Controller
{
    public function index()
    {
        return view('inscripcion.requisitosInscripcion');
    }
}

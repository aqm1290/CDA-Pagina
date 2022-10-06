<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsejoTecnicoController extends Controller
{
    public function index()
    {
        return view('consejoTecnico.consejoTecnico');
    }
}

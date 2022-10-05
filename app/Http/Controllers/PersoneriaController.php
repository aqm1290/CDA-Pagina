<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersoneriaController extends Controller
{
    public function index()
    {
        return view('quienesSomos.personeriaJuridica');
    }
}

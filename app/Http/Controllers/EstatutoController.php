<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstatutoController extends Controller
{
    public function index()
    {
        return view('quienesSomos.estatutoReglamentos');
    }
}

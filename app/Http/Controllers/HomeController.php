<?php

namespace App\Http\Controllers;

use App\Models\Cursos;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function index()
    {
        $cursos = Cursos::paginate(6);
        return view('welcome',compact('cursos'));
    }
}

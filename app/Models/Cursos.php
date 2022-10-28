<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    
    protected $fillable = ['Nombre', 'Imagen', 'Lugar', 'Fecha', 'Hora', 'Categoria', 'Precio', 'Expositor', 'TextoAdicional', 'Descipcion'];
}

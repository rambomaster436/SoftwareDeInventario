<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Campos que se pueden asignar en masa (desde formularios)
    protected $fillable = [
        'nombre',
        'categoria',
        'stock',
        'precio',
        'descripcion',
    ];


}

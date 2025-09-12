<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Recupera todos los productos
        

        // Retorna la vista con los datos
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        // Esto mostrará la vista que hiciste
        return view('productos.create');
    }
}

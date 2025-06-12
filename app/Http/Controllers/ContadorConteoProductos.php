<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContadorConteoProductos extends Controller
{
    public function index()
    {
        $stock = 10; 
        $stock2 = 5;
        $stock3 = 8;
        $porcentaje = 80; 
    
        return view('index', compact('stock', 'stock2', 'stock3', 'porcentaje'));
    }
}

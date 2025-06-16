<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class DelMesController extends Controller
{
    public function index()
    {
        $productosDelMes = Producto::with(['categoria', 'marca', 'stock'])
            ->delMes()
            ->topVentas()
            ->get();

        return view('components.delmes', compact('productosDelMes'));
    }
}
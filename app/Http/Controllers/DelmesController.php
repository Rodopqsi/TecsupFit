<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Stock;
use App\Models\delmes;
use Illuminate\Http\Request;

class DelMesController extends Controller
{
    public function index(Request $request)
{
    $query = Producto::with(['categoria', 'marca', 'stock'])
        ->delMes()
        ->topVentas();

    if ($request->filled('search')) {
        $query->where('nombre', 'like', '%' . $request->search . '%')
                ->orWhere('descripcion', 'like', '%' . $request->search . '%');
    }

    if ($request->filled('categoria')) {
        $query->where('categoria_id', $request->categoria);
    }

    if ($request->filled('marca')) {
        $query->where('marca_id', $request->marca);
    }

    if ($request->filled('precio_min')) {
        $query->where('precio_nuevo', '>=', $request->precio_min);
    }

    if ($request->filled('precio_max')) {
        $query->where('precio_nuevo', '<=', $request->precio_max);
    }

    $productosDelMes = $query->get();

    $categorias = Categoria::all();
    $marcas = Marca::all();

    return view('components.delmes', compact('productosDelMes', 'categorias', 'marcas'));
}

    

}
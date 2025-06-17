<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Stock;
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
    
    public function query(Request $request)
    {
        $query = Producto::with(['categoria', 'marca', 'stock']);

        if ($request->filled('search')) {
            $query->search($request->search);
        }

        if ($request->filled('categoria')) {
            $query->byCategoria($request->categoria);
        }

        if ($request->filled('marca')) {
            $query->byMarca($request->marca);
        }

        if ($request->filled('precio_min') && $request->filled('precio_max')) {
            $query->byPrecio($request->precio_min, $request->precio_max);
        }

        $productos = $query->paginate(12);
        $categorias = Categoria::all();
        $marcas = Marca::all();

        return view('components.delmes', compact('productos', 'categorias', 'marcas'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio_nuevo' => 'required|numeric|min:0',
            'precio_antes' => 'nullable|numeric|min:0',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'descripcion' => 'required|string',
            'categoria_id' => 'required|exists:categorias,id',
            'marca_id' => 'required|exists:marcas,id',
            'stock_cantidad' => 'required|integer|min:0',
            'stock_minimo' => 'required|integer|min:0',
        ]);

        // Crear stock
        $stock = Stock::create([
            'cantidad' => $request->stock_cantidad,
            'stock_minimo' => $request->stock_minimo,
        ]);

        // Crear producto
        $producto = new Producto($request->except(['stock_cantidad', 'stock_minimo']));
        $producto->stock_id = $stock->id;

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('images/productos'), $nombreImagen);
            $producto->imagen = $nombreImagen;
        }

        $producto->save();

        return redirect()->route('components.delmes')->with('success', 'Producto creado exitosamente.');
    }
}
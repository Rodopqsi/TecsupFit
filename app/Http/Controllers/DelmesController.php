<?php

namespace App\Http\Controllers;

use App\Models\delmes;
use Illuminate\Http\Request;

class delmesController extends Controller
{
    /**
     * Mostrar la página principal con Productos destacados
     */
    public function index(){
        $productosPorCategoria = delmes::getProductosPorCategoria();
        return view('index', compact('productosPorCategoria'));
    }

    /**
     * Mostrar página de administración con todos los Productos
     */
    public function admin()
    {
        $Productos = delmes::orderBy('created_at', 'desc')->paginate(10);
        
        return view('admin', compact('Productos'));
    }

    /**
     * Almacenar un nuevo Producto
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio_original' => 'required|numeric|min:0',
            'precio_oferta' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria' => [
                'required',
                Rule::in(['keratinas', 'proteinas', 'ganadores_peso', 'quemadores_grasa', 'barras_energeticas', 'vitaminas_otros'])
            ],
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'activo' => 'boolean',
            'destacado' => 'boolean'
        ]);

        // Procesar imagen si existe
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('Productos', 'public');
            $validated['imagen'] = $imagePath;
        }

        // Establecer valores por defecto para checkboxes
        $validated['activo'] = $request->has('activo');
        $validated['destacado'] = $request->has('destacado');

        delmes::create($validated);

        return redirect()->route('admin')
            ->with('success', 'Producto creado exitosamente.');
    }

    /**
     * Mostrar formulario de edición
     */
    public function edit(delmes $Product)
    {
        return response()->json($Product);
    }

    /**
     * Actualizar Producto existente
     */
    public function update(Request $request, delmes $Product)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio_original' => 'required|numeric|min:0',
            'precio_oferta' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria' => [
                'required',
                Rule::in(['keratinas', 'proteinas', 'ganadores_peso', 'quemadores_grasa', 'barras_energeticas', 'vitaminas_otros'])
            ],
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'activo' => 'boolean',
            'destacado' => 'boolean'
        ]);

        // Procesar nueva imagen si existe
        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior si existe
            if ($Product->imagen && Storage::disk('public')->exists($Product->imagen)) {
                Storage::disk('public')->delete($Product->imagen);
            }
            
            $imagePath = $request->file('imagen')->store('Productos', 'public');
            $validated['imagen'] = $imagePath;
        }

        // Establecer valores para checkboxes
        $validated['activo'] = $request->has('activo');
        $validated['destacado'] = $request->has('destacado');

        $Product->update($validated);

        return redirect()->route('admin')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Eliminar Producto
     */
    public function destroy(delmes $Product)
    {
        // Eliminar imagen si existe
        if ($Product->imagen && Storage::disk('public')->exists($Product->imagen)) {
            Storage::disk('public')->delete($Product->imagen);
        }

        $Product->delete();

        return redirect()->route('admin')
            ->with('success', 'Producto eliminado exitosamente.');
    }

    /**
     * Cambiar estado activo del Producto
     */
    public function toggleStatus(delmes $Product)
    {
        $Product->update(['activo' => !$Product->activo]);
        
        $status = $Product->activo ? 'activado' : 'desactivado';
        
        return redirect()->route('admin')
            ->with('success', "Producto {$status} exitosamente.");
    }

    /**
     * API para obtener Productos por categoría (para AJAX)
     */
    public function getByCategory($categoria)
    {
        $Productos = Product::activo()
            ->categoria($categoria)
            ->destacado()
            ->get();

        return response()->json($Productos);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
class MarcaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:marcas,nombre',
        ]);

        Marca::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Marca agregada exitosamente.');
    }

    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:marcas,nombre,' . $marca->id,
        ]);

        $marca->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Marca actualizada exitosamente.');
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();

        return redirect()->route('productos.index')->with('success', 'Marca eliminada exitosamente.');
    }
}

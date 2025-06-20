<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function mostrar()
    {
        $carrito = session()->get('carrito', []);
        $total = array_sum(array_map(function ($item) {
            return $item['precio'] * $item['cantidad'];
        }, $carrito));

        return view('carrito.index', compact('carrito', 'total'));

    }

    public function agregar(Request $request)
    {
        $producto = Producto::find($request->producto_id);
        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        $carrito = session()->get('carrito', []);

        if (isset($carrito[$producto->id])) {
            $carrito[$producto->id]['cantidad']++;
        } else {
            $carrito[$producto->id] = [
                'nombre' => $producto->nombre,
                'precio' => $producto->precio,
                'cantidad' => 1
            ];
        }

        session(['carrito' => $carrito]);
        return redirect()->route('carrito.mostrar')->with('success', 'Producto agregado al carrito.');
    }

    public function eliminar(Request $request)
    {
        $carrito = session()->get('carrito', []);
        unset($carrito[$request->producto_id]);
        session(['carrito' => $carrito]);

        return redirect()->route('carrito.mostrar')->with('success', 'Producto eliminado del carrito.');
    }

    public function actualizar(Request $request)
    {
        $carrito = session()->get('carrito', []);
        if (isset($carrito[$request->producto_id])) {
            $carrito[$request->producto_id]['cantidad'] = $request->cantidad;
        }
        session(['carrito' => $carrito]);

        return redirect()->route('carrito.mostrar')->with('success', 'Cantidad actualizada.');
    }
}

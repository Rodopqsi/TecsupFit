<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function checkout()
    {
        $carrito = session()->get('carrito', []);
        $total = array_sum(array_map(function ($item) {
            return $item['precio'] * $item['cantidad'];
        }, $carrito));

        return view('checkout', compact('carrito', 'total'));
    }

    public function procesarPago(Request $request)
    {
        // Aquí podrías guardar la orden si tienes tabla "pedidos"
        // Ejemplo básico:
        $data = $request->all();

        // Para pruebas, puedes registrar la data o mostrarla
        \Log::info('Pago recibido:', $data);

        return response()->json(['success' => true, 'mensaje' => 'Pago registrado.']);
    }
}

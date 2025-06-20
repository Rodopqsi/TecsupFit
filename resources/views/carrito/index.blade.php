
<div class="max-w-5xl mx-auto py-10">
  <h1 class="text-2xl font-bold mb-6">Carrito de Compras</h1>

  @if(count($carrito) > 0)
    <table class="w-full border border-gray-300">
      <thead>
        <tr class="bg-gray-200 text-left">
          <th class="p-3">Producto</th>
          <th class="p-3">Precio</th>
          <th class="p-3">Cantidad</th>
          <th class="p-3">Subtotal</th>
          <th class="p-3">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($carrito as $id => $item)
          <tr class="border-b">
            <td class="p-3">{{ $item['nombre'] }}</td>
            <td class="p-3">S/ {{ number_format($item['precio'], 2) }}</td>
            <td class="p-3">
              <form action="{{ route('carrito.actualizar') }}" method="POST" class="flex items-center">
                @csrf
                <input type="hidden" name="producto_id" value="{{ $id }}">
                <input type="number" name="cantidad" value="{{ $item['cantidad'] }}" min="1" class="w-16 border p-1">
                <button type="submit" class="ml-2 text-blue-600 text-sm">Actualizar</button>
              </form>
            </td>
            <td class="p-3">S/ {{ number_format($item['precio'] * $item['cantidad'], 2) }}</td>
            <td class="p-3">
              <form action="{{ route('carrito.eliminar') }}" method="POST">
                @csrf
                <input type="hidden" name="producto_id" value="{{ $id }}">
                <button type="submit" class="text-red-600 text-sm">Eliminar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="text-right mt-6">
      <p class="text-xl font-bold">Total: S/ {{ number_format($total, 2) }}</p>
      <a href="{{ route('checkout') }}" class="inline-block mt-4 bg-green-600 text-white px-6 py-2 rounded">Ir a Pagar</a>
    </div>
  @else
    <p>Tu carrito está vacío.</p>
  @endif
</div>

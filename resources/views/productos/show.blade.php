<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-6">
    <div class="flex flex-col items-center">
        @if($producto->imagen)
            <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="w-64 h-64 object-contain mb-4" alt="{{ $producto->nombre }}">
        @else
            <div class="w-64 h-64 flex items-center justify-center bg-gray-100 text-gray-400 mb-4 rounded">
                <span>Sin imagen</span>
            </div>
        @endif

        <div class="w-full">
            <span class="text-xs text-gray-400 uppercase tracking-widest">NUTRI PROTEIN</span>
            <h2 class="text-lg font-semibold mt-2 mb-2">{{ $producto->nombre }}</h2>

            <div class="flex gap-2 mb-2">
                <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">{{ $producto->categoria->nombre }}</span>
                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">{{ $producto->marca->nombre }}</span>
                @if($producto->es_delmes)
                    <span class="bg-yellow-300 text-yellow-900 text-xs px-2 py-1 rounded">Del Mes</span>
                @endif
            </div>

            <div class="mb-2 flex items-center gap-2">
                <span class="text-sky-600 text-xl font-bold">S/ {{ number_format($producto->precio_nuevo, 2) }}</span>
                @if($producto->precio_antes)
                    <del class="text-gray-400 text-base">S/ {{ number_format($producto->precio_antes, 2) }}</del>
                    
                @endif
            </div>

            <div class="mb-2">
                <span class="text-gray-600 text-sm">Quedan {{ $producto->stock->cantidad }} unidades</span>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-1 mb-1">
                    <div class="bg-gray-800 h-2 rounded-full" style="width: {{ $producto->stock->stock_percentage }}%"></div>
                </div>
                @if($producto->stock->cantidad <= $producto->stock->stock_minimo)
                    <span class="text-yellow-600 text-xs">¡Stock bajo!</span>
                @endif
            </div>

            <div class="mb-4">
                <h5 class="font-semibold text-sm mb-1">Descripción</h5>
                <p class="text-gray-700 text-sm">{{ $producto->descripcion }}</p>
            </div>

            @if($producto->stock->cantidad > 0)
                <form action="{{ route('productos.comprar', $producto) }}" method="POST" class="mb-3">
                    @csrf
                    <div class="flex">
                        <input type="number" name="cantidad" class="w-16 border border-gray-300 rounded-l px-2 py-2 text-center focus:outline-none" min="1" max="{{ $producto->stock->cantidad }}" value="1" required>
                        <button type="submit" class="flex-1 bg-red-700 hover:bg-red-800 text-white font-semibold py-2 rounded-r transition-colors">
                            Agregar al carrito
                        </button>
                    </div>
                </form>
            @else
                <div class="bg-yellow-100 text-yellow-800 px-3 py-2 rounded mb-3 text-center">Producto agotado</div>
            @endif

            <div class="flex gap-2 mt-4">
                <a href="{{ route('productos.edit', $producto) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded font-semibold text-sm">Editar Producto</a>
                <form action="{{ route('productos.toggle-delmes', $producto) }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded font-semibold text-sm {{ $producto->es_delmes ? 'bg-green-600 text-white' : 'bg-white border border-green-600 text-green-600' }}">
                        {{ $producto->es_delmes ? 'Quitar de Del Mes' : 'Agregar a Del Mes' }}
                    </button>
                </form>
            </div>

            @if($producto->ventas_mes > 0)
                <div class="mt-3">
                    <span class="text-gray-400 text-xs">Ventas este mes: {{ $producto->ventas_mes }}</span>
                </div>
            @endif

            <div class="mt-4">
                <a href="{{ route('productos.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded font-semibold text-sm">Volver al listado</a>
            </div>
        </div>
    </div>
</div>



@section('content4')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if($producto->imagen)
                <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="img-fluid" alt="{{ $producto->nombre }}">
            @else
                <div class="bg-light d-flex align-items-center justify-content-center" style="height: 400px;">
                    <span class="text-muted">Sin imagen</span>
                </div>
            @endif
        </div>
        
        <div class="col-md-6">
            <h1>{{ $producto->nombre }}</h1>
            
            <div class="mb-3">
                <span class="badge badge-secondary">{{ $producto->categoria->nombre }}</span>
                <span class="badge badge-info">{{ $producto->marca->nombre }}</span>
                @if($producto->es_delmes)
                    <span class="badge badge-warning">Del Mes</span>
                @endif
            </div>

            <div class="mb-3">
                <h3 class="text-primary">${{ $producto->precio_nuevo }}</h3>
                @if($producto->precio_antes)
                    <del class="text-muted h5">${{ $producto->precio_antes }}</del>
                    <span class="badge badge-success">
                        {{ round((($producto->precio_antes - $producto->precio_nuevo) / $producto->precio_antes) * 100) }}% OFF
                    </span>
                @endif
            </div>

            <div class="mb-3">
                <h6>Stock disponible: {{ $producto->stock->cantidad }}</h6>
                <div class="progress mb-2" style="height: 10px;">
                    <div class="progress-bar bg-dark" role="progressbar" 
                         style="width: {{ $producto->stock->stock_percentage }}%" 
                         aria-valuenow="{{ $producto->stock->cantidad }}" 
                         aria-valuemin="0" 
                         aria-valuemax="100">
                    </div>
                </div>
                @if($producto->stock->cantidad <= $producto->stock->stock_minimo)
                    <small class="text-warning">¡Stock bajo!</small>
                @endif
            </div>

            <div class="mb-4">
                <h5>Descripción</h5>
                <p>{{ $producto->descripcion }}</p>
            </div>

            @if($producto->stock->cantidad > 0)
                <form action="{{ route('productos.comprar', $producto) }}" method="POST" class="mb-3">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" 
                                   min="1" max="{{ $producto->stock->cantidad }}" value="1" required>
                        </div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary btn-lg">Comprar Ahora</button>
                        </div>
                    </div>
                </form>
            @else
                <div class="alert alert-warning">Producto agotado</div>
            @endif

            <div class="mt-4">
                <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar Producto</a>
                <form action="{{ route('productos.toggle-delmes', $producto) }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn {{ $producto->es_delmes ? 'btn-success' : 'btn-outline-success' }}">
                        {{ $producto->es_delmes ? 'Quitar de Del Mes' : 'Agregar a Del Mes' }}
                    </button>
                </form>
            </div>

            @if($producto->ventas_mes > 0)
                <div class="mt-3">
                    <small class="text-muted">Ventas este mes: {{ $producto->ventas_mes }}</small>
                </div>
            @endif
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver al listado</a>
    </div>
</div>
@endsection
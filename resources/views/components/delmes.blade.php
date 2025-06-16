<div class="delmes-container">
    <h2>Productos Del Mes - Top Ventas</h2>
    
    @if($productosDelMes->count() > 0)
        <div class="row">
            @foreach($productosDelMes as $producto)
                <div class="col-md-4 mb-4">
                    <div class="card border-warning">
                        <div class="card-header bg-warning">
                            <strong>Del Mes</strong>
                            <span class="badge badge-primary float-right">{{ $producto->ventas_mes }} ventas</span>
                        </div>
                        @if($producto->imagen)
                            <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ Str::limit($producto->descripcion, 80) }}</p>
                            <p class="card-text">
                                <strong>${{ $producto->precio_nuevo }}</strong>
                                @if($producto->precio_antes)
                                    <del class="text-muted">${{ $producto->precio_antes }}</del>
                                @endif
                            </p>
                            <p class="card-text">
                                <small class="text-muted">{{ $producto->categoria->nombre }} - {{ $producto->marca->nombre }}</small>
                            </p>
                            
                            {{-- Barra de stock --}}
                            <div class="mb-2">
                                <small>Stock: {{ $producto->stock->cantidad }}</small>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-dark" role="progressbar" 
                                         style="width: {{ $producto->stock->stock_percentage }}%" 
                                         aria-valuenow="{{ $producto->stock->cantidad }}" 
                                         aria-valuemin="0" 
                                         aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            {{-- Formulario de compra --}}
                            <form action="{{ route('productos.comprar', $producto) }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" max="{{ $producto->stock->cantidad }}" required>
                                    <button type="submit" class="btn btn-primary">Comprar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No hay productos del mes seleccionados.</p>
    @endif
</div>
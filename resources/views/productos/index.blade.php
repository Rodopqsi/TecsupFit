{{-- resources/views/productos/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Productos</h1>
    
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Producto</a>
    
    {{-- Filtros --}}
    <form method="GET" action="{{ route('productos.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="search" class="form-control" placeholder="Buscar..." value="{{ request('search') }}">
            </div>
            <div class="col-md-2">
                <select name="categoria" class="form-control">
                    <option value="">Todas las categorías</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ request('categoria') == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <select name="marca" class="form-control">
                    <option value="">Todas las marcas</option>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}" {{ request('marca') == $marca->id ? 'selected' : '' }}>
                            {{ $marca->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <input type="number" name="precio_min" class="form-control" placeholder="Precio mín" value="{{ request('precio_min') }}">
            </div>
            <div class="col-md-2">
                <input type="number" name="precio_max" class="form-control" placeholder="Precio máx" value="{{ request('precio_max') }}">
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-secondary">Filtrar</button>
            </div>
        </div>
    </form>

    <div class="row">
        @foreach($productos as $producto)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($producto->imagen)
                        <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text">{{ Str::limit($producto->descripcion, 100) }}</p>
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

                        <div class="btn-group d-flex" role="group">
                            <a href="{{ route('productos.show', $producto) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </div>
                        
                        <div class="mt-2">
                            <form action="{{ route('productos.toggle-delmes', $producto) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn {{ $producto->es_delmes ? 'btn-success' : 'btn-outline-success' }} btn-sm">
                                    {{ $producto->es_delmes ? 'Del Mes ✓' : 'Agregar a Del Mes' }}
                                </button>
                            </form>
                        </div>

                        {{-- Formulario de compra --}}
                        <form action="{{ route('productos.comprar', $producto) }}" method="POST" class="mt-2">
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

    {{ $productos->links() }}
</div>
@endsection

{{-- Crear  --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="form-group mb-3">
                    <label for="precio_nuevo">Precio Nuevo</label>
                    <input type="number" step="0.01" class="form-control" id="precio_nuevo" name="precio_nuevo" required>
                </div>

                <div class="form-group mb-3">
                    <label for="precio_antes">Precio Anterior (opcional)</label>
                    <input type="number" step="0.01" class="form-control" id="precio_antes" name="precio_antes">
                </div>

                <div class="form-group mb-3">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="categoria_id">Categoría</label>
                    <select class="form-control" id="categoria_id" name="categoria_id" required>
                        <option value="">Seleccionar categoría</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="marca_id">Marca</label>
                    <select class="form-control" id="marca_id" name="marca_id" required>
                        <option value="">Seleccionar marca</option>
                        @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="stock_cantidad">Stock Cantidad</label>
                    <input type="number" class="form-control" id="stock_cantidad" name="stock_cantidad" required>
                </div>

                <div class="form-group mb-3">
                    <label for="stock_minimo">Stock Mínimo</label>
                    <input type="number" class="form-control" id="stock_minimo" name="stock_minimo" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crear Producto</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="precio_nuevo">Precio Nuevo</label>
                    <input type="number" step="0.01" class="form-control" id="precio_nuevo" name="precio_nuevo" value="{{ $producto->precio_nuevo }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="precio_antes">Precio Anterior (opcional)</label>
                    <input type="number" step="0.01" class="form-control" id="precio_antes" name="precio_antes" value="{{ $producto->precio_antes }}">
                </div>

                <div class="form-group mb-3">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                    @if($producto->imagen)
                        <small class="form-text text-muted">Imagen actual: {{ $producto->imagen }}</small>
                        <br>
                        <img src="{{ asset('images/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" style="max-width: 200px; height: auto;">
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="categoria_id">Categoría</label>
                    <select class="form-control" id="categoria_id" name="categoria_id" required>
                        <option value="">Seleccionar categoría</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="marca_id">Marca</label>
                    <select class="form-control" id="marca_id" name="marca_id" required>
                        <option value="">Seleccionar marca</option>
                        @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}" {{ $producto->marca_id == $marca->id ? 'selected' : '' }}>
                                {{ $marca->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="stock_cantidad">Stock Cantidad</label>
                    <input type="number" class="form-control" id="stock_cantidad" name="stock_cantidad" value="{{ $producto->stock->cantidad }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="stock_minimo">Stock Mínimo</label>
                    <input type="number" class="form-control" id="stock_minimo" name="stock_minimo" value="{{ $producto->stock->stock_minimo }}" required>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required>{{ $producto->descripcion }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

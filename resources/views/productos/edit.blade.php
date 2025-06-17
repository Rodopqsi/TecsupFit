
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

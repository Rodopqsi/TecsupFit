<body>
    @extends('components.side_bar')
<!-- Search Container -->
<section class="Contenedor_general">
    <div class="search-container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <form method="GET" action="{{ route('productos.index') }}" id="filterForm" style="flex: 1;">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" name="search" placeholder="Buscar productos..." value="{{ request('search') }}">
            </div>
        </form>
        <div class="view-toggle">
            <a href="#" class="text-primary">
                <i class="fas fa-eye"></i> Ver Tienda
            </a>
        </div>
    </div>
    
    <!-- Category Filters -->
    <div class="category-filters">
        <button type="button" class="category-btn">
            <i class="fas fa-filter"></i> Filtrar
        </button>
        <button type="button" class="category-btn">
            <i class="fas fa-file-export"></i> Exportar
        </button>
        <button type="button" class="category-btn top-month" onclick="window.location.href='/delmes'">
            <i class="fas fa-star" ></i> Top del mes
        </button>
        <!-- Botón para abrir el modal de editar categorías -->
        <button type="button" class="category-btn edit-categories" data-bs-toggle="modal" data-bs-target="#editarCategoriasModal">
            <i class="fas fa-edit"></i> Editar Categorías
        </button>
        
        <button type="button" class="category-btn marcas-categories" data-bs-toggle="modal" data-bs-target="#editarMarcasModal">
            <i class="fas fa-edit"></i> Editar Marcas
        </button>
        
        <!-- Modal de Editar Marcas -->
        <div class="modal fade" id="editarMarcasModal" tabindex="-1" aria-labelledby="editarMarcasLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 700px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarMarcasLabel">Editar Marcas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body p-4 bg-gray-50">
                                <form action="{{ route('marcas.store') }}" method="POST" class="mb-6 flex flex-col gap-3 md:flex-row md:items-end md:gap-4">
                                    @csrf
                                    <div class="flex-1">
                                        <input type="text" name="nombre" placeholder="Nombre de la Marca" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                                    </div>
                                    <div class="flex-1">
                                        <input type="text" name="descripcion" placeholder="Descripción de la Marca" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                                    </div>
                                    <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition w-full md:w-auto">Agregar Marca</button>
                                </form>
                                <div class="space-y-3">
                                    @foreach($marcas as $marca)
                                    <div class="flex flex-col md:flex-row md:items-center gap-2 bg-white p-3 rounded shadow-sm">
                                        <form action="{{ route('marcas.update', $marca) }}" method="POST" class="flex flex-col md:flex-row md:items-center gap-2 flex-1">
                                                @csrf
                                                @method('PUT')
                                                <input type="text" name="nombre" value="{{ $marca->nombre }}" required
                                                    class="px-2 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 w-full md:w-40" />
                                                <input type="text" name="descripcion" value="{{ $marca->descripcion }}" required
                                                class="px-2 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 w-full md:w-64" />
                                                <button type="submit"
                                                class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition w-full md:w-auto">Actualizar</button>
                                            </form>
                                            <form action="{{ route('marcas.destroy', $marca) }}" method="POST" class="flex-shrink-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition w-full md:w-auto"
                                                onclick="return confirm('¿Estás seguro de eliminar esta marca?')">Eliminar</button>
                                            </form>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                            <div class="modal-footer flex justify-end gap-2">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal de Editar Categorías -->
                <div class="modal fade" id="editarCategoriasModal" tabindex="-1" aria-labelledby="editarCategoriasLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 700px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editarCategoriasLabel">Editar Categorías</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body p-4 bg-gray-50">
                                <form action="{{ route('categorias.store') }}" method="POST" class="mb-6 flex flex-col gap-3 md:flex-row md:items-end md:gap-4">
                                    @csrf
                                    <div class="flex-1">
                                        <input type="text" name="nombre" placeholder="Nombre de la Categoría" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                                    </div>
                                    <div class="flex-1">
                                        <input type="text" name="descripcion" placeholder="Descripción de la Categoría" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                                    </div>
                                    <button type="submit"
                                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition w-full md:w-auto">Agregar Categoría</button>
                                    </form>
                                    <div class="space-y-3">
                                        @foreach($categorias as $categoria)
                                        <div class="flex flex-col md:flex-row md:items-center gap-2 bg-white p-3 rounded shadow-sm">
                                            <form action="{{ route('categorias.update', $categoria) }}" method="POST" class="flex flex-col md:flex-row md:items-center gap-2 flex-1">
                                                @csrf
                                                @method('PUT')
                                                <input type="text" name="nombre" value="{{ $categoria->nombre }}" required
                                                class="px-2 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 w-full md:w-40" />
                                                <input type="text" name="descripcion" value="{{ $categoria->descripcion }}" required
                                                    class="px-2 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 w-full md:w-64" />
                                                    <button type="submit"
                                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition w-full md:w-auto">Actualizar</button>
                                            </form>
                                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="flex-shrink-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition w-full md:w-auto"
                                                    onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">Eliminar</button>
                                            </form>
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                            <div class="modal-footer flex justify-end gap-2">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('productos.index') }}" 
                class="category-btn {{ !request('categoria') ? 'active' : '' }}">
                TODOS
            </a>
            
            @foreach($categorias as $categoria)
            <a href="{{ route('productos.index', ['categoria' => $categoria->id]) }}" 
            class="category-btn {{ request('categoria') == $categoria->id ? 'active' : '' }}">
            {{ strtoupper($categoria->nombre) }}
        </a>
        @endforeach
            </div>
            
            <!-- Filtros adicionales (ocultos inicialmente) -->
            <div class="row mt-3" style="display: none;" id="advancedFilters">
                <div class="col-md-3">
                    <select name="marca" class="form-control">
                        <option value="">Todas las marcas</option>
                        @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}" {{ request('marca') == $marca->id ? 'selected' : '' }}>
                            {{ $marca->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="number" name="precio_min" class="form-control" 
                    placeholder="Precio mín" value="{{ request('precio_min') }}">
                </div>
                <div class="col-md-3">
                    <input type="number" name="precio_max" class="form-control" 
                    placeholder="Precio máx" value="{{ request('precio_max') }}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                </div>
            </div>
        </form>
    </div>
    
    <!-- Products Grid -->
    <div class="products-grid">
        <!-- Add Product Card -->
        <div class="add-product-card" onclick="window.location='{{ route('productos.create') }}'" id="openModal">
            <div class="add-icon">
                <i class="fas fa-plus"></i>
            </div>
            <h5>Agregar Producto</h5>
            <p>Haz clic para crear un nuevo producto</p>
        </div>
        
        <!-- Product Cards -->
        @foreach($productos as $producto)
            <div class="product-card">
                <div class="product-image">
                    @if($producto->imagen)
                        <img src="{{ asset('images/productos/' . $producto->imagen) }}" 
                                alt="{{ $producto->nombre }}">
                    @else
                    <div class="d-flex align-items-center justify-content-center h-100 bg-light">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        @endif
                        
                        @if($producto->es_delmes)
                        <div class="product-badge">Del Mes ✓</div>
                        @endif
                    </div>
                    
                    <div class="product-info">
                        <h6 class="product-title">{{ $producto->nombre }}</h6>
                        <p class="product-description">{{ Str::limit($producto->descripcion, 80) }}</p>
                        
                        <div class="product-price">
                            <span class="price-current">${{ $producto->precio_nuevo }}</span>
                            @if($producto->precio_antes)
                            <span class="price-old">${{ $producto->precio_antes }}</span>
                        @endif
                    </div>
                    
                    <div class="product-meta">
                        {{ $producto->categoria->nombre }} - {{ $producto->marca->nombre }}
                    </div>
                    
                    <div class="stock-info">
                        <div class="stock-label">Stock: {{ $producto->stock->cantidad }}</div>
                        <div class="stock-bar">
                            <div class="stock-fill" style="width: {{ $producto->stock->stock_percentage }}%;"></div>
                        </div>
                    </div>
                    
                    <div class="product-actions">
                        <a href="{{ route('productos.show', $producto) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                            onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </div>
                    
                    <form action="{{ route('productos.toggle-delmes', $producto) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn {{ $producto->es_delmes ? 'btn-success' : 'btn-outline-success' }} btn-sm delmes-btn">
                            {{ $producto->es_delmes ? 'Del Mes ✓' : 'Agregar a Del Mes' }}
                        </button>
                    </form>
                    
                    <form action="{{ route('productos.comprar', $producto) }}" method="POST" class="purchase-form">
                        @csrf
                        <input type="number" name="cantidad" placeholder="Cant." min="1" 
                        max="{{ $producto->stock->cantidad }}" required>
                        <button type="submit" class="btn btn-primary btn-sm">Comprar</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-4">
            {{ $productos->links() }}
        </div>
    </div>
</section>
@push('scripts')
<script>
    // Toggle advanced filters
    document.querySelector('.category-btn').addEventListener('click', function() {
        const advancedFilters = document.getElementById('advancedFilters');
        advancedFilters.style.display = advancedFilters.style.display === 'none' ? 'block' : 'none';
    });
    
    // Auto-submit search
    const searchInput = document.querySelector('input[name="search"]');
    const form = document.getElementById('filterForm');

    searchInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault(); // evita el comportamiento por defecto si hay más de un input
            form.submit();     // envía el formulario manualmente
        }
    });


</script>
</body>
@endpush
@extends('layouts.admin')


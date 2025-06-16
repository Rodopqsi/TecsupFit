<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel Administrativo - Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <!-- Sidebar --> 
  <div class="sidebar "> 
    <div class="sidebar-header"> 
      <div class="sidebar-brand">
        <img src="{{ asset('imagenes/logo-principal.png') }}" alt="Logo" style="width: 100px; height: 100px; display: block; margin: 0 auto;">
      </div>
    </div>
    
    <div class="sidebar-menu">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-shopping-bag"></i>
            <span>Pedidos</span>
            <span class="badge bg-danger ms-auto"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-box-open"></i>
            <span>Productos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-users"></i>
            <span>Clientes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#configCollapse" role="button" aria-expanded="false">
            <i class="fas fa-cog"></i>
            <span>Configuración</span>
            <i class="fas fa-chevron-down ms-auto"></i>
          </a>
          <div class="collapse" id="configCollapse">
            <ul class="nav flex-column ps-4">
              <li class="nav-item">
                <a class="nav-link" href="#">Información</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cuenta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Redes sociales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Envíos</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    
    <div class="p-3 border-top border-secondary">
      <div class="d-flex align-items-center">
        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Usuario">
        <div>
            <small class="text-white fw-semibold">Administrador</small>
        </div>
        <a href="#" class="ms-auto text-white">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div class="search-bar w-75">
        <i class="fas fa-search"></i>
        <input type="text" class="form-control" placeholder="Buscar productos...">
      </div>
      <button class="btn btn-outline-primary" onclick="window.location.href='/'">
        <i class="fas fa-eye me-2"></i>Ver Tienda
      </button>
      <button class="btn btn-primary toggle-sidebar d-none">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="mb-0">Gestión de Productos</h4>
      <div>
        <button class="btn btn-sm btn-outline-secondary me-2">
          <i class="fas fa-filter me-1"></i>Filtrar
        </button>
        <button class="btn btn-sm btn-outline-secondary">
          <i class="fas fa-download me-1"></i>Exportar
        </button>
        <button class="btn btn-sm btn-outline-warning ms-2" onclick="document.getElementById('modalTopMes').style.display='block'">
          <i class="fas fa-star me-1"></i>Top del mes
        </button>

        <div id="modalTopMes" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.6);">
          <div style="background:#fff; margin:10% auto; padding:20px; width:1200px; border-radius:10px; position:relative; text-align:center;">
            <button onclick="document.getElementById('modalTopMes').style.display='none'" 
                    style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:20px; cursor:pointer;">&times;</button>


        <div class="admin-container">
            <div class="admin-header">
                <h1>Panel de Administración - Productos</h1>
                <button class="btn btn-primary" onclick="openCreateModal()">Agregar Nuevo Producto</button>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="products-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Categoría</th>
                            <th>Precio Original</th>
                            <th>Precio Oferta</th>
                            <th>Stock</th>
                            <th>Estado</th>
                            <th>Destacado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>
                                    <img src="{{ $producto->imagen ? asset('storage/' . $producto->imagen) : asset('imagenes/default-product.png') }}" 
                                            alt="{{ $producto->nombre }}" style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->marca }}</td>
                                <td>{{ $producto->categoria_display }}</td>
                                <td>S/ {{ number_format($producto->precio_original, 2) }}</td>
                                <td>S/ {{ number_format($producto->precio_oferta, 2) }}</td>
                                <td>{{ $producto->stock }}</td>
                                <td>
                                    <span class="badge {{ $producto->activo ? 'badge-success' : 'badge-danger' }}">
                                        {{ $producto->activo ? 'Activo' : 'Inactivo' }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge {{ $producto->destacado ? 'badge-primary' : 'badge-secondary' }}">
                                        {{ $producto->destacado ? 'Destacado' : 'Normal' }}
                                    </span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-info" onclick="editProduct({{ $producto->id }})">
                                        Editar
                                    </button>
                                    <form method="POST" action="{{ route('productos.toggle', $producto) }}" style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm {{ $producto->activo ? 'btn-warning' : 'btn-success' }}">
                                            {{ $producto->activo ? 'Desactivar' : 'Activar' }}
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('productos.destroy', $producto) }}" style="display: inline;" 
                                          onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="text-center">No hay productos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="pagination-wrapper">
                {{ $productos->links() }}
            </div>
        </div>

        <!-- Modal para Crear/Editar Producto -->
        <div id="productModal" class="modal" style="display: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 id="modalTitle">Agregar Nuevo Producto</h2>
                    <span class="close" onclick="closeModal()">&times;</span>
                </div>
                <form id="productForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="methodField"></div>

                    <div class="form-group">
                        <label for="nombre">Nombre del Producto:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" id="marca" name="marca" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="precio_original">Precio Original:</label>
                            <input type="number" id="precio_original" name="precio_original" step="0.01" min="0" required>
                        </div>

                        <div class="form-group">
                            <label for="precio_oferta">Precio Oferta:</label>
                            <input type="number" id="precio_oferta" name="precio_oferta" step="0.01" min="0" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="stock">Stock:</label>
                            <input type="number" id="stock" name="stock" min="0" required>
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <select id="categoria" name="categoria" required>
                                <option value="">Seleccionar categoría</option>
                                @foreach($categorias as $key => $nombre)
                                    <option value="{{ $key }}">{{ $nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input type="file" id="imagen" name="imagen" accept="image/*">
                        <div id="imagePreview"></div>
                    </div>

                    <div class="form-checkboxes">
                        <div class="checkbox-group">
                            <input type="hidden" name="activo" value="0">
                            <input type="checkbox" id="activo" name="activo" value="1" checked>
                            <label for="activo">Producto Activo</label>
                        </div>

                        <div class="checkbox-group">
                            <input type="hidden" name="destacado" value="0">
                            <input type="checkbox" id="destacado" name="destacado" value="1">
                            <label for="destacado">Producto Destacado</label>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
        function openCreateModal() {
            document.getElementById('modalTitle').textContent = 'Agregar Nuevo Producto';
            document.getElementById('productForm').action = '{{ route("productos.store") }}';
            document.getElementById('methodField').innerHTML = '';
            document.getElementById('productForm').reset();
            document.getElementById('imagePreview').innerHTML = '';
            document.getElementById('productModal').style.display = 'block';
        }

        function editProduct(id) {
            fetch(`/admin/productos/${id}/edit`)
                .then(response => response.json())
                .then(producto => {
                    document.getElementById('modalTitle').textContent = 'Editar Producto';
                    document.getElementById('productForm').action = `/admin/productos/${id}`;
                    document.getElementById('methodField').innerHTML = '@method("PUT")';

                    // Llenar el formulario con los datos del producto
                    document.getElementById('nombre').value = producto.nombre;
                    document.getElementById('marca').value = producto.marca;
                    document.getElementById('descripcion').value = producto.descripcion || '';
                    document.getElementById('precio_original').value = producto.precio_original;
                    document.getElementById('precio_oferta').value = producto.precio_oferta;
                    document.getElementById('stock').value = producto.stock;
                    document.getElementById('categoria').value = producto.categoria;
                    document.getElementById('activo').checked = producto.activo;
                    document.getElementById('destacado').checked = producto.destacado;

                    // Mostrar imagen actual si existe
                    if (producto.imagen) {
                        document.getElementById('imagePreview').innerHTML = 
                            `<img src="/storage/${producto.imagen}" alt="Imagen actual" style="max-width: 200px; max-height: 200px; margin-top: 10px;">`;
                    }

                    document.getElementById('productModal').style.display = 'block';
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error al cargar los datos del producto');
                });
        }

        function closeModal() {
            document.getElementById('productModal').style.display = 'none';
        }

        // Cerrar modal al hacer click fuera de él
        window.onclick = function(event) {
            const modal = document.getElementById('productModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        // Preview de imagen
        document.getElementById('imagen').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('imagePreview');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="Preview" style="max-width: 200px; max-height: 200px; margin-top: 10px;">`;
                }
                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = '';
            }
        });
        </script>
          </div>
        </div>

        
      </div>
    </div>

    <div class="mb-4">
      <button class="btn btn-sm btn-danger me-2">
        <i class="fas fa-edit me-1"></i>Editar Categorías
      </button>
      <button class="btn btn-sm category-btn active">TODOS</button>
      <button class="btn btn-sm category-btn">CRERATINAS</button>
      <button class="btn btn-sm category-btn">PROTEÍNAS</button>
      <button class="btn btn-sm category-btn">GANADORES</button>
      <button class="btn btn-sm category-btn">QUEMADORES</button>
      <button class="btn btn-sm category-btn">ENERGÉTICAS</button>
      <button class="btn btn-sm category-btn">VITAMINAS</button>
    </div>

    <div class="row g-4">
      <!-- Add Product Card -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="add-product-card" data-bs-toggle="modal" data-bs-target="#addProductModal">
          <i class="fas fa-plus-circle"></i>
          <h5>Agregar Producto</h5>
          <small class="text-muted">Haz clic para crear un nuevo producto</small>
        </div>
      </div>
      <div>
        @component('components.creatina')
        @endcomponent
      </div>
  <!-- Add Product Modal -->
  <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Agregar Nuevo Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Categoría</label>
                <select class="form-select">
                  <option>Seleccionar categoría</option>
                  <option>CREATINAS</option>
                  <option>PROTEÍNAS</option>
                  <option>GANADORES DE PESO</option>
                  <option>QUEMADORES DE GRASA</option>
                  <option>BARRAS ENERGÉTICAS</option>
                  <option>VITAMINAS Y OTROS</option>
                </select>
              </div>
            </div>
            
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Precio Regular</label>
                <input type="number" class="form-control" placeholder="S/.0.00">
              </div>
              <div class="col-md-6">
                <label class="form-label">Precio de Oferta</label>
                <input type="number" class="form-control" placeholder="S/.0.00">
              </div>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Descripción</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Imágenes del Producto</label>
              <div class="border rounded p-3 text-center">
                <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-2"></i>
                <p class="mb-1">Arrastra y suelta las imágenes aquí</p>
                <small class="text-muted">o haz clic para seleccionar archivos</small>
              </div>
            </div>
            
            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Stock</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">SKU</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Peso (g)</label>
                <input type="number" class="form-control">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Guardar Producto</button>
        </div>
      </div>
    </div>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle sidebar on mobile
    document.querySelector('.toggle-sidebar').addEventListener('click', function() {
      document.querySelector('.sidebar').classList.toggle('active');
    });
    
    // Activate category buttons
    document.querySelectorAll('.category-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });
    
    // Show/hide product actions on hover
    document.querySelectorAll('.product-card').forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.querySelector('.product-actions').style.opacity = '1';
      });
      
      card.addEventListener('mouseleave', function() {
        this.querySelector('.product-actions').style.opacity = '0';
      });
    });
  </script>
</body>
</html>
<style>
    
:root {
      --sidebar-width: 280px;
      --primary-color:rgb(0, 0, 0);
      --secondary-color: #34495e;
      --accent-color: #e74c3c;
      --light-bg: #f8f9fa;
    }
    
    body {
      min-height: 100vh;
      display: flex;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: var(--light-bg);
    }
    
    .sidebar {
      width: var(--sidebar-width);
      background-color: var(--primary-color);
      color: white;
      padding: 0;
      display: flex;
      flex-direction: column;
      transition: all 0.3s;
    }
    
    .sidebar-header {
      padding: 20px;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    
    .sidebar-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.2rem;
      font-weight: 600;
    }
    
    .sidebar-brand img {
      height: 40px;
    }
    
    .sidebar-menu {
      flex: 1;
      padding: 20px 0;
      overflow-y: auto;
    }
    
    .nav-item {
      margin-bottom: 5px;
    }
    
    .nav-link {
      color: rgba(255,255,255,0.8);
      padding: 12px 20px;
      border-left: 3px solid transparent;
      transition: all 0.2s;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .nav-link:hover, .nav-link.active {
      color: white;
      background-color: rgba(255,255,255,0.1);
      border-left-color: var(--accent-color);
    }
    
    .nav-link i {
      width: 20px;
      text-align: center;
    }
    
    .dropdown-menu {
      background-color: var(--secondary-color);
      border: none;
      border-radius: 0;
    }
    
    .dropdown-item {
      color: rgba(255,255,255,0.8);
      padding: 8px 20px 8px 40px;
    }
    
    .dropdown-item:hover {
      background-color: rgba(255,255,255,0.1);
      color: white;
    }
    
    .main-content {
      flex: 1;
      padding: 20px;
      transition: all 0.3s;
    }
    
    .search-bar {
      position: relative;
    }
    
    .search-bar input {
      padding-left: 40px;
      border-radius: 20px;
    }
    
    .search-bar i {
      position: absolute;
      left: 15px;
      top: 12px;
      color: #6c757d;
    }
    
    .category-btn {
      border-radius: 20px;
      padding: 5px 15px;
      margin-right: 8px;
      margin-bottom: 8px;
      font-size: 0.85rem;
      border: 1px solid #dee2e6;
    }
    
    .category-btn.active {
      background-color: var(--accent-color);
      color: white;
      border-color: var(--accent-color);
    }
    
    .add-product-card {
      height: 100%;
      min-height: 300px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border: 2px dashed #adb5bd;
      border-radius: 10px;
      background-color: white;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .add-product-card:hover {
      border-color: var(--accent-color);
      background-color: rgba(231, 76, 60, 0.05);
    }
    
    .add-product-card i {
      font-size: 2rem;
      color: var(--accent-color);
      margin-bottom: 10px;
    }
    
    .product-card {
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      transition: all 0.3s;
      background-color: white;
    }
    
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .product-img {
      height: 180px;
      object-fit: contain;
      padding: 20px;
      background-color: #f8f9fa;
    }
    
    .product-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 0.7rem;
    }
    
    .product-actions {
      position: absolute;
      top: 10px;
      left: 10px;
      opacity: 0;
      transition: opacity 0.3s;
    }
    
    .product-card:hover .product-actions {
      opacity: 1;
    }
    
    .action-btn {
      width: 30px;
      height: 30px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin-right: 5px;
    }
    
    .action-btn.edit {
      color: #3498db;
    }
    
    .action-btn.delete {
      color: var(--accent-color);
    }
    
    .price {
      font-weight: 600;
    }
    
    .original-price {
      text-decoration: line-through;
      color: #6c757d;
      font-size: 0.9rem;
    }
    
    .current-price {
      color: var(--accent-color);
    }
    
    .quantity-control {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 10px 0;
    }
    
    .quantity-btn {
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #dee2e6;
      background-color: white;
    }
    
    .quantity-input {
      width: 40px;
      height: 30px;
      text-align: center;
      border-top: 1px solid #dee2e6;
      border-bottom: 1px solid #dee2e6;
      border-left: none;
      border-right: none;
    }
    
    @media (max-width: 992px) {
      .sidebar {
        margin-left: -280px;
        position: fixed;
        z-index: 1000;
        height: 100vh;
      }
      
      .sidebar.active {
        margin-left: 0;
      }
      
      .main-content {
        margin-left: 0;
      }
      
      .toggle-sidebar {
        display: block !important;
      }
    }
    .admin-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #f8f9fa;
    font-weight: bold;
}

.btn {
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    margin: 2px;
}

.btn-primary { background-color: #007bff; color: white; }
.btn-info { background-color: #17a2b8; color: white; }
.btn-success { background-color: #28a745; color: white; }
.btn-warning { background-color: #ffc107; color: black; }
.btn-danger { background-color: #dc3545; color: white; }
.btn-secondary { background-color: #6c757d; color: white; }

.btn-sm {
    padding: 4px 8px;
    font-size: 12px;
}

.badge {
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
}

.badge-success { background-color: #28a745; color: white; }
.badge-danger { background-color: #dc3545; color: white; }
.badge-primary { background-color: #007bff; color: white; }
.badge-secondary { background-color: #6c757d; color: white; }

.modal {
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 0;
    border-radius: 8px;
    width: 90%;
    max-width: 600px;
    max-height: 90vh;
    overflow-y: auto;
}

.modal-header {
    padding: 20px;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.close {
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover {
    color: #000;
}

.modal-content form {
    padding: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-row {
    display: flex;
    gap: 15px;
}

.form-row .form-group {
    flex: 1;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input, .form-group select, .form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-checkboxes {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.checkbox-group {
    display: flex;
    align-items: center;
    gap: 5px;
}

.checkbox-group input[type="checkbox"] {
    width: auto;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 20px;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.alert ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
</style>
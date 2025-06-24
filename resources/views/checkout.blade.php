<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<header>@component('components.navtecsupfit') @endcomponent</header>
<div style="background-color:white; display:flex; padding:5rem; justify-content:center; gap:5rem;">
  <!-- Formulario -->
  <div>
    <h2 class="text-xl font-bold mb-4">Detalles de facturación</h2>
    <form action="{{ route('carrito.aplicar-cupon') }}" method="POST">
      @csrf
      <label class="block mb-2 font-bold">¿Tienes un cupón?</label>
      <input type="text" name="cupon" class="border p-2 rounded w-1/2" placeholder="Ingresa tu cupón">
      <button type="submit" class="ml-2 bg-blue-600 text-white px-4 py-2 rounded">Aplicar cupón</button>
    </form>
      
      <form class="space-y-4" action="procesar_pago.php" method="POST">
        <!-- Datos del cliente -->
       
        <section class="max-w-xl mx-auto p-6 rounded shadow space-y-4">
          <form id="formulario">
  <script>
    const ubigeo = {
      
    "Lima": ["Lima", "Ate", "Callao", "San Isidro", "Miraflores", "Comas", "Los Olivos", "Surco", "San Borja", "Villa El Salvador", "Villa María del Triunfo", "San Juan de Lurigancho", "San Juan de Miraflores", "Chorrillos", "Barranco", "La Molina", "Jesús María", "Pueblo Libre"],
    "Arequipa": ["Arequipa", "Cayma", "Cerro Colorado", "Mariano Melgar", "Yanahuara", "José Luis Bustamante y Rivero", "Miraflores", "Paucarpata", "Hunter"],
   "Cusco": ["Cusco", "San Jerónimo", "Wanchaq", "Santiago", "San Sebastián", "Poroy", "Saylla"],
   "La Libertad": ["Trujillo", "Florencia de Mora", "El Porvenir", "La Esperanza", "Víctor  Larco", "Huanchaco", "Moche", "Salaverry"],
   "Piura": ["Piura", "Sullana", "Talara", "Paita", "Catacaos", "Sechura", "La Unión", "Tambogrande"],
   "Junín": ["Huancayo", "El Tambo", "Chilca", "Huayucachi", "Sicaya", "Pilcomayo", "Chongos  Bajo"],
   "Lambayeque": ["Chiclayo", "José Leonardo Ortiz", "La Victoria", "Lambayeque", "Ferreñafe", "Pimentel"],
   "Tacna": ["Tacna", "Alto de la Alianza", "Ciudad Nueva", "Gregorio Albarracín"],
   "Puno": ["Puno", "Juliaca", "Azángaro", "Ilave", "Ayaviri"],
   "Ancash": ["Chimbote", "Huaraz", "Nuevo Chimbote", "Casma", "Caraz"],
   "Ica": ["Ica", "Chincha Alta", "Pisco", "Nazca", "Palpa"],
   "Callao": ["Callao", "Bellavista", "La Perla", "Carmen de La Legua", "Ventanilla", "Mi Perú"],
   "San Martín": ["Tarapoto", "Moyobamba", "Lamas", "Bellavista", "Juanjuí"],
   "Loreto": ["Iquitos", "Punchana", "Belén", "San Juan Bautista", "Nauta"],
   "Ucayali": ["Pucallpa", "Yarinacocha", "Manantay"],
   "Madre de Dios": ["Puerto Maldonado", "Tambopata", "Inambari"],
   
   "Huánuco": ["Huánuco", "Tingo María", "La Unión", "Ambo", "Panao"],
   "Apurímac": ["Abancay", "Andahuaylas", "Aymaraes", "Antabamba"],
      "Ayacucho": ["Ayacucho", "Huamanga", "Cangallo", "Huanta"],
      "Cajamarca": ["Cajamarca", "Jaén", "San Ignacio", "Celendín"],
      "Pasco": ["Pasco", "Oxapampa", "Villa Rica"],
      "Tumbes": ["Tumbes", "Zarumilla", "Contralmirante Villar"]
    };
    
    window.addEventListener('DOMContentLoaded', () => {
      const regionSelect = document.querySelector('select[name="region"]');
      const distritoSelect = document.querySelector('select[name="distrito"]');
      
      regionSelect.innerHTML = '<option value="">Selecciona una región</option>';
      for (const region in ubigeo) {
        const option = document.createElement('option');
        option.value = region;
        option.textContent = region;
        regionSelect.appendChild(option);
      }

      regionSelect.addEventListener('change', () => {
        const region = regionSelect.value;
        distritoSelect.innerHTML = '<option value="">Selecciona un distrito</option>';
        if (ubigeo[region]) {
          ubigeo[region].forEach(distrito => {
            const option = document.createElement('option');
            option.value = distrito;
            option.textContent = distrito;
            distritoSelect.appendChild(option);
          });
        }
      });
    });
    </script>
</head>
<div class="flex gap-4">
  <input type="text" name="nombre" placeholder="Nombre" class="border w-1/2 p-2" required>
  <input type="text" name="apellidos" placeholder="Apellidos" class="border w-1/2 p-2" required>
</div>
<input type="text" name="dni" placeholder="DNI" class="border w-full p-2" required>
<select name="region" class="border w-full p-2" required></select>
<select name="distrito" class="border w-full p-2" required></select>
<input type="text" name="direccion" placeholder="Dirección de la calle" class="border w-full p-2">
<input type="text" name="departamento" placeholder="Departamento, habitación, etc." class="border w-full p-2">
<input type="text" name="telefono" placeholder="Teléfono" class="border w-full p-2">
<input type="email" name="email" placeholder="Correo electrónico" class="border w-full p-2">
<textarea name="notas" class="border w-full p-2" placeholder="Notas del pedido (opcional)"></textarea>
</div>
<div>
  <!-- Resumen de pedido -->
  <div >
    <h2 class="text-xl font-bold mb-4">Su pedido</h2>
    <div class="border p-4 space-y-4">
      <div class="flex justify-between border-b pb-2">
      @if(session('success'))
        <p>{{ session('success') }}</p>
      @endif

      @if(empty($carrito))
        <p>El carrito está vacío.</p>
      @else
        @foreach($carrito as $id => $item)
        <div style="display:flex; width:300px">
              <span>Producto: {{ $item['nombre'] }}</span><br>
              <span class="font-semibold">${{ $item['precio'] }}</span>
        </div>
        @endforeach

      </div>
      <p class="text-green-600">Cupón aplicado: {{ session('cupon_codigo') }} - Descuento total: S/ {{ number_format(session('descuento'), 2) }}</p>
      <div class="flex justify-between">
        <span>Subtotal</span>
        <span>S/ 179.00</span>
      </div>
      <div>
        <p class="font-bold mt-4 mb-2">Envío</p>
        <label class="block"><input type="radio" name="envio" checked> Olva (S/15.00)</label>
        <label class="block"><input type="radio" name="envio"> Shalom (Pago en destino)</label>
      </div>
      <div class="flex justify-between border-t pt-2">
        <span class="font-bold text-lg">Total</span>
        <span class="text-red-600 font-bold text-lg">Total: S/ {{ number_format($total, 2) }}</span>
      </div>
    </div>
    <div class="bg-white text-black p-6 max-w-7xl mx-auto mt-6 grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <div class="mt-4">
        <p>Subtotal: S/ {{ number_format($total, 2) }}</p>
        @if($descuento)
        <p class="text-green-600">Descuento: -S/ {{ number_format($descuento, 2) }}</p>
        @endif
        <p class="text-xl font-bold">Total a pagar: S/ {{ number_format($totalConDescuento, 2) }}</p>
      </div>
      <!-- Contenedor del botón -->
      <div id="paypal-button-container"></div>
      
      <!-- SDK de PayPal -->
      <script src="https://www.paypal.com/sdk/js?client-id=AUBcJCnp5qlm26Nx4UMFg5b_iGTKLHRcOdYVyEf485Gs0r4p91bFecfuOWdNur02cXi2HHXaN4OAAHAL&currency=USD"></script>
      
      <script>
        const total = {{ number_format($totalConDescuento, 2, '.', '') }};

    paypal.Buttons({
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
                    amount: {
                        value: total.toFixed(2)  // Convierte a string con 2 decimales
                    }
                }]
              });
            },
            onApprove: function(data, actions) {
              return actions.order.capture().then(function(details) {
                alert('Gracias por tu compra, ' + details.payer.name.given_name + '!');
                // Redirigir o guardar en backend si deseas
                window.location.href = "{{ route('gracias') }}";
              });
            }
          }).render('#paypal-button-container');
        </script>
</div>
</div>
</div>
</div>
@endif

<footer>@include('components.footer')</footer>
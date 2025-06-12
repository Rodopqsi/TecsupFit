<!-- barra de inicio -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/promociones.css">
    <title>Document</title>
</head>
<body>
    <header>
        @component('components.navtecsupfit') 

        @endcomponent
    </header>

<!-- carrusel -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="10000">
                <img src="imagenes/ImagenHeader/carrusel1 (2).png" class="d-block w-100" alt="...">
                <a href="/quemadores_de_grasa.html" class="boton-imagen-inicio"></a>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <img src="imagenes/ImagenHeader/carrusel2 (2).png" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="imagenes/ImagenHeader/carrusel3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    

    





<!-- productos -->
    <section class="container">
        <div class="header"></div>
        <div class="feactures">
            <div class="card">
                <img src="imagenes/Creatina-removebg-preview.png" alt="Creatina Ronnie Coleman">
                <h5>RC RONNIE COLEMAN SIGNATURE SERIES</h5>
                <h3>Creatina Ronnie Coleman 1kg</h3>
                <p class="old-price">S/ 249.00</p>
                <p class="price">S/ 215.00</p>
                <div class="cart-controls">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <button class="add-btn">Agregar al carrito</button>
                  </div>
                  <p class="stock">Quedan 3 unidades</p>
            </div>
            <div class="card">
                <img src="img/MuscleTech-removebg-preview.png" alt="Creatine chews">
                <h5>MUSCLETECH</h5>
                <h3>MuscleTech Creatine Chews - Creapure Monohydrate Supplement for Muscle</h3>
                <p class="old-price">S/ 209.00</p>
                <p class="price">S/ 149.00</p>
                <div class="cart-controls">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <button class="add-btn">Agregar al carrito</button>
                  </div>
                  <p class="stock">Quedan 8 unidades</p>
            </div>
            <div class="card">
                <img src="img/Carnivor_Protein-removebg-preview.png" alt="Carnivor Protein">
                <h5>Musclemeds</h5>
                <h3>Carnivor Protein 4.5lbs</h3>
                <p class="old-price">S/ 349.00</p>
                <p class="price">S/ 229.00</p>
                <div class="cart-controls">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <button class="add-btn">Agregar al carrito</button>
                  </div>
                  <p class="stock">Quedan 8 unidades</p>
            </div>
            <div class="card">
                <img src="img/Whey_Protein-removebg-preview.png" alt="whey protein">
                <h5>MUSCLETECH</h5>
                <h3>Whey Protein 5 Kilos / Ganador de Masa Muscular</h3>
                <p class="old-price">S/ 250.00</p>
                <p class="price">S/ 145.00</p>
                <div class="cart-controls">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <button class="add-btn">Agregar al carrito</button>
                  </div>
                  <p class="stock">Quedan 8 unidades</p>
            </div>
            <div class="card">
                <img src="img/Quemador_De_Grasa_Supreme-removebg-preview.png" alt="Quemador de Grasa Supreme">
                <h5>YABA LABS</h5>
                <h3>Fire Xt / Quemador De Grasa Supreme 60 Cápsulas</h3>
                <p class="old-price">S/ 259.00</p>
                <p class="price">S/ 188.00</p>
                <div class="cart-controls">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <button class="add-btn">Agregar al carrito</button>
                  </div>
                  <p class="stock">Quedan 6 unidades</p>
            </div>
            <div class="card">
                <img src="img/Black_Viper-removebg-preview.png" alt="Black Viper">
                <h5>MUSCLETECH</h5>
                <h3>Black Viper Quemador De Grasas 90caps</h3>
                <p class="old-price">S/ 199.00</p>
                <p class="price">S/ 129.00</p>
                <div class="cart-controls">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <button class="add-btn">Agregar al carrito</button>
                  </div>
                  <p class="stock">Quedan 8 unidades</p>
            </div>
            <div class="card">
                <img src="img/Proteina-removebg-preview.png" alt="Proteina Ganador">
                <h5>MUTANT</h5>
                <h3>Proteina Ganador Mutant Mass 5 Libras Sabor Vainilla</h3>
                <p class="old-price">S/ 249.00</p>
                <p class="price">S/ 199.00</p>
                <div class="cart-controls">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <button class="add-btn">Agregar al carrito</button>
                  </div>
                  <p class="stock">Quedan 8 unidades</p>
            </div>
        </div>
    </section>


<!-- parte final -->

    <footer>
        <div class="promo-banner">
          50 % de descuento en compras mayores a 200 soles y llévate una barrita gratis en la segunda compra
        </div>
      
        <div class="footer-container">
          <div class="subscribe-section">
            <h4>Suscríbete y mantente al día</h4>
            <div class="subscribe-form">
              <input type="email" placeholder="Tu correo electrónico">
              <button>Suscríbete</button>
            </div>
            <label><input type="checkbox"> Aceptar los términos y condiciones y la política de privacidad</label>
          </div>
      
          <div class="footer-links">
            <div>
              <h5>LA EMPRESA</h5>
              <ul>
                <li>Catálogo</li>
                <li>Marcas</li>
                <li>Novedades</li>
                <li>Distribuidores</li>
                <li>Blog</li>
              </ul>
            </div>
      
            <div>
              <h5>AYUDA AL CLIENTE</h5>
              <ul>
                <li>Política de envíos</li>
                <li>Política de devoluciones</li>
                <li>Política de privacidad</li>
                <li>Términos y condiciones</li>
              </ul>
                <a href="/reclamos" >
                <img src="img/imagen 9.png" alt="Libro de reclamaciones" style="width: 130px; margin-top: 10px;">
                </a>
            </div>
      
            <div>
              <h5>LLÁMANOS</h5>
              <p>(+51) 956 104 920</p>
              <p>Escríbenos<br>contacto@nuttroforma.pe</p>
              <div class="socials">
                <a href="#"><i class="ri-facebook-line"></i></a>
                <!-- puedes poner el numero del telefono aqui como ejemplo hay un numero al azar -->
                <a href="https://wa.me/975135069" target="_blank"><i class="ri-whatsapp-line"></i></a>
                <a href="#"><i class="ri-tiktok-line"></i></a>
            </div>
            </div>
          </div>
        </div>
      
        <div class="footer-bottom">
          Copyright © 2025 TecsupFit. Todos los derechos reservados.
        </div>
      </footer>      

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
<style>
  
  /* barra de inicio */
body {
    margin: 0;
    padding: 0;
    background-color: black;
}

/* carrusel */
#carouselExampleSlidesOnly {
  width: 100%;
  height: 163px;
  transition: transform 10s ease-in-out;
  padding-top: 8rem;
  margin-bottom: 8rem;
}

.carousel-inner svg {
  width: 100%;
  height: 100%;

}

/* carrusel */
.carrucel-imagen img {
    width: 1519px;
}


/* productos */
.container {
  max-width: 100%;
  margin: 0;
  padding: 5rem 2rem;
  background-color: #fff;
  border: none;
  box-shadow: none;
}

.feactures{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.feactures .card {
    background-color: #fff;
    padding: 1rem;
    border-radius: 20px;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5); 
}

.feactures .card:hover{
    background-color: #cfcfcf;
    transform: scale(1.05);
}

.feactures .card img{
    width: auto;
    height: auto;
    margin-bottom: 10px;
}

.feactures .card h5{
    margin-bottom: 0.5rem;
    color: #000000;
    font-size: 1.2rem;
    font-weight: 600;
}

.feactures .card h3 {
    font-size: 16px;
    margin: 10px 0;
  }

.feactures .card p,h3 {
    align-self: flex-start;
  }
  .old-price {
    text-decoration: line-through;
    color: #aaa;
    margin: 5px 0;
  }
  
  .price {
    color: #0077cc;
    font-size: 18px;
    font-weight: bold;
    margin: 5px 0;
  }
  
  .cart-controls {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    margin: 10px 0;
  }
  
  .cart-controls button {
    padding: 5px 10px;
    border: none;
    background-color: #b30000;
    color: white;
    cursor: pointer;
    border-radius: 3px;
  }
  
  .add-btn {
    color: white;
  }
  
  .stock {
    font-size: 12px;
    color: #666;
  }
  
/* parte  final */
  footer {
    background-color: #000;
    color: white;
    font-size: 14px;
    padding-top: 0;
  }
  
  .promo-banner {
    background-color: #b30000;
    color: #fff;
    padding: 15px;
    text-align: center;
    font-style: italic;
  }
  
  .footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 30px;
    gap: 30px;
  }
  
  .subscribe-section {
    flex: 1 1 250px;
    max-width: 300px;
  }
  
  .subscribe-section h4 {
    margin-bottom: 10px;
  }
  
  .subscribe-form {
    display: flex;
    margin-bottom: 10px;
  }
  
  .subscribe-form input {
    flex: 1;
    padding: 8px;
  }
  
  .subscribe-form button {
    background-color: #888;
    color: white;
    border: none;
    padding: 8px 15px;
    cursor: pointer;
  }
  
footer .social{
    display: flex;
    align-items: center;
    gap: 1rem;
}

footer .socials a{
    color: #ffffff;
    border: 1px solid #ffffff;
    padding: 6px 8px;
    font-size: 1.25rem;
    border-radius: 100%;
    transition: all 0.3 ease;
}

footer .socials a:hover{
    color: #dddddd;
    border: 1px solid #dddddd;
    background-color: 2rem;
    font-size: 1.2rem;
    font-weight: 500;
}

  .subscribe-section label {
    font-size: 12px;
  }
  
  .footer-links {
    display: flex;
    flex: 2;
    justify-content: space-around;
    gap: 30px;
  }
  
  .footer-links div h5 {
    margin-bottom: 10px;
  }
  
  .footer-links ul {
    list-style: none;
    padding: 0;
  }
  
  .footer-links ul li {
    margin-bottom: 5px;
  }
  
  .social-icons img {
    width: 24px;
    margin-right: 10px;
  }
  
  .footer-bottom {
    text-align: center;
    border-top: 1px solid #444;
    padding: 10px 0;
    font-size: 12px;
  }
</style>
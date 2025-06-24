<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/promociones.css">
    <title>Nosotros</title>
</head>
<body>
    <header style="background-color: #000000;">
        @component('components.navtecsupfit') 

        @endcomponent
    </header>
    <section class="nosotros-header" style="background-color:rgb(9, 8, 8)">
    <div class="texto">
      <h1>Nosotros</h1>
      <p>
        Somos TecsUpFit, la evolución inteligente del rendimiento. Nacimos para transformar tu bienestar 
         con suplementos de alta tecnología,<br> diseñados científicamente para potenciar tu cuerpo y mente. 
          Conectamos lo mejor de la innovación, salud y <br> rendimiento físico en cada fórmula.
      </p>
    </div>
    <div class="imagen-header">
      <img src="{{ asset('imagenes/ImagenHeader/Imagen16.png') }}">
    </div>
  </section>

  <section class="nosotros-cards">
    <div class="card">
      <img src="{{ asset('imagenes/Imagen1-carrusel.jpg') }}">
      <h3>NADA QUE OCULTAR</h3>
      <p>
        En TecsUpFit no tenemos nada que ocultar. Creemos en la transparencia total, por eso cada ingrediente y fórmula están respaldados por la ciencia. Sin rellenos, sin promesas vacías, solo calidad, tecnología y salud en su máxima expresión.
      </p>
    </div>

    <div class="card">
      <img src="{{ asset('imagenes/ImagenHeader/imagen 12.png') }}">
      <h3>MAXIMA CALIDAD</h3>
      <p>
        Los suplementos de TesupFit están hechos con ingredientes de la más alta calidad. Investigamos y desarrollamos continuamente para ayudarte a lograr tus objetivos personales.
      </p>
    </div>

    <div class="card">
      <img src="{{ asset('imagenes/imagenHeader/imagen 14.png') }}">
      <h3>MÁS QUE MARCA, UNA COMUNIDAD</h3>
      <p>
        Somos una comunidad de atletas y soñadores que comparten un mismo propósito: ser mejores cada día. En TecsUpFit entrenamos con propósito, nos alimentamos con inteligencia y vivimos con disciplina.
      </p>
    </div>

    <div class="card">
      <img src="{{ asset('imagenes/imagenHeader/imagen 13.png') }}">
      <h3>NATURALMENTE PODEROSOS</h3>
      <p>
        Seleccionamos ingredientes puros, potentes y respaldados por la ciencia. En cada cápsula, polvo o tableta, llevas lo mejor de la naturaleza y la innovación.
      </p>
    </div>
  </section>


<!-- parte final -->

    <footer>
        <div class="promo-banner">
          50 % de descuento en compras mayores a 200 soles y llévate una barrita gratis en la segunda compra
        </div>
      
        <div>
    @component('components.footer')
    @endcomponent
</div>



  </section>
  </body>
</html>



<style>
.nosotros-header {
  display: flex;
  background-color: #000;
  color: #fff;
  padding: 40px 50px;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.nosotros-header .texto {
  flex: 1;
  min-width: 300px;
  margin-right: 60px;
}

.nosotros-header h1 {
  font-size: 2.5em;
  margin-bottom: 20px;
}

.nosotros-header p {
  font-size: 1.1em;
  line-height: 1.6;
}

.imagen-header img {
  max-width: 250px;
  height: auto;
  margin-right: 60px;
}

.nosotros-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  padding: 60px 80px;
  gap: 30px;
  background-color: #fff;
}



.card {
  background-color: #fff;
  padding: 1rem;
  border-radius: 20px;
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
}

.card:hover {
  background-color: #cfcfcf;
    transform: scale(1.05);
}

.card img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  margin-bottom: 15px;
}

.card h3 {
  font-size: 1.2em;
  margin: 10px 0;
  color: #000;
}

.card p {
  font-size: 0.95em;
  line-height: 1.5;
  color: #333;
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
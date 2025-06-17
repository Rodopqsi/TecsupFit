<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <title>TecsupFit</title>
</head>
<body> 
    <header>
        @component('components.navtecsupfit') 

        @endcomponent
    </header>
    <button id="toggleBtn" onclick="toggleBtnFunc()">PE</button>
    <script>
        let toggleState = 0;
        function toggleBtnFunc() {
            const btn = document.getElementById('toggleBtn');
            if (toggleState === 0) {
                document.body.style.backgroundColor = 'white';
                btn.textContent = 'PO';
                toggleState = 1;
            } else {
                document.body.style.backgroundColor = 'black';
                btn.textContent = 'PE';
                toggleState = 0;
            }
        }
    </script>


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

    
    <section class="etiquetas">
        <div class="carta1">
            <svg width="69" height="69" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23 48.875V43.125H29.2531C29.0135 44.0833 28.8583 45.0417 28.7874 46C28.7165 46.9583 28.728 47.9167 28.8219 48.875H23ZM23 63.25C19.0229 63.25 15.6333 61.848 12.8311 59.0439C10.029 56.2398 8.62692 52.8502 8.625 48.875V23C7.04375 23 5.69058 22.4375 4.5655 21.3124C3.44042 20.1873 2.87692 18.8332 2.875 17.25V11.5C2.875 9.91875 3.4385 8.56558 4.5655 7.4405C5.6925 6.31542 7.04567 5.75192 8.625 5.75H37.375C38.9562 5.75 40.3104 6.3135 41.4374 7.4405C42.5644 8.5675 43.1269 9.92067 43.125 11.5V17.25C43.125 18.8313 42.5625 20.1854 41.4374 21.3124C40.3123 22.4394 38.9582 23.0019 37.375 23V31.6969C36.225 32.4156 35.1708 33.2542 34.2125 34.2125C33.2542 35.1708 32.4156 36.225 31.6969 37.375H23V31.625H31.625V23H14.375V48.875C14.375 51.2708 15.2135 53.3073 16.8906 54.9844C18.5677 56.6615 20.6042 57.5 23 57.5C24.4375 57.5 25.7437 57.1885 26.9186 56.5656C28.0935 55.9427 29.0873 55.0802 29.9 53.9781C30.2833 54.9365 30.7146 55.8469 31.1938 56.7094C31.6729 57.5719 32.2479 58.4104 32.9187 59.225C31.625 60.4708 30.1396 61.4531 28.4625 62.1719C26.7854 62.8906 24.9646 63.25 23 63.25ZM8.625 17.25H37.375V11.5H8.625V17.25ZM47.4375 54.625C49.45 54.625 51.151 53.9302 52.5406 52.5406C53.9302 51.151 54.625 49.45 54.625 47.4375C54.625 45.425 53.9302 43.724 52.5406 42.3344C51.151 40.9448 49.45 40.25 47.4375 40.25C45.425 40.25 43.724 40.9448 42.3344 42.3344C40.9448 43.724 40.25 45.425 40.25 47.4375C40.25 49.45 40.9448 51.151 42.3344 52.5406C43.724 53.9302 45.425 54.625 47.4375 54.625ZM62.1 66.125L54.3375 58.3625C53.2833 59.0333 52.1813 59.5365 51.0312 59.8719C49.8812 60.2073 48.6833 60.375 47.4375 60.375C43.8438 60.375 40.7895 59.1177 38.2749 56.603C35.7602 54.0883 34.5019 51.0332 34.5 47.4375C34.4981 43.8418 35.7564 40.7876 38.2749 38.2749C40.7934 35.7621 43.8476 34.5038 47.4375 34.5C51.0274 34.4962 54.0826 35.7545 56.603 38.2749C59.1234 40.7953 60.3807 43.8495 60.375 47.4375C60.375 48.6833 60.2073 49.8812 59.8719 51.0312C59.5365 52.1813 59.0333 53.2833 58.3625 54.3375L66.125 62.1L62.1 66.125Z" fill="white"/>
                </svg>
            <p>Formulas basadas en evidencias <br> <span>cientificas</span></p>
        </div>
        <div class="carta2">
            <svg width="54" height="58" viewBox="0 0 54 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="54" height="56" fill="black"/>
                <path d="M13.5 44.3333V46.6666C13.5 47.3277 13.2844 47.8819 12.8531 48.3291C12.4219 48.7763 11.8875 49 11.25 49H9C8.3625 49 7.82812 48.7763 7.39687 48.3291C6.96562 47.8819 6.75 47.3277 6.75 46.6666V28L11.475 14C11.7 13.3 12.1031 12.7361 12.6844 12.3083C13.2656 11.8805 13.9125 11.6666 14.625 11.6666H39.375C40.0875 11.6666 40.7344 11.8805 41.3156 12.3083C41.8969 12.7361 42.3 13.3 42.525 14L47.25 28V46.6666C47.25 47.3277 47.0344 47.8819 46.6031 48.3291C46.1719 48.7763 45.6375 49 45 49H42.75C42.1125 49 41.5781 48.7763 41.1469 48.3291C40.7156 47.8819 40.5 47.3277 40.5 46.6666V44.3333H13.5ZM13.05 23.3333H40.95L38.5875 16.3333H15.4125L13.05 23.3333ZM16.875 37.3333C17.8125 37.3333 18.6094 36.993 19.2656 36.3125C19.9219 35.6319 20.25 34.8055 20.25 33.8333C20.25 32.8611 19.9219 32.0347 19.2656 31.3541C18.6094 30.6736 17.8125 30.3333 16.875 30.3333C15.9375 30.3333 15.1406 30.6736 14.4844 31.3541C13.8281 32.0347 13.5 32.8611 13.5 33.8333C13.5 34.8055 13.8281 35.6319 14.4844 36.3125C15.1406 36.993 15.9375 37.3333 16.875 37.3333ZM37.125 37.3333C38.0625 37.3333 38.8594 36.993 39.5156 36.3125C40.1719 35.6319 40.5 34.8055 40.5 33.8333C40.5 32.8611 40.1719 32.0347 39.5156 31.3541C38.8594 30.6736 38.0625 30.3333 37.125 30.3333C36.1875 30.3333 35.3906 30.6736 34.7344 31.3541C34.0781 32.0347 33.75 32.8611 33.75 33.8333C33.75 34.8055 34.0781 35.6319 34.7344 36.3125C35.3906 36.993 36.1875 37.3333 37.125 37.3333ZM11.25 39.6666H42.75V28H11.25V39.6666Z" fill="#FEF7FF"/>
                </svg>
            <H3>Envios a nivel nacional <br> <span>Envio rápido en todo el Perú</span></H3>
            
        </div>
        <div class="carta3">
            <svg width="40" height="45" viewBox="0 0 40 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 34.2857C21.3261 34.2857 22.5979 33.8342 23.5355 33.0305C24.4732 32.2267 25 31.1366 25 30C25 27.6214 22.75 25.7143 20 25.7143C18.6739 25.7143 17.4021 26.1658 16.4645 26.9695C15.5268 27.7733 15 28.8634 15 30C15 31.1366 15.5268 32.2267 16.4645 33.0305C17.4021 33.8342 18.6739 34.2857 20 34.2857ZM35 15C36.3261 15 37.5979 15.4515 38.5355 16.2553C39.4732 17.059 40 18.1491 40 19.2857V40.7143C40 41.8509 39.4732 42.941 38.5355 43.7447C37.5979 44.5485 36.3261 45 35 45H5C3.67392 45 2.40215 44.5485 1.46447 43.7447C0.526784 42.941 0 41.8509 0 40.7143V19.2857C0 16.9071 2.25 15 5 15H7.5V10.7143C7.5 7.87268 8.81696 5.14746 11.1612 3.13814C13.5054 1.12882 16.6848 0 20 0C21.6415 0 23.267 0.277133 24.7835 0.815576C26.3001 1.35402 27.6781 2.14323 28.8388 3.13814C29.9996 4.13305 30.9203 5.31419 31.5485 6.61411C32.1767 7.91402 32.5 9.30727 32.5 10.7143V15H35ZM20 4.28571C18.0109 4.28571 16.1032 4.96301 14.6967 6.1686C13.2902 7.37419 12.5 9.00932 12.5 10.7143V15H27.5V10.7143C27.5 9.00932 26.7098 7.37419 25.3033 6.1686C23.8968 4.96301 21.9891 4.28571 20 4.28571Z" fill="white"/>
                </svg>
            <h3>Pagos 100% seguros <br> <span>Pagos totalmente confiables</span></h3>
            
        </div>
        <div class="carta4">
            <svg width="58" height="45" viewBox="0 0 58 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.9167 22.5C22.2333 22.5 26.5833 17.4375 26.5833 11.25C26.5833 5.0625 22.2333 0 16.9167 0C11.6 0 7.25 5.0625 7.25 11.25C7.25 17.4375 11.6 22.5 16.9167 22.5ZM26.5833 45V30.0937C23.925 28.9687 20.5417 28.125 16.9167 28.125C7.49167 28.125 0 33.1875 0 39.375V45H26.5833ZM36.25 0C33.5917 0 31.4167 2.53125 31.4167 5.625V39.375C31.4167 42.4688 33.5917 45 36.25 45H53.1667C55.825 45 58 42.4688 58 39.375V5.625C58 2.53125 55.825 0 53.1667 0H36.25Z" fill="white"/>
                </svg>
            <h3>Atención al cliente <br> <span>Atención personalizada</span></h3>
            
        </div>
    </section>
    <section class="cuerpo">
        <div class="carrusel-container">
            <div class="carrusel-track" id="track">
            <img src="{{ asset('imagenes/Marcas/76653941-el-carro-de-entrega-rápido-aisló-el-movimiento-del-coche-rojo-vista-lateral-ilustración-de-dibujos.jpg') }}" alt="1">
            <img src="{{ asset('imagenes/Marcas/dragonpharma-logo.jpg') }}" alt="2">
            <img src="{{ asset('imagenes/Marcas/gu-marcas.jpg') }}" alt="3">
            <img src="{{ asset('imagenes/Marcas/jockofull-logo.png') }}" alt="4">
            <img src="{{ asset('imagenes/Marcas/large_veltrex-logo.png') }}" alt="5">
            <img src="{{ asset('imagenes/Marcas/levelpro-logo.png') }}" alt="6">
            <img src="{{ asset('imagenes/Marcas/muscletech-logo.png') }}" alt="7">
            <img src="{{ asset('imagenes/Marcas/mutant-logo.jpg') }}" alt="8">
            <img src="{{ asset('imagenes/Marcas/myprhotein-logo.jpg') }}" alt="9">
            <img src="{{ asset('imagenes/Marcas/naturalslim-logo.png') }}" alt="10">
            <img src="{{ asset('imagenes/Marcas/NB_Beauty_Black_Logo.jpg') }}" alt="11">
            <img src="{{ asset('imagenes/Marcas/Prosupps-logo.png') }}" alt="12">
            <img src="{{ asset('imagenes/Marcas/Prosupps-logo2.PNG') }}" alt="13">
            <img src="{{ asset('imagenes/Marcas/qnt-logo.png') }}" alt="14">
            <img src="{{ asset('imagenes/Marcas/RC ronniecoleman-logo.png') }}" alt="15">
            <img src="{{ asset('imagenes/Marcas/yalabas-logo.jpg') }}" alt="16">
            <img src="{{ asset('imagenes/Marcas/dragonpharma-logo.jpg') }}" alt="2">
            <img src="{{ asset('imagenes/Marcas/gu-marcas.jpg') }}" alt="3">
            <img src="{{ asset('imagenes/Marcas/jockofull-logo.png') }}" alt="4">
            <img src="{{ asset('imagenes/Marcas/large_veltrex-logo.png') }}" alt="5">
            <img src="{{ asset('imagenes/Marcas/levelpro-logo.png') }}" alt="6">
            <img src="{{ asset('imagenes/Marcas/muscletech-logo.png') }}" alt="7">
            <img src="{{ asset('imagenes/Marcas/mutant-logo.jpg') }}" alt="8">
            <img src="{{ asset('imagenes/Marcas/myprhotein-logo.jpg') }}" alt="9">
            <img src="{{ asset('imagenes/Marcas/naturalslim-logo.png') }}" alt="10">
            <img src="{{ asset('imagenes/Marcas/NB_Beauty_Black_Logo.jpg') }}" alt="11">
            <img src="{{ asset('imagenes/Marcas/Prosupps-logo.png') }}" alt="12">
            <img src="{{ asset('imagenes/Marcas/Prosupps-logo2.PNG') }}" alt="13">
            <img src="{{ asset('imagenes/Marcas/qnt-logo.png') }}" alt="14">
            <img src="{{ asset('imagenes/Marcas/RC ronniecoleman-logo.png') }}" alt="15">
            <img src="{{ asset('imagenes/Marcas/yalabas-logo.jpg') }}" alt="16">
            </div>
            </div>
        
                        
                
                    
                <section class="nuestra-categoria">
                    <h3>Nuestra Categoria</h3>
                    <div class="botones-categoria">
                        <a href="">
                            <div class="categoria">
                                <p>CREATINAS</p>
                                <img src="imagenes/Producto_1-removebg-preview.png" alt=""> 
                            </div>
                        </a>
                        <a href="">
                            <div class="categoria">
                                <p>PROTEINAS</p>
                                <img src="imagenes/Proteinas/Whey_Protein_Powder_for_Women_Vanilla_Powder_-_Low_Carb_Gluten-Free_Grass-Fed_-proteinaFrente-removebg-preview.png" alt=""> 
                            </div>
                        </a>
                        <a href="">
                            <div class="categoria">
                                <p>GANADORES DE PESO</p>
                                <img src="imagenes/Ganadores de peso/Proteina_Ganador_Mutant_Mass_5_Libras_Sabor_Vainilla-ganadores_de_masaGfrente-removebg-preview.png" alt=""> 
                            </div>
                        </a>
                        <a href="">
                            <div class="categoria">
                                <p>QUEMADORES DE GRASA</p>
                                <img src="imagenes/Quemadores de grasa/Veltryx_Quemador_De_Grasa_Natural_Activa_Ampk_Quita_Antojos-quemadoresgrasaJfrente-removebg-preview.png" alt=""> 
                            </div>
                        </a>
                        <a href="">
                            <div class="categoria">
                                <p>BARRAS ENERGÉTICAS</p>
                                <img src="imagenes/Barras-Energeticas/Galletas_Energéticas_Stroopwafel_Campfire_Smores_Gu_Energy-barrasenergeticasAfrente-removebg-preview.png" alt=""> 
                            </div>
                        </a>
                        <a href="">
                            <div class="categoria">
                                <p>VITAMINAS Y OTROS</p>
                                <img src="imagenes/vitaminas y otros/Metabolic_Vitamins-vitaminas_y_otros-removebg-preview.png" alt=""> 
                            </div>
                        </a>
                    </div>
                </section>
                <section class="Objetivos">
                    <h3>Cuentanos,¿Cuál es tu objetivo</h3>
                    <div class="objetivos-cards">
                        <a href="quemadores_de_grasa.html" class=""><div class="objetivo1"><p>GANANCIA MUSCULAR</p></div></a>
                        <a href="quemadores_de_grasa.html" class=""><div class="objetivo2"><p>PERDIDA DE PESO Y TONIFICACION</p></div></a>
                        <a href="quemadores_de_grasa.html" class=""><div class="objetivo3"><p>BIENESTAR</p></div></a>
                        <a href="quemadores_de_grasa.html" class=""><div class="objetivo4"><p>RECUPERACIÓN MUSCULAR</p></div></a>
                    </div>
                </section>
                <section class="opiniones-clientes">
                    <div class="opiniones-header">
                        <h3>Opiniones Clientes <span class="ver-mas"><a href="#">(Ver más)</a></span></h3>
                    </div>
                    <div class="opiniones-carrusel">
                        <button class="opiniones-prev">&lt;</button>
                        <div class="opiniones-list">
                            <div class="opinion-item">
                                <p>El buscador es sencillo de usar, y las explicaciones de los productos son claras.</p>
                                <div class="opinion-info">
                                    <span class="opinion-nombre"><b>Maria</b></span>
                                    <span class="opinion-fecha">21/03/2025</span>
                                    <span class="opinion-estrellas">
                                        <span class="stars">★★★★★</span>
                                    </span>
                                </div>
                            </div>
                            <div class="opinion-item">
                                <p>Encontré el mejor precio para el producto que quería. Pude hacer mi pedido de forma rápida y el envío fue inmediato</p>
                                <div class="opinion-info">
                                    <span class="opinion-nombre"><b>Sara</b></span>
                                    <span class="opinion-fecha">01/04/2025</span>
                                    <span class="opinion-estrellas">
                                        <span class="stars">★★★★★</span>
                                    </span>
                                </div>
                            </div>
                            <div class="opinion-item">
                                <p>La atención fue maravillosa, me asesoraron perfectamente y pude hacer una compra eficaz.</p>
                                <div class="opinion-info">
                                    <span class="opinion-nombre"><b>Antonio</b></span>
                                    <span class="opinion-fecha">19/04/2025</span>
                                    <span class="opinion-estrellas">
                                        <span class="stars">★★★★★</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <button class="opiniones-next">&gt;</button>
                    </div>
                </section>

    
                <section class="ofertas">
                    <div class="ofertas-info">
                        <h3><span class="icono-mail"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="25" height="25" fill="url(#pattern0_121_227)"/>
                            <defs>
                            <pattern id="pattern0_121_227" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_121_227" transform="scale(0.00195312)"/>
                            </pattern>
                            <image id="image0_121_227" width="512" height="512" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
                            </defs>
                            </svg></span>RECIBE NUESTRAS OFERTAS!</h3>
                        <p>
                        Suscríbete a nuestra pagina para recibir antes que nadie las mejores ofertas de nutrición               deportiva y todas las novedades.
                        </p>
                    </div>
                    <div class="ofertas-btn">
                        <button>Suscríbete</button>
                    </div>
                </section>
                <div class="separador">
                    <p>Únete a TecsupFit y potencia tu mejor versión</p>
                </div>
            </section>
    
</body>

<footer>

    <div class="footer-container">
        <div class="subscribe-section">
            <h4>Suscríbete y mantente al día</h4>
            <div class="subscribe-form">
                <input type="email" placeholder="Tu correo electrónico">
                <button>Suscríbete</button>
            </div>
            <label>
                <input type="checkbox"> Aceptar los términos y condiciones y la política de privacidad
            </label>
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
                <a href="reclamos.html" target="_blank">
                    <svg width="125" height="37" viewBox="0 0 125 37" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="124.632" height="37" fill="url(#pattern0_204_124)"/>
                    <defs>
                    <pattern id="pattern0_204_124" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_204_124" transform="scale(0.00520833 0.0175439)"/>
                    </pattern>
                    <image id="image0_204_124" width="192" height="57" preserveAspectRatio="none" xlink:href="data:image/png;base64,                    iVBORw0KGgoAAAANSUhEUgAAAMAAAAA5CAYAAABgQSTWAAAShklEQVR4Xu1cBVhU2Rc/mLsixv7tbrATFYuwdkXFTmzERExMbOzGQGzEXAtMEIy1FVvXdo21cwVs8X9/x31vZ4aRGJ7Fe+f7/                   NSZd++799zzO33HLFuOXB9JI40DKuWAmQYAlZ68tm3mgAYATRBUzQGzxk2baS6QqkVA3ZvXLIC6z1/1u9cAoHoRUDcDNACo+/               xVv3sNAKoXAXUzQAOAus9f9bvXAKB6EVA3AzQAqPv8Vb97DQCqFwF1M0ADgLrPX/W71wCgehFQNwM0AKj7/FW/ew0AqhcBdTNAA4C6z1/1u9cAoHoRUDcDNAAoeP79+vah7Tt20J9/                  Xog2a926jvTh/XvxfRBZWVpSrVo1aZb3bAXfHvepyltbU9GiRWjJ0mVxH5RIn9QAoNDBmpmZ0d+3bpB7n760bt36aLPOnzeX3rx9S73ce5NT/fo0dcokKlDISqG3x2+anj26U/              NmTamqrX38BibCp39IACRJkoRsbCqSTcWKVKZMacqVMydlyZKFRo4eQ/7+K77ZMd25fZPce/        ehdes3RFtDoYIFKepjFF29eo0BMGXyRCpoWfibrBUAaNa0KVWz0wDwQwEgZcqU1K1rF2rbxpkyZ84cTXiioqKoW4+etGXL1m8iWAAANPz6DRujvd/              RsY5wgT7QjqAgGQBlrSvQsKFDGMAnT52irdu20blz5+Wx7r3caGdICHV26UQvXoTTiJGj+LuSJUqwC1W0SBE6e+4cBe/cSWfPnjO651SpUlH9enXJ3s6OfvnlF/           Lx9aXCVlbRAFCtalWqUaM6FSlcmC5cvEhz5/nQvXv3vgkfv+ZLfxgAODjY0+SJE1jTx0QfPnwgl85dWCi+NsUEgHlzZ9Ob12+od99+DIC5c7zp5s2b9Pffd+jI0aNkZ2vL1qynWy/             auCmAl475Hj56ROfPn6fAwC209vffydm5NU0cP44OHzlCBw8eoipVKhN8+j59+/P3hvTHnt2UP38+8l2wgN69e08dO7Snhw8f0nsBRskCDOjfj3q79+KY4NmzZ7y+iMgIquNY72uz8Ku/                 74sCIH369FS5ciUqVrQo5c6dizJmyCiu4RM9ePCANVZA4OZYtUzy5Mlp7OhRfPBxpfci2Gzl3IYOHDgY1yGKPBdfAKxZu5b69hvA7/7pp59owXwfKlasKJUuay0DYJa3N02cNEV            +5uTxY7Rr927q0bOXvGZfMc6mYgUqXrK03j7AsxGew6iTiyv9sW8ff1euXFnyW7qEHj9+wgBIly4dnT97Ws9y4dz27g5lK         +Az31cR3nyvk3wxADRu1JBmzZwR675hZg8fOUqLlyyhEydO6j2fIcP/aKEw2dbW5WKdx/CBiIhIcmrQkC5euhTvsaYOiC8ArAoXpfCICPl1VsI1Cd0ZRL/            WcWQFgflcu3ajrVu38TOwgsuXLaViJUqxppYoe/ZsdPTwIWrWoqUe6Jf7LaPw8BfUvYeb3pa8xo6hqlWqMAAaNnCi2d6zaOYsb4L1lKiecJtu37pNbdq1N5UdP8S4LwKAJo0b0Yzp0wiZkfiQ/           4qVNHnKFNZOP//8M+0K3cn+sakE96FefSd2M74GxRQE+8ydQ2/evOEskeQCZc+ZW29ZWbNmpbCjh6llK2fW2JjPpbMrp05BkrAajoOff             +XSBT2w4PnNAZvo3PlzNHjIML33wOWpV7cuA6BtmzY0ftxYmjY9urK6eeuW0YzW1+Dl13qH4gBo2aK5yHBMMnn9r1+/ps6uXShNmrQ0Z/Ysk+eRBl67dp0c69bT07QJnvQzE8TXAnTo6KIXq8A/                 HyPcPbhA8NMxH9wXBM4g+PLw6bt170mBmzfLq0BGZ/q0KWRTqQrdun1b/nzihPFka1uN7B1q0KtXr+TPQ4J3UIoUKRkAcIkCNm4g6wo2dPfuXfkZJBngqiZ2UhQAPbp3oyGDByWYZ+MnTKT79+/                TzBnTEzwXJkCw2LK1swj83isy3+cmgcCiuCX523gOmZ+jx46RsSA4MjKShnmOoJDQUGrgVJ+Ff+Wq1TTAYyC/whAA               +Azz1KxRgzyHjxDgCSHHOnVo5AhP2hQQIMcT0voKFMhPQdu3sWvpNW48QbkMHjSQsz1QDFIQvG7tGkqWLBm5dunKQXeF8uXJf/              kyEZC7U1Bw8Bfl2beeXDEAjBwxnNN1SpBSAHjy5AndFhrxlTj47dt30KLFS5RY3mfngMAaEnx8+PqGLtA4rzHsdvTv11dYuzQ8bJtYI6yfRIYuED5HsAwQ1KpZU34OaVekX40Rsks+PnPJInVq/        vrQocMUdvw41fntNxkAadOmJX8RLyALJdGChYto5KjRX5Rf38PkigDAc9hQ6trFVbH9MACE+Z0p4oj4EALenUIrHgsLo+PHT9Dz58/jM/ybPVuqVCmijx/           p1OnTcV5DieLFyTy1Of3zzz9GWy90J0L+39KyEF2+fIWgFD5HSDbAEly//pcq3B/wIcEAQACFQEpJio8FgIZdtGixcB1W0Z07d8myUCGuEpcoUZxy5crFywoPD+fDPyWKTTuCgoWsab8GqeR5/         chzJQgAkydNpFYtWyi+/7hYAAj7gkWLuPWhYoUK7NfWqF6dcuTILq/nytWrIqP0WG99sBDzfRcovmZtwh         +TAyYDALln22rVOOugmz8GG5CWy54tu6jaZqasWbNw9RYdkJkyZYoTl2KyAAjofObP59Qg/GAE3ciOgC6KEv6+ffsp7MQJOipqCwjoDAkm/ksHw3HapPbQd8EBkwFgyupR2IK/               W1r8KVmyBFWuVEmk41JEmwoAeCDSgDOmTZW/                  Q0puzFgvbhPIli0beQ4bInpcPpXqb9y4QccFMNBaALcHvS5WVpaUNGlSvbkxx67dezgjoltIMmUv2pjEwYEEAQBdmalFduHFixes5XPmzMFBFD5H2wMEHsKaIUMGzl4gKL1w4QIHqeiZR3ObvZ0             tNWzYUGQlfpU5augCLfPzo7Fe40Uvyzty69mD/0jAQSrxrqgm37lzR7RV3Oe/4R7dvXc3mmWSXnBLFHjwjNKE+wC6hMLXMr/lHIMoRej7KVKkMC1d5qfUlIrPg5jwkkhIoMfpe6cEASC         +m8sttHNxEZwig4HMBAov6Ny8fOUK4bseok23dauWJFmAqaKgNsBjEKFnBi7X0sWLCQK/avUaOnP2LI9HFkSXAIysAoyZMmdiMOrSx6iP7BYBJBBOpQlpS7Q7P3r8yfUC                +M1TmZOLqysdOxamyOvQytxYVNpR3PpeCYU29Hl5z57zvS5RXpfJAEDas2WLFkKQ0xOapz7X9oAszVOReoNLc+XKVRbcM6fPiBL9eUL7ct68eSlSPPNIBKvIzuCmEqqQyZImo8iXkXJvCzTf9b          +uc5sECBbFwd5OVDLLUZ48udkCoW0Ca4mNYH1q1v7P4sT2fFy/N9YKscB3vigsWVOJUmXiOk2Mz/0IAEC79uMnj7+IlVWEiTqTmAwAX595hB53Uwma/NSp0/SncIn27NlLe/                  bujXUqCwsLatqkMWeeCooLJoYaPtYJ/n0AjWZoOFOajLVCIFGwcsVyudUgtcjdN2jQgKpWrkwoQKHSang1ERVcVHiRl48Ij                 +DvJXcCAGgkGg0dqv9XCGvfri0XtqCEtm3fLs9nbm7O9ZkNGzdRn97uwiJl5SQBGt/QRu3u5sZKCBZXtwaBNbp06sTPwO1cvtyfi3S6VL26A                +EOAe4kYKyvyKxJSYc24r7GpYuXuAIuEfqYbGxsKK0o+u0/eJACAgLZdQbhshCyeLuFHCC2S5E8RbSKOp6rWbMGKz2cPZIhyObp1jW6d+sqvrcXHsVlCg4OiZNMmQwAdHvmyZMnRhkC89DTcv/              +A3EdMGaXAxVbJZrW0D4N9yqdEC4IWNJk+oEwFvzq5Ss+NBw0euSVcoeMAQDCMGGcF1kWLsLvQrcnBHWTEABzkS3D95OnTJXbjiFUq1b6c6yETBeqs6jmSj1BhgBAKhrZMNRBEI+hn2jc+Ak0Z              +48ypQxI508EcaZOqR/kydPxjUbVIMhRBiTV5whOj8bNW4qg2zt6lWcvYMbkzdvHtGm4UTtOnSkkJBQPu9J4l4GXFUACwkI59at6LVwKXF/AMmFnUFwgQJp9py5/DzaMdDmvVDUa9CThDVC                   +B1q1OK/oUi9RecwOoMDN28Rqewc1KhhA2rfsROvG4Q7EAC+/4oV9FKcX5PGjdkjQOMgCJeHwBsoC3gHnTp2oOEjRsZa/Y83AKDRnJzqCYTO4c3jZSizm4s/Fhbib+HzWqSxoNRC+/Bn                   +E78G9obB/TpWXNOlaIFwCI1PjdnYd2//wD3wkj+PbI5ZcuW4TsFtWvVksEGUMH/f/ToMWsd5PqlVOxbce/24cNHXMmUQPfq1WtuidDVFnj/iOGehIAYwqIEGfYC4SDRjw/                tDQFu17Yt9enjzv67lIVC5yx6nspXtGGXAcID64g2ZCl4hrVFfxG6ZQ0B0KJ5M9HyfZmLfCC0WFQS2TU7++oyAEaPGSvXPnADDbfqmrdsxfwGAXDgn3Obdvx/                  XI7BOYDPoPXr1grePeVeIakhD5k03BcAwfVEewbuNly6fFkPAGiOHDtmNHUWY3ft2s3PlypZkvyWLeF3TJg4iQHAHkXd+rIlQiMk3GOACvHhwQP7qLVzW1mro96zd/cuGjrMk1avWUsLF/             jSW6FkpdZv8BV3sDcLQMVE8QIABHbPrhCj1xFNESBkhdC3j9tHCGaTJklK796/47u+EiFARswAIfpLAA6pTRwWNBfahyVC+7SlqDXkz5dXXL7RbzOOaW2IUSraVFakbcJYLxCC/MFDh9HTp08J/            fnZhGbVdSfgxvVy68kHF3Y8jPv6mzRrzlraGBlzgZBtQ4xUSFTBy5QuzXyoYFNJBoBjPScZILAWSxYvpHwFCsmWD9rTSTTj6bpVEDprEbtAuOHu4KwggHAz0PMlXdoxtkZdC4A9I8br2r2H3qOo            30Cp2do7yADQbfOGZURWrVTpsqzNR48aGa1lu3mzZoJPh7jFHG4xgBYorBZuAx4QDZCGCRJja40XANByCwbqCu3Lly/ZT40QWitCpPsgUNBgEeJvPBceEf7v95/             +HymEPVw8H5vbAS1x9dpVHpMQypcvHx8irEEaizQMDlgqEP6dL28e9j2nTkt456muC4Si3yGhteCnTpr86UZX4KaNAsBJuBZhSPg5lagPURQaEswBurGfVsEYQwDs2LaVihcvxpoRsQ18cgBBFw        DQoqfPnOFX4m4wOj11hU13Tqw7aMc2tuCwOpeEdbETqWpYLABg0EAPql27VoxZKF0AbNywjuOBQUOG6m0ZQEJ8guQALABqPro/EgCB9vAYwACARXLt7GLUnUH/                 l3Rh6Nfatcnd3Y2zjJCbOuLOA7peFbMACRFENYw1jAEQeKLbU+q1R39           +fgFIaHhdyijqJMiCwYqdO3OKXQtdQMINRC8TXCJdYZVu3cHdQdsHCFoQ7dKmAgACDuGzFXNKbtrqlSvoQ9QHBoB0KQfWAu6ORAhOJWDrAgAt3tD0dg7Vhe/+Un5+S            +AmMf9zdvViA4BktayKFNOrqUh8w6SwUmFhx1nr45onbs7BasV2oy1eFkANQpyQPRoCAPHRwf1/0KHDh/kOL7I70Ni4MyD9KNbQIYMJfny58hXZKnoM6M8BHTIzq9es4XaTcV5e3O8/               cNBgPQAgOIWvjN/3uX79OgvBvDmzWbBMBcBAj/4i09aEav/myDETwIBAGxYGAEDxEhYCexsitDriD9wDQSZKCqR1AQDrGyzqAgjqx3qNYwEd6OHBhc/        64soqunZjAwDOBIE0YhI30fYNwZZAIbl3iFOePn3GPyoAwv1quNOIvTQLkBCpjsdYY1kgSWNKh43U4kJRG0BSAITYoEu37nxpRyJkPHR/BACX             +zu5dGb3UtcCIHmwZXMgFSxQgIfiCiMKbmgONBUAyOxtDtjImTQQsmWwBMhcAQAgxF4InKX34jMAVsr6GGaBYMEWL1zInQEguMj4+ZrQ0F38/7gAAK7ZSn8/Kix+tkXmk/           ixAPxoAAha33vWTE6TgnChqmGjJno35IwdpWYBjHHlC3+GYh16leDzf65dAM2D6UWR8bHIdEnuzeeWhWuNEFClqs3Q8gimkbKM6Y4CgGaWxIzjldgCTmTd0P8FQlwB4JtC0jsvXLhoNHGBImo            +kT1CzKPrcn3uXRoATDkFbUyi4YAGgERzlNpGTOGABgBTuKaNSTQc0ACQaI5S24gpHNAAYArXtDGJhgMaABLNUWobMYUDGgBM4Zo2JtFwQANAojlKbSOmcEADgClc08YkGg5oAEg0R6ltxBQOaA            AwhWvamETDgf8DiTNX5mnt3C4AAAAASUVORK5CYII="/>
                    </defs>
                    </svg>
                                    </a>
            </div>

            <div>
                <h5>LLÁMANOS</h5>
                <p>‪(+51) 956 104 920‬</p>
                <p>Escríbenos<br>contacto@nuttroforma.pe</p>
                <div class="socials">
                    <a href="#"><i class="ri-facebook-line"></i></a>
                    <a href="https://wa.me/931723108" target="_blank"><i class="ri-whatsapp-line"></i></a>
                    <a href="#"><i class="ri-tiktok-line"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        Copyright © 2025 TecsupFit. Todos los derechos reservados.
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="productos-index.js"></script>
<script src="carruceles.js"></script>

</html> 
<style>
    body {
    margin: 0;
    margin: 1.5px;
    padding: 0;
    
}
/* Carrusel */
.carrucel-imagen img {
    width: 1519px;
}

.etiquetas {
    display: flex;
    justify-content: space-around;
    margin: 30px;
    flex-wrap: wrap;
}


.etiquetas p,
span {
    color: #FFF;
    text-align: center;
    font-family: "Crimson Text";
    font-size: 15px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.carta1,
.carta2,
.carta3,
.carta4 {
    display: flex;
    padding: 20px;
    justify-content: center;
    
}

.carta2,
.carta3,
.carta4 {
    border-left: 2px solid white;
    height: 92px;
    padding-left: 54px;
}
@media screen and (max-width: 768px) {
    .carta2,
    .carta3,
    .carta4 {
        border-left: none;
        padding-left: 0px;
    }
    
}
@media screen and (max-width: 1200px) {
    .carta2,
    .carta3,
    .carta4 {
        border-left: none;
        padding-left: 0px;
    }
    
}

.carta2 h3,
.carta3 h3,
.carta4 h3 {
    color: #FFF;
    text-align: start;
    font-family: "Crimson Text";
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: 26px;
    padding-left: 25px;
}
.carta1 p{
    text-align: start;
    line-height: 26px;
    padding-left: 25px;
}
.boton-imagen-inicio{
    background-color: transparent;
    width: 290px;
    height: 60px;
    position: absolute;
    z-index: 1;
    left: 990px;
    border-radius: 30px;
    top: 400px;



    
}

/*seccion de productos*/
.head-productos {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: start;
    padding: 20px;
    margin-top: 4rem;
}
.head-productos h3 {
    color: #000;
    font-family: "Crimson Text";
    font-size: 30px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    width: 380px;
    height: 60px;
    flex-shrink: 0;
}

.cuerpo{
    background-color: white;

}
.tabs {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    font-weight: bold;
    flex-wrap: wrap;
}

.tabs button {
    cursor: pointer;
    color: #000;
    text-decoration: none;
    font-family: "Crimson Text";
    font-size: 15px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    background-color: transparent;
    border: none;
    transition: all 0.3s ease;
}
.tabs button:hover {
    color: #d01619;
    transition: all 0.3s ease;
    transform: scale(1.1);
}

.products{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    
    justify-content: center;

}
.botones {
    margin: 20px 0;
}
.botones button {
    margin: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.Contenedores_productos{
    display: flex;
    position: relative;
}
.seccion {
    flex-wrap: wrap;
    gap: 20px;
    padding: 40px;
    font-size: 1.8rem;
    color: white;
    font-weight: bold;
    display: flex;
}
.seccion:not(.activo) {
    display: none;
}
@keyframes fade {
    from { opacity: 0; }
    to { opacity: 1; }
}
.product-card {
    background: #fff;
    border-radius: 10px;
    padding: 15px;
    width: 286px;
    height: 430px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    align-items: start;


}

.product-card img {
    max-width: 100%;
    width: 157px;
    height: 188px;
    margin-bottom: 10px;
    align-self: center;
}

.brand {
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
}

.title {
    font-weight: bold;
    text-align: start;
    font-size: 14px;
    margin: 5px 0;
    color: #333;
}

.price {
    color: #0786A6;
    font-weight: bold;
    margin-top: 2px;
    margin-bottom: 5px;
    font-size: 15px;
}

.old-price {
    text-decoration: line-through;
    color: #999;
    font-size: 12px;
    text-align: start;
}

.quantity-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    padding: 3px;
    height: 33px;
    background-color: #a10000;
}

.quantity-controls button {
    background-color: transparent;
    color:white;
    border: none;
    font-size: 16px;
}
.quantity-controls input {
    width: 40px;
    text-align: center;
    border: none;
    background-color: #f0f0f0;
    border-radius: 5px;
    background-color: transparent;
    color: white;
    font-size: 16px;
}

.add-to-cart {
    background: transparent;
    color: white;
    border: none;
    cursor: pointer;
    text-align: center;
    align-self: center;
}
.seccion-productos {
    display: flex;
    flex-direction: column;
    align-items: start;
    padding: 20px;
    
}

.stock {
    font-size: 12px;
    margin-top: 5px;
    color: #555;
}
.stock-bar-container {
    width: 100%;
    height: 8px;
    background: #eee;
    border-radius: 5px;
    margin-top: 6px;
    overflow: hidden;
}
.stock-bar {
    height: 100%;
    background: linear-gradient(90deg, #000000 60%, #b1b1b1 100%);
    border-radius: 5px;
    transition: width 0.4s;
}
/*Carrucel-2*/
.carrusel-container {
    width: 100%;
    overflow: hidden;
    padding-top: 4rem;
}

.carrusel-track {
    display: flex;
    gap: 20px;
    padding: 20px;
    animation: slide 20s linear infinite alternate;
}

.carrusel-track img {
    width: 200px;
    height: 120px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s;
    object-fit: contain;
}

.carrusel-track img:hover {
    transform: scale(1.1);
}

@keyframes slide {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/*CATEGORIAS*/
.nuestra-categoria {
    margin-top: 12rem;
    padding-top: 2rem;
    padding: 0%;
    padding-left: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;

}
.nuestra-categoria h3{
    color: #000;
    font-family: "Crimson Text";
    font-size: 30px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    align-self: start;
}
.botones-categoria{
    display: grid;
    grid-template-columns: auto auto auto;
    margin-top: 4rem;
    width: 1340px;
    height: 292px;
}
.botones-categoria a{
    width: 433px;
    height: 131px;
    margin: 0px;
    padding: 0px;
    text-decoration: none;
}
.categoria{
    background-color: white;
    backdrop-filter: blur(10px); 
    border-radius: 15px;
    border: 1px solid #ccc;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    width: 433px;
    height: 131px;
    flex-shrink: 0;
    box-sizing: border-box;
    padding: 10px;
    transition: all 0.3s ease;
}
.categoria:hover{
    transform: scale(1.05);
    transition: all 0.3s ease;
    background-color: black;
}

.categoria img{
    width: 84.571px;
    height: 101px;
    
}
.categoria p{
    text-decoration: none;
    color: black;
    font-family: "Crimson Text";
    font-size: 15px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    transition: all 0.3s ease;
}
.categoria:hover p{
    color: white;
}

/*OBJETIVOS*/
.Objetivos{
    margin-top: 9rem;
}
.Objetivos h3{
    color: #000;
    font-family: "Crimson Text";
    font-size: 30px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin-left: 40px;
}
.objetivos-cards{
    display: flex;
    justify-content: space-around;
    margin-top: 4rem;
    flex-wrap: wrap;
}
.objetivos-cards a{
    text-decoration: none;
    width: 349.792px;
    height: 365px;
    transition: all 0.3s ease;
    flex-wrap: wrap;
}
.objetivos-cards a:hover{
    scale: 1.1;
    transition: all 0.3s ease;
}
.objetivo1{
    background-image: url(imagenes/imgObjetivo/imgobjetivoGananciamuscular.jpg);
    background-size: cover;      
    background-repeat: no-repeat; 
    background-position: center;
    width: 400px;
    height: 400px;  
}

.objetivo2{
    background-image: url(imagenes/imgObjetivo/imgobjetivoPerdidapeso.jpg);
    background-size: cover;      
    background-repeat: no-repeat; 
    background-position: center;
    width: 400px;
    height: 400px;  
}
.objetivo3{
    background-image: url(imagenes/imgObjetivo/imhobjetivogananciaEnergia.jpg);
    background-size: cover;      
    background-repeat: no-repeat; 
    background-position: center;
    width: 400px;
    height: 400px;  
}
.objetivo4{
    background-image: url(imagenes/imgObjetivo/imgobjetivorecuperacionmuscular.jpg);
    background-size: cover;      
    background-repeat: no-repeat; 
    background-position: center;
    width: 400px;
    height: 400px;  
}
.objetivo1,.objetivo2,.objetivo3,.objetivo4{
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    width: 349.792px;
    height: 365px;

}
.objetivo1 p,.objetivo2 p,.objetivo3 p,.objetivo4 p{
    text-decoration: none ;
    color: #FFF;
    padding-top: 9rem;
    font-family: "Crimson Text";
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.objetivo2{
    padding-left: 1.5rem;
}

/*OPINIONES*/
.opiniones-clientes {
    margin: 40px 0 30px 0;
    background: #fafafa;
    padding: 30px 0 10px 0;
    margin-top: 4rem;

}
.opiniones-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    margin-left: 20px;
}
.opiniones-header h3 {
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0;
}
.opiniones-header .ver-mas {
    font-size: 0.95rem;
    color: #888;
}
.opiniones-header .ver-mas a {
    color: #888;
    text-decoration: none;
}
.opiniones-carrusel {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 98vw;
    margin: 0 auto;
}
.opiniones-prev,
.opiniones-next {
    background: none;
    border: none;
    font-size: 2rem;
    color: #222;
    cursor: pointer;
    padding: 0 18px;
    transition: color 0.2s;
}
.opiniones-prev:hover,
.opiniones-next:hover {
    color: #f7b500;
}
.opiniones-list {
    display: flex;
    gap: 60px;
    flex: 1;
    justify-content: center;
}
.opinion-item {
    background: none;
    max-width: 340px;
    min-width: 260px;
    padding: 0 10px;
    text-align: left;
}
.opinion-item p {
    color: #444;
    font-size: 1rem;
    margin-bottom: 18px;
    min-height: 56px;
}
.opinion-info {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1rem;
    font-weight: 500;
}
.opinion-nombre {
    color: #222;
}
.opinion-fecha {
    color: #888;
    font-size: 0.98rem;
}
.opinion-estrellas .stars {
    color: #ffc107;
    font-size: 1.1rem;
    margin-left: 4px;
}
@media (max-width: 900px) {
    .opiniones-list {
        gap: 20px;
    }
    .opinion-item {
        max-width: 220px;
        min-width: 160px;
    }
}
@media (max-width: 600px) {
    .opiniones-header {
        margin-left: 8px;
    }
    .opiniones-list {
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }
    .opinion-item {
        max-width: 98vw;
        min-width: 0;
    }
    .opiniones-carrusel {
        gap: 0;
    }
}

/*OFERTAS*/

.ofertas {
    background: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 32px 24px 40px 24px;
    margin-top: 6rem;
    margin-bottom: 4rem;
    min-height: 120px;
    margin-left: 40px;
}

.ofertas-info h3 {
    font-size: 1.6rem;
    font-weight: 700;
    margin: 0 0 4px 0;
    color: #181818;
    font-family: 'Crimson Text', serif;
    display: flex;
    align-items: center;
    gap: 8px;
}

.icono-mail {
    font-size: 1.3em;
    margin-right: 5px;
}

.ofertas-info p {
    color: #555;
    font-size: 1.08rem;
    margin: 0;
    font-family: 'Crimson Text', serif;
    max-width: 650px;
}

.ofertas-btn {
    margin-right: 60px;
}

.ofertas-btn button {
    background: #111;
    color: #FFF;
    font-family: "Crimson Text";
    font-size: 28px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    border: none;
    padding: 16px 38px;
    border-radius: 0;
    cursor: pointer;
    transition: all 0.4s ease-in-out;

}

.ofertas-btn button:hover {
    background: #a10000;
}

@media (max-width: 900px) {
    .ofertas {
    flex-direction: column;
    align-items: flex-start;
    gap: 18px;
    padding: 24px 10px 30px 10px;
    }
    .ofertas-btn {
    margin-right: 0;
    align-self: flex-end;
    }
}

/*SEPARADOR*/
.separador {
    background-color: #A70608;
    width: 100%;
    height: 134px;
    margin: 0 auto;
    margin-top: 2rem;
    align-items: center;
    text-align: center ;
    display: flex;
    justify-content: center;
}
.separador p{
    color: #FFF;
    font-family: "Crimson Text";
    font-size: 35px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

/*FOOTER*/

footer {
    background-color: #000;
    color: white;
    font-size: 14px;
    padding-top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
}


.footer-container {
    display: flex;
    justify-content: center;
    gap: 130px;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 120px;
    
}

.subscribe-section {
    flex: 1 1 250px;
    max-width: 490px;
}

.subscribe-section h4 {
    margin-bottom: 10px;
}

.subscribe-form {
    display: flex;
    margin-bottom: 10px;
}

.subscribe-form input {
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
    font-weight: 500;
    font-size: .8vw;
    color: #fff;
    background-color: rgb(28,28,30);
    box-shadow: 0 0 .4vw rgba(0,0,0,0.5), 0 0 0 .15vw transparent;
    border-radius: 0.4vw;
    border: none;
    outline: none;
    padding: 0.4vw;
    width: 490px;
    transition: .4s;
}

.subscribe-form input:hover {
    box-shadow: 0 0 0 .15vw rgba(135, 207, 235, 0.186);
}

.subscribe-form input:focus {
    box-shadow: 0 0 0 .15vw skyblue;
}

.subscribe-form button {
    background-color: #888;
    color: white;
    border: none;
    padding: 8px 15px;
    cursor: pointer;
}

footer .social {
    display: flex;
    align-items: center;
    gap: 1rem;
}

footer .socials a {
    color: #ffffff;
    border: 1px solid #ffffff;
    padding: 6px 8px;
    font-size: 1.25rem;
    border-radius: 100%;
    transition: all 0.3 ease;
}

footer .socials a:hover {
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
    gap: 70px;
}

.footer-links div h5 {
    margin-bottom: 10px;
    color: #FFF;
    font-family: "Crimson Text";
    font-size: 17px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links ul li {
    margin-bottom: 5px;
    color: #FFF;
    font-family: "Crimson Text";
    font-size: 15px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
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


<script>

function mostrar(indice) {
            // Actualizar botones
            document.querySelectorAll('.tab-button').forEach((btn, idx) => {
                if (idx === indice) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });

            // Actualizar secciones
            document.querySelectorAll('.seccion').forEach((sec, idx) => {
                if (idx === indice) {
                    sec.classList.add('activo');
                } else {
                    sec.classList.remove('activo');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            mostrar(0);
        });

        function increment(btn) {
            const input = btn.parentElement.querySelector('input');
            let value = parseInt(input.value, 10);
            if (value < 99) value++;
            input.value = value;
        }

        function decrement(btn) {
            const input = btn.parentElement.querySelector('input');
            let value = parseInt(input.value, 10);
            if (value > 1) value--;
            input.value = value;
        }


document.addEventListener('DOMContentLoaded', function() {
    const opinionesList = document.querySelector('.opiniones-list');
    const items = document.querySelectorAll('.opinion-item');
    let current = 0;
    const max = items.length;

    function updateOpiniones() {
        items.forEach((item, idx) => {
            item.style.display = (idx === current) ? 'block' : 'none';
        });
    }

    function responsiveOpiniones() {
        if (window.innerWidth < 700) {
            updateOpiniones();
        } else {
            items.forEach(item => item.style.display = 'block');
        }
    }

    document.querySelector('.opiniones-prev').addEventListener('click', function() {
        current = (current - 1 + max) % max;
        responsiveOpiniones();
    });
    document.querySelector('.opiniones-next').addEventListener('click', function() {
        current = (current + 1) % max;
        responsiveOpiniones();
    });

    window.addEventListener('resize', responsiveOpiniones);
    responsiveOpiniones();
});
</script>
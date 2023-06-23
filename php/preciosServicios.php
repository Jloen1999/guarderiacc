<!DOCTYPE html>
<html lang="es">
<head>
    <!--Título-->
    <title>Precios y Servicios de nuestra guardería</title>
    <!--Metadatos-->
    <meta charset="UTF-8">
    <meta name="description" content="Página de precios y servicios de la GuarderíaCC">
    <meta name="keywords"
          content="guarderíacc, guardería, servicios de GuarderíaCC, Cáceres, guardería de Cáceres, precios de GuarderíaCC">
    <meta name="author" content="Jose Luis Obiang Ela Nanguan">
    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Favicon-->
    <link rel="icon" type="image/png" href="../Images/fotosGaleria/logo.jpg"/>
    <!--fonts Google-->
    <!--Rubik-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Gemstones&display=swap" rel="stylesheet">
    <!--Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Rubik+Gemstones&display=swap"
          rel="stylesheet">
    <!--Estilos CSS-->
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- JS -->
    <script src="../js/funciones.js" defer></script>
    <script src="../js/ClaseUsuario.js" defer></script>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!--    PHP   -->


</head>

<body onload="ocultarIniciarSesion();">

<!--Header: encapsula el contenido de la cabecera en 2 secciones-->
<div class="align-items-center justify-content-center">
    <header class="d-flex flex-column">
        <section class="d-flex align-items-center justify-content-center fondo">
            <!--Botón para cambiar el color(oscuro|blanco) de la página-->
            <button type="button" id="modo" class="btn btn-dark" onclick="changeColorPage()">Modo Oscuro</button>
            <article class="bordeDerecho">
                <!--Redes sociales de la Guardería-->
                <a href="https://facebook.com"><i class="bi bi-facebook"></i></a>
                <a href="https://facebook.com"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com"><i class="bi bi-instagram"></i></a>
                <!--Elige el idioma de la página-->
                <label for="idioma">Idioma:</label>
                <select id="idioma">
                    <option value="en">Inglés</option>
                    <option value="es">Español</option>
                </select>

                <button type="button" id="traducir">Traducir</button>
                <script src="../traductor.js"></script>

            </article>
        </section>
        <section class="d-flex">
            <a href="../index.php" class="pt-5"><img src="../Images/fotosGaleria/logo.jpg"
                                                      alt="logo de la página principal de la guardería" width="100px"
                                                      class="rounded-circle"><span class="titulo">GUARDERÍACC</span></a>
            <!-- Contenedor para el formulario de inicio de sesión y registro-->
            <article class="bordeDerecho" id="login">
                <form action="#" id="form1" name='form1' autocomplete="off">
                    <input type="text" class="form-control mb-1" id="dni" placeholder="Usuario" required>
                    <input type="password" class="form-control mb-3" id="password" placeholder="Contraseña"
                           required>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check" onclick="showPassword()">
                        <label class="form-check-label check fw-light" for="check">mostrar contraseña</label>
                    </div>
                    <!--
                        Botón que nos redirige a la página de "registro", sin tener en cuenta el
                        enlace establecido en el formulario, del atributo "action".
                    -->
                    <button type="button" class="btn btn-secondary btn-sm" onclick="iniciarSesion()">Login</button>
                    <button id="buttonSignUp" type="button" class="btn btn-secondary btn-sm"
                            onclick="registrarUsuario();">SignUp
                    </button>
                </form>
            </article>

            <!--Artículo 3-->
            <!--Contenedor para el botón de close session-->
            <article id="cerrarSesion" class="bordeDerecho">
                <span class="titulo fs-2" id="usuario"></span>
                <button class="btn btn-primary btn-sm" onclick="cerrarSesion()">Cerrar Sesion</button>
            </article>
        </section>
    </header>

    <!--Barra de navegación: para encapsular el menú de navegación.
    navbar-expand-sm: Lo que hace es que cuando la pantalla del dispositivo es pequeña muestra el menú hamburguesa
    -->
    <nav class="navbar navbar-expand-sm fondo">
        <div class="container-fluid">
            <button class="navbar-toggler btn btn-outline-primary border-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <!--Hipervínculo 1-->
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="preciosServicios.php" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                        <!--Menú desplegable-->
                        <ul class="dropdown-menu bg-black">
                            <li class="dropdown-item"><a href="#cuidado"
                                                         class="nav-link text-white bg-black rounded-pill">Cuidado
                                    diario</a>
                            </li>
                            <li class="dropdown-item"><a href="#actividades"
                                                         class="nav-link text-white bg-black rounded-pill">Programas de
                                    actividades</a></li>
                            <li class="dropdown-item"><a href="#transporte"
                                                         class="nav-link text-white bg-black rounded-pill">Servicio de
                                    transporte</a></li>
                            <li class="dropdown-item"><a href="#verano"
                                                         class="nav-link text-white bg-black rounded-pill">Programas de
                                    verano</a></li>
                            <li class="dropdown-item"><a href="#precios"
                                                         class="nav-link text-white bg-black rounded-pill">Precios</a>
                            </li>
                        </ul>
                    </li>
                    <!--Hipervínculo 2-->
                    <li class="nav-item dropdown"><a href="../html/actividades.html"
                                                     class="nav-link dropdown-toggle text-white" role="button"
                                                     data-bs-toggle="dropdown" aria-expanded="false">Actividades</a>
                        <!--Menú desplegable-->
                        <ul class="dropdown-menu bg-black">
                            <li class="dropdown-item"><a href="../html/actividades.html#arte"
                                                         class="nav-link text-white bg-black rounded-pill">Clases de
                                    arte</a></li>
                            <li class="dropdown-item"><a href="../html/actividades.html#musica"
                                                         class="nav-link text-white bg-black rounded-pill">Clases de
                                    música</a></li>
                            <li class="dropdown-item"><a href="../html/actividades.html#creativo"
                                                         class="nav-link text-white bg-black rounded-pill">Proyectos
                                    creativos</a>
                            </li>
                            <li class="dropdown-item"><a href="../html/actividades.html#excursiones"
                                                         class="nav-link text-white bg-black rounded-pill">Excursiones</a>
                            </li>
                        </ul>
                    </li>
                    <!--Hipervínculo 3-->
                    <li class="nav-item"><a href="../html/contacto.html" target="_blank"
                                            class="nav-link text-white">Contacto</a>
                    </li>
                    <!--Hipervínculo 4: Nos muestra información sobre la accesibilidad web-->
                    <li class="nav-item"><a href="../index.php#accesibilidad"
                                            class="nav-link text-white">Accesibilidad</a>
                    </li>

                </ul>

                <!-- Formulario de búsqueda -->
                <form class="d-flex buscar" role="search" id="formulario">
                    <input class="form-control me-2" type="search" id="busqueda" name="q" placeholder="Buscar"
                           aria-label="Search">
                    <button class="btn btn-outline-success" id="search-button" type="submit">Buscar</button>
                </form>
                <!-- Contenedor para mostrar los resultados de la búsqueda -->
                <div id="results"></div>
                <!-- Carga el script que maneja la búsqueda y los resultados -->
                <script src="../server.js"></script>

            </div>
        </div>
    </nav>


    <!-- Contenido -->
    <div class="container-fluid">
        <h2 class="text-center mt-3 titulo">Servicios</h2>

        <section>
            <p>Nuestra guardería ofrece una amplia gama de servicios para cuidar y entretener a los niños mientras están
                bajo
                nuestro cuidado:</p>
            <article>
                <h3 id="cuidado" class="titulo">
                    <img class="rounded" src="../Images/cuidado.png" alt="Logo de niños con cochecito" width="10%"
                         height="10%">
                    Cuidado diario
                </h3>
                <p>Ofrecemos cuidado y supervisión durante todo el día para niños de 6 meses a 5 años. También incluimos
                    comidas
                    y
                    refrigerios saludables en nuestro precio.</p>
                <ul>
                    <li>Niños de 2 años: <strong>50.0€</strong> por día</li>
                    <li>Niños de 4 años: <strong>70.0€</strong> por día</li>
                </ul>
            </article>
            <article>
                <h3 id="actividades" class="titulo">
                    <img src="../Images/fotosGaleria/niñaPintandoLogoActividades.jpg" alt="Imagen de una niña pintando"
                         class="rounded" width="10%">
                    Programas de actividades</h3>
                <p>Ofrecemos una amplia variedad de programas de actividades para los niños, como clases de arte,
                    música,
                    deportes y
                    juegos. <br>Nuestros programas están disponibles para niños de 2 a 5 años.</p>
                <ul>
                    <li>Programa de arte una vez a la semana: <strong>100€</strong> por mes</li>
                    <li>Programa de deportes dos veces a la semana: <strong>200€</strong> por mes</li>
                </ul>
            </article>
            <article>
                <h3 id="transporte" class="titulo">
                    <img src="../Images/autobus.png" alt="Imagen de un Autobus Escolar" width="10%"
                         class="rounded">
                    Servicio de transporte</h3>
                <p>Ofrecemos un servicio de transporte para llevar a los niños a y desde la guardería. Nuestro servicio
                    está
                    disponible
                    para niños de 6 meses a 5 años y cubre un radio de hasta 10 millas desde nuestra ubicación.</p>
                <ul>
                    <li>Radio de 5 millas: <strong>20.0€</strong> por viaje</li>
                    <li>Radio de 10 millas: <strong>30.0€</strong> por viaje</li>
                </ul>
            </article>
            <article>
                <h3 id="verano" class="titulo">
                    <img src="../Images/programaVerano.png" alt="Imagen de un programa de verano escolar" width="10%"
                         class="rounded">
                    Programas de verano</h3>
                <p>Durante las vacaciones escolares, ofrecemos programas de verano para los niños de 2 a 5 años.
                    Nuestros
                    programas
                    incluyen actividades al aire libre, juegos, proyectos creativos y excursiones.</p>
                <ul>
                    <li>Programa de verano de una semana: <strong>200.0€</strong> por semana</li>
                    <li>Programa de verano de dos semanas: <strong>400.0€</strong> por semana</li>
                </ul>
            </article>
        </section>
    </div>

    <!-- Contenido -->
    <div id="page-to-print">
        <h2 id="precios" class="text-center text-bold">Precios</h2>
        <?php
        include "serviciosTabla.php";
        ?>

        <!-- Formulario que nos permite imprimir la página de tarifas -->
        <form>
            <input type="button" value="Imprimir" onclick="printPage('page-to-print')"/>
        </form>
    </div>
    <hr>


    <!-- Pie de página -->
    <!--
            Dividimos el pie de página en dos secciones, uno para los enlaces rápidos
            y otro para la dirección y las redes sociales.
        -->
    <footer class="fondo text-white d-flex justify-content-center align-content-center">

        <!--Sección para los enlaces rápidos-->
        <section>
            <header>
                <h4 class="text-center"><em>ENLACES RÁPIDOS</em></h4>
            </header>
            <ul class="news d-flex justify-content-start align-content-start">
                <li>
                    <a href="../html/preguntas_frecuentes.html" class="text-white">Preguntas frecuentes</a>
                </li>
                <span> | </span>
                <!-- Para los demás enlaces, he utilizado la página del Campus de Extremadura -->
                <li>
                    <a href="http://campusvirtual.unex.es/" class="text-white">Aviso Legal</a>
                </li>
                <span>|</span>
                <li>
                    <a href="http://campusvirtual.unex.es/" class="text-white">Política de privacidad</a>
                </li>
            </ul>
            <hr>
            <small>@ 2020 Universidad de Extremadura - Jose Luis O. E. N.</small>
        </section>

        <!--Sección para la dirección y Redes sociales-->

        <section>
            <header>
                <h4 class="text-center"><em>CONTACTOS</em></h4>
            </header>
            <article class="d-flex justify-content-end align-content-end">
                <address class="text-center ml-4">
                    <ul class="news">
                        <li>Teléfono:<a href="tel:+34927217703">+34 927-217-703</a></li>
                        <li>Email: <a href="mailto:guardecc@unex.es">guardecc@unex.es</a></li>
                    </ul>
                    <small>C/ Virgen de la Montaña, 14
                        10003 Cáceres</small>
                </address>
            </article>
        </section>
    </footer>
</div>

<!--Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
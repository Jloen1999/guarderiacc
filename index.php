<!DOCTYPE html>
<html lang="en">
<head>
    <!--Título-->
    <title>Guardería</title>
    <!--Metadatos-->
    <meta charset="utf-8">
    <meta name="description" content="Página principal de la Guardería">
    <meta name="keywords" content="guarderíacc, inicio, Cáceres, guardería de Cáceres, guardería">
    <meta name="author" content="Jose Luis Obiang Ela Nanguan">
    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Favicon-->
    <link rel="icon" type="image/png" href="Images/fotosGaleria/logo.jpg"/>
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
    <link rel="stylesheet" href="css/estilos.css">
    <!-- JS -->
    <script src="js/funciones.js" defer></script>
    <script src="js/ClaseUsuario.js" defer></script>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

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
                <script src="traductor.js"></script>

            </article>
        </section>
        <section id="logueado" class="d-flex">
            <a href="index.php" class="pt-5"><img src="Images/fotosGaleria/logo.jpg"
                                                  alt="logo de la página principal de la guardería" width="100px"
                                                  class="rounded-circle"><span class="titulo">GUARDERÍACC</span></a>
            <!-- Contenedor para el formulario de inicio de sesión y registro-->
            <article class="bordeDerecho" id="login">
                <form action="#" id="form1" name='form1' autocomplete="off">
                    <input type="text" class="form-control mb-1" id="username" placeholder="username" required>
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
                    <button type="button" class="btn btn-secondary btn-sm" onclick="iniciarSesion()">SignIn</button>
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
    <nav class="navbar navbar-expand-sm fondo mt-12">
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
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="php/preciosServicios.php" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                        <!--Menú desplegable-->
                        <ul class="dropdown-menu bg-black">
                            <li class="dropdown-item"><a href="php/preciosServicios.php#cuidado"
                                                         class="nav-link text-white bg-black rounded-pill">Cuidado
                                    diario</a>
                            </li>
                            <li class="dropdown-item"><a href="php/preciosServicios.php#actividades"
                                                         class="nav-link text-white bg-black rounded-pill">Programas de
                                    actividades</a></li>
                            <li class="dropdown-item"><a href="php/preciosServicios.php#transporte"
                                                         class="nav-link text-white bg-black rounded-pill">Servicio de
                                    transporte</a></li>
                            <li class="dropdown-item"><a href="php/preciosServicios.php#verano"
                                                         class="nav-link text-white bg-black rounded-pill">Programas de
                                    verano</a></li>
                            <li class="dropdown-item"><a href="php/preciosServicios.php#precios"
                                                         class="nav-link text-white bg-black rounded-pill">Precios</a>
                            </li>
                        </ul>
                    </li>
                    <!--Hipervínculo 2-->
                    <li class="nav-item dropdown"><a href="html/actividades.html"
                                                     class="nav-link dropdown-toggle text-white" role="button"
                                                     data-bs-toggle="dropdown" aria-expanded="false">Actividades</a>
                        <!--Menú desplegable-->
                        <ul class="dropdown-menu bg-black">
                            <li class="dropdown-item"><a href="html/actividades.html#arte"
                                                         class="nav-link text-white bg-black rounded-pill">Clases de
                                    arte</a></li>
                            <li class="dropdown-item"><a href="html/actividades.html#musica"
                                                         class="nav-link text-white bg-black rounded-pill">Clases de
                                    música</a></li>
                            <li class="dropdown-item"><a href="html/actividades.html#creativo"
                                                         class="nav-link text-white bg-black rounded-pill">Proyectos
                                    creativos</a>
                            </li>
                            <li class="dropdown-item"><a href="html/actividades.html#excursiones"
                                                         class="nav-link text-white bg-black rounded-pill">Excursiones</a>
                            </li>
                        </ul>
                    </li>
                    <!--Hipervínculo 3-->
                    <li class="nav-item"><a href="html/contacto.html" target="_blank" class="nav-link text-white">Contacto</a>
                    </li>
                    <!--Hipervínculo 4: Nos muestra información sobre la accesibilidad web-->
                    <li class="nav-item"><a href="#accesibilidad" class="nav-link text-white">Accesibilidad</a>
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
                <script src="server.js"></script>

            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-start align-items-start">
        <section>
            <header class="d-flex justify-content-center align-items-center">
                <h2 class="mt-4" id="mensaje">Bienvenido a GuarderíaCC</h2>

            </header>
            <article class="justify-content-start align-items-start" id="articulo1">
                <header>
                    <h2>Sobre nosotros</h2>
                </header>
                <p><strong>GuarderíaCC</strong> es un centro autorizado de primer ciclo de educación infantil por la
                    consejería
                    de
                    educación de
                    la junta de
                    Extremadura en Cáceres que lleva 30 años al servicio de los más pequeños y de sus familias que
                    cuenta
                    con 4
                    valores fundamentales:</p>
                <!--Lista desordenada para enumerar los valores fundamentales de la Guardería -->
                <ul>
                    <li>Nuestro gran equipo de profesionales en educación,</li>
                    <li>Nuestros espacios adaptados (1000 m<sup>2</sup>) al desarrollo del proceso educativo,</li>
                    <li>Nuestro completo paquete de servicios,</li>
                    <li>Y nuestra excelente ubicación en pleno corazón de Cáceres.</li>
                </ul>
                <p>Trabaja para conseguir una educación integral, a través de la estimulación temprana, favoreciendo el
                    desarrollo madurativo y la personalidad de los niños de forma armónica e integral, a través del
                    juego y
                    desde un fuerte componente afectivo esencial para esta etapa tan importante en la vida de los niños.
                    Y cuenta también con la participación de los padres a la hora de gestionar este centro y desarrollar
                    actividades conjuntas centro-familia.</p>
            </article>

            <!--Artículo 2-->
            <article class="map" id="articulo2">
                <table class="table table-dark table-striped d-flex justify-content-center align-content-center">
                    <!-- Cabeceras -->
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Mapa</th>
                        <th>Cerrar Mapa</th>
                    </tr>
                    <tr>
                        <td>Guardería de Cáceres</td>
                        <td>Avenida Virgen de la Montaña, 14. 10003 Cáceres</td>
                        <td>
                            <!--Se incrusta el mapa siempre y cuando se pulsa este botón-->
                            <button class="btn btn-primary" onClick="openMap(38.933078, -6.347695)">Abrir</button>
                        </td>
                        <td>
                            <!--Se cierra el mapa siempre y cuando se pulsa este botón-->
                            <button class="btn btn-primary" onclick="closeMap()">Cerrar mapa</button>
                        </td>
                    </tr>

                </table>

            </article>
            <!--
                    Utilizamos JavaScript para llamar a la función "openMap" que recibe
                     los valores de latitud y longitud de la ubicación de la Guardería y así poder
                     incrustar el map a través del iframe.
                -->
            <!-- Contenedor que almacenará el mapa de geolocalización -->
            <div id="map_container"></div>

        </section>

        <div class="d-flex justify-content-end align-items-end">
            <!--Aside: Contenedor para representar contenido secundario o barra lateral-->
            <aside>
                <section>
                    <h2><a href="php/noticias.php">Noticias</a></h2>
                    <hr>
                    <ul class="news">
                        <li><a href="#" class="link-news">Nuevas actividades en la guardería</a></li>
                        <hr>
                        <li><a href="#" class="link-news">Celebramos el Día de los Abuelos</a></li>
                        <hr>
                        <li><a href="#" class="link-news">Inauguramos una nueva sala de juegos</a></li>
                        <hr>
                    </ul>
                    <article>
                        <h2><a href="php/encuesta.php">Encuentas</a></h2>
                    </article>
                </section>
                <!--Aquí iría el calendario-->
                <!--                <form id="form">-->
                <!--                    <label for="month">Mes:</label>-->
                <!--                    <select id="month">-->
                <!--                        <option value="1">Enero</option>-->
                <!--                        <option value="2">Febrero</option>-->
                <!--                        &lt;!&ndash; Opciones para los demás meses &ndash;&gt;-->
                <!--                    </select>-->
                <!--                    <label for="year">Año:</label>-->
                <!--                    <input type="number" id="year" min="1970" max="2099">-->
                <!--                    <button id="show-calendar">Mostrar calendario</button>-->
                <!--                </form>-->
                <!--                <div id="calendar"></div>-->
                <!--                <script src="js/calendar.js"></script>-->

                <div class="calendar">
                    <iframe src="https://calendar.google.com/calendar/embed?src=es.spain%23holiday%40group.v.calendar.google.com&ctz=Europe%2FMadrid"
                            style="border: 0" width="200" height="200"></iframe>
                </div>
            </aside>
        </div>

    </div>

    <div>
        <!--Sección para la galería de fotos-->
        <section class="experiencia">
            <h2 class="text-center"><a href="mostrarImagenes.php">Galería de fotos</a></h2>
            <div class="contenedor tres-columnas">
                <article class="entrada-blog">
                    <img src="Images/fotosGaleria/niñosCochecitoLogoPreciosServicios.jpg">
                    <p>Un entorno lleno de amor y diversión para tu tesoro más preciado. ¡Nuestra guardería es el lugar ideal para que crezca feliz y seguro!.</p>
                    <a href="#">Leer más</a>
                </article>

                <article class="entrada-blog">
                    <img src="Images/fotosGaleria/logo.jpg">

                    <p>En nuestra guardería, cada día es una aventura emocionante para explorar, aprender y hacer nuevos amigos. ¡Ven y descubre un mundo de posibilidades para tu hijo!</p>
                    <a href="#">Leer más</a>
                </article>

                <article class="entrada-blog">
                    <img src="Images/fotosGaleria/niñaPintandoLogoActividades.jpg">

                    <p>Confía en nosotros para brindarle a tu hijo un ambiente cálido y acogedor, donde se estimule su creatividad, curiosidad y desarrollo. ¡Nuestra guardería es su segundo hogar!</p>
                    <a href="#">Leer más</a>
                </article>
            </div>
        </section>
        <br>

        <!--Sección para el tema de la accesibilidad web-->
        <section>
            <hr>
            <h2 id="accesibilidad" class="text-center">Accesibilidad</h2>
            <div>
                <p class="d-flex justify-content-center align-items-center">
                    En nuestro sitio, hemos tomado medidas para garantizar que nuestro contenido sea accesible para
                    todos.
                    Algunas
                    de estas medidas incluyen:
                </p>
                <ul class="d-flex justify-content-center align-items-center">
                    <li>Utilizar etiquetas semánticas para marcar el contenido</li>
                    <li>Agregar descripciones de imágenes para usuarios con discapacidad visual</li>
                    <li>Utilizar colores de alto contraste para mejorar la legibilidad</li>
                </ul>
                <p class="d-flex justify-content-center align-items-center">
                    Si tienes algún problema al acceder al contenido de nuestro sitio, no dudes en ponerte en contacto
                    con
                    nosotros
                    para obtener ayuda.
                </p>
            </div>
        </section>
    </div>

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
                    <a href="html/preguntas_frecuentes.html" class="text-white">Preguntas frecuentes</a>
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
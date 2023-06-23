/**
 * Es un script utilizado en todas las paginas de la practica.
 * En esta practica utilizamos el localStorage porque me permite
 * almacenar datos en local de manera indefinida, hasta que un
 * usuario cierre la sesion
 *
 * @author Jose Luis Obiang Ela Nanguan
 * @version 1.0
 */


const axios = require("axios");

/**
 * Función que muestra u oculta la contraseña
 */
function showPassword() {
    //Obtenemos el campo de contraseña
    let password = document.getElementById('password');
    //Comprobar si el campo está oculto o no
    if (password.type === "password") {
        //Cambiamos el atributo a "text para mostrar la contraseña
        password.type = "text"
    } else {
        //Cambiamso el atributo a "password" para ocultar la contraseña
        password.type = "password"
    }
}

/**
 * función que abre un mapa dada la la titud y la longitud como parámetros
 * @param latitud
 * @param longitud
 */
function openMap(latitud, longitud) {
    if (navigator.geolocation) {
        var latlon = latitud + "," + longitud; /*Concatenamos la latitud y la longitud*/

        var img_url = "https://maps.google.com/maps?q=" + latlon + "&output=embed"; /*Obtenemos la url del map*/
        document.getElementById("map_container").innerHTML = "<iframe src='" + img_url + "' width = " +
            350 + " height = " + 300 + "></iframe>"; /*Lo pasamos al iframe e incrustamos el resultado en el elemento contenedor del mapa*/
    } else { /*En cason de que el navegador no soporte la geolocalización.*/
        x.innerHTML = "Tu navegador no soporta la geolocalización.";
    }
}

/**
 * función que cierra el mapa
 */
function closeMap() {
    document.getElementById('map_container').style.display = 'none'; /*Deshabilita el contenedor del mapa*/
}

/**
 función que permite imprimir el contenido de un elemento dado su ID
 @param idPage, Variable de tipo cadena que recibe el ID del elemento a imprimir
 */
function printPage(idPage) {
    let printContents = document.getElementById(idPage).innerHTML; /*Obtenemos el contenido del elemento que tiene ese id*/
    w = window.open(); /*Se abre una nueva ventana en donde podremos imprimir el contenido*/
    w.document.write(printContents); /*Se muestra el contenido en la ventana abierta.*/
    /*Es necesario si se trata de versiones superiores o iguales al 10 del navegador Internet Explorer*/
    w.document.close();
    w.focus(); /*Enfoca la impresión en el documento*/
    w.print(); /*Muestra la impresión*/
}

/**
 * Cambia el color del body cuando pulsamos un botón.
 * Para que las personas que prefieran visualizar la información
 * con una iluminación oscura o clara según prefieran.
 */
function changeColorPage() {
    var body = document.getElementsByTagName('body')[0];
    if (body.style.backgroundColor === 'white') {
        body.style.backgroundColor = 'rgba(0,0,0,0.65)';
        document.getElementById('modo').innerHTML = "Modo Claro"
    } else {
        body.style.backgroundColor = 'white';
        document.getElementById('modo').innerHTML = "Modo Oscuro"
    }
}

var usuarios = new Array();
var logueado = false;
var username;

/**
 * Funcion que inicializa la coleccion de usuarios, ya
 * sea obteniendo los datos del localStorage o nuestos
 * datos insertados
 */
function cargarUsuarios() {
    let u;

    u = JSON.parse(localStorage.getItem("usuarios"));
    if (u != null) {
        usuarios = u;
    } else {
        usuarios = new Array();

        usuarios.push(new Usuario("Y4093582X", "jose", "Jose Luis", "Ela Nanguan",
            "C/Don Benito, 2,2D", "602882976", "Hermano", "1995-21-04"), "Masculino");
        usuarios.push(new Usuario("12345678A", "alvaro", "Álvaro", "Zamoro", "C/11111", "111111111",
            "Primo", "2020-12-23", "Masculino"));
        usuarios.push(new Usuario("12345678B", "maria", "Maria", "Sereno Riballo", "C/11111", "111111111",
            "Abuela", "2020-12-23", "Femenino"));
        usuarios.push(new Usuario("12345678C", "carlos", "Carlos", "Rebolledo Aliseda", "C/11111", "111111111",
            "Padre", "2020-12-23", "Masculino"));

        localStorage.setItem("usuarios", JSON.stringify(usuarios));
    }
}

/**
 * Funcion que oculta el contenedor que permite a un
 * Usuario iniciar la sesion y activa el contenedor que
 * indica que un usuario ha iniciado la sesion
 */
function ocultarIniciarSesion() {

    if (localStorage.getItem("logueado")) {

        document.getElementById("login").style.display = "none";

        document.getElementById("usuario").innerHTML = localStorage.getItem("username");
        document.getElementById("cerrarSesion").style.display = "inline";

    }
}

/**
 * Funcion que comprueba si un Usuario esta registrado o no,
 * para iniciar la sesion. Para ello, recorremos la coleccion
 * de usuarios, comparando todos los username y password con los
 * introducidos en el fomulario de login, para ver si son iguales.
 * Tambien se puede iniciar sesion como administrador
 */
function iniciarSesion() {
    let password;

    cargarUsuarios();
    username = document.getElementById("username").value;
    console.log(username);
    password = document.getElementById("password").value;
    if (username.length > 0) {
        if (password.length > 0) {

            for (let usu of usuarios) {
                if (usu.username === username && usu.password === password) {
                    alert("Usuario logueado");

                    localStorage.setItem("logueado", "logueado");
                    localStorage.setItem("username", usu.username);

                    ocultarIniciarSesion();
                    irInicio();
                } else if (username === "admin" && password === "admin1234") {
                    alert("Sesión iniciada como Administrador");

                    localStorage.setItem("logueado", "logueado");
                    localStorage.setItem("username", "Administrador");

                    ocultarIniciarSesion();
                    irInicio();

                    username = "";
                    password = "";
                }
            }
            if (!localStorage.getItem("logueado"))
                alert("Error: los datos introducidos no pertenecen a ningun Usuario");

        } else {
            alert("Error: introduce tu Contraseña.");
        }
    } else {
        alert("Error: introduce tu nombre de usuario.");
    }
}

/**
 * Funcion que comprueba la existencia de us usuario
 * en la coleccion de usuarios a partir de su username
 *
 * @param {string} username  Recibe el nombre del usuario
 *                      a buscar
 *
 */
function comprobarUsuario(username) {

    for (let usu of usuarios) {
        if (usu.username === username) {
            return true;
        }
    }
    return false;
}

/**
 * Funcion que registra a un nuevo usuario. Para ello,
 * obtenemos todos los datos introducidos en el formulario
 * y nos aseguramos de que el nombre del usuario introducido no pertenezca
 * a otro usuario, ya que es unico por cada usuario.
 */
function registrarUsuario() {
    alert("Registrando usuario");
    let uObtenido;

    cargarUsuarios(); // Cargar la coleccion de usuarios

    // Obtenemos los datos introducidos en el formulario
    username = document.getElementById("username").value;
    password = document.getElementById("password").value;

    uObtenido = new Usuario(username, password);
    console.log(uObtenido.username);

    if (uObtenido.username.length > 0) {
        if (uObtenido.password.length > 0) {

            if (!comprobarUsuario(uObtenido.username)) { //Si no existe un usuario con ese username
                alert('Añadiendo usuario');
                usuarios.push(uObtenido); // Agregamos el usuario a la coleccion de usuarios
                localStorage.setItem("usuarios", JSON.stringify(usuarios));
                localStorage.setItem("logueado", "logueado");
                localStorage.setItem("username", username);
                for (let usu of usuarios) {
                    alert(usu.nombre);
                }
                alert("Usuario registrado correctamente");
                ocultarIniciarSesion();
                irInicio();
            } else {
                alert("Error: introduce otro username, este pertenece a otro usuario");
                irInicio();
            }

        } else {
            alert("Error: introduce una Contraseña válida.");
            irInicio();

        }
    } else {
        alert("Error: introduce un nombre de usuario válido.");
        irInicio();
    }

}

/**
 * Funcion que obtiene el nombre de la pagina actual,
 * necesario su uso a la hora de cerrar la sesion
 */
function getNombreUrl() {
    let sPath, sPage;

    sPath = window.location.pathname;
    sPage = sPath.substring(sPath.lastIndexOf("/") + 1);

    return sPage;
}

/**
 * Funcion que obtiene todos los datos del usuario
 * que tiene la sesion iniciada
 *
 * @param {string} username Recibe el nombre del usuario a
 *                     obtener
 */
function getUsuario(username) {

    for (let usu of usuarios) {
        if (username === usu.username) {
            return usu;
        }
    }
    return "";
}

/**
 * Funcion que nos permite redirigir la pagina actual a la
 * pagina de inicio, controlando el lugar donde nos encontramos
 * para no tener problemas con la navegacion de una pagina a otra
 */
function irInicio() {

    let nombrePagina;

    nombrePagina = getNombreUrl();

    if (nombrePagina === "index.php") {
        window.location.href = "index.php";
    } else {
        window.location.href = "../index.php";
    }
}

/**
 * Funcion que cierra la sesion de un usuario, eliminando del
 * localStorage los datos que nos hacen saber si esta logueado
 * o no y muestra el contenedor del formulario para iniciar la
 * sesion
 */
function cerrarSesion() {

    localStorage.removeItem("logueado");
    localStorage.removeItem("username");
    // localStorage.clear();
    document.getElementById("login").style.display = "inline";
    document.getElementById("cerrarSesion").style.display = "none";

    irInicio();
}


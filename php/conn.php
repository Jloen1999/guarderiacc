<?php
$host = "localhost";
    $usuario = "jloen";
    $clave = "Erick1999"; //MAMP root XAMPP ""
    $db = "servicios";
    $puerto = "3306";
//
$conn = mysqli_connect($host, $usuario, $clave, $db);

if (mysqli_connect_errno()) {
 	printf("xxxxError al conectarse a la base de datos__: %s\n", mysqli_connect_error());
	exit();
 }
printf("Conjunto de caracteres original: %s\n",mysqli_character_set_name($conn));

if (!mysqli_set_charset($conn,"utf8")) {
	printf("Error al cargar el conjunto de caracteres: %s\n", mysqli_error($conn));
	exit();
} else {
	printf("Conjunto de caracteres actual: %s\n",mysqli_character_set_name($conn));
}

?>
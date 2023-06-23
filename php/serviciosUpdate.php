<?php
include "conn.php";
$error = array();
if (isset($_POST["id"])) {
	//recuperar los datos
	$id = $_POST["id"];
	$nombre = $_POST["nombre"]??"";
    $esNuevo = $_POST["esNuevo"]??"";
	$precioConSeguro = $_POST["precioConSeguro"]??"";
	$precioSinSeguro = $_POST["precioSinSeguro"]??"";

	//Validaciones
	if ($nombre == "") {
        array_push($error, "El campo 'nombre' no puede ser vacío");
    }
    if ($esNuevo == "") {
        array_push($error, "El campo 'esNuevo' no puede ser vacío");
    }
    if ($precioConSeguro == "") {
        array_push($error, "El campo 'precio con Seguro' no puede ser vacío");
    }
    if ($precioSinSeguro == "") {
        array_push($error, "El campo 'precio sin Seguro' no puede ser vacío");
    }

	if (count($error)==0) {
		// Update
		$sql = "UPDATE historialServicios SET ";
		$sql.= "nombre='".$nombre."', ";
		$sql.= "esNuevo='".$esNuevo."', ";
		$sql.= "precioConSeguro='".$precioConSeguro."', ";
		$sql.= "precioSinSeguro='".$precioSinSeguro."' ";
		$sql.= "WHERE id=".$id;
		//
		//con query ejecutamos la instruccion
		//
		if ($conn->query($sql) === TRUE) {
		  echo "Servicio modificado correctamente<br>";
		  echo "<a href='preciosServicios.php'>Regresar</a>";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} else {
		//Desplegamos los errores
		print "<ul>";
		for ($i=0; $i < count($error); $i++) {
			print "<li>".$error[$i]."</li>";
		}
		print "</ul>";
	}
}
?>
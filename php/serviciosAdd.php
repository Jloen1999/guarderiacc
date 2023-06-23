<?php
include "conn.php";
$error = array();
if (isset($_POST["nombre"])) {
    //recuperar los datos
    $nombre = $_POST["nombre"] ?? "";
    $esNuevo = $_POST["esNuevo"] ?? "";
    $precioConSeguro = $_POST["precioConSeguro"] ?? "";
    $precioSinSeguro = $_POST["precioSinSeguro"] ?? "";
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
    if (count($error) == 0) {
        // Insertar
        $sql = "INSERT INTO historialServicios(nombre, esNuevo, precioConSeguro, precioSinSeguro) VALUES('" . $nombre . "','" . $esNuevo . "',";
        $sql .= "'" . $precioConSeguro . "','" . $precioSinSeguro . "')";
        //
        //con query ejecutamos la instruccion
        //
        if ($conn->query($sql) === TRUE) {
            echo "Servicio insertado correctamente";
            // Redireccionar a una página específica
            header("Location: preciosServicios.php");
            exit(); // Asegurar que el código se detenga después de redireccionar
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        //Desplegamos los errores
        print "<ul>";
        for ($i = 0; $i < count($error); $i++) {
            print "<li>" . $error[$i] . "</li>";
        }
        print "</ul>";
    }
}
?>
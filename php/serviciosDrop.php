<?php
global $conn;
include "conn.php";

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "DELETE FROM historialservicios WHERE id=".$id;
	if ($conn->query($sql) === TRUE) {
		  echo "Servicio borrado correctamente<br>";
		  echo "<a href='preciosServicios.php'>Regresar</a>";
	} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>

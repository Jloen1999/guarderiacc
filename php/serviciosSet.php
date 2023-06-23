<?php
include "conn.php";

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "SELECT * FROM historialServicios WHERE id=".$id;
	$r = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($r);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Servicios</title>
</head>
<body>
	<form action="serviciosUpdate.php" method="post">
		<label for="nombre">Nombre</label><br>
		<input type="text" name="nombre" id="nombre" required value="<?php print $data['nombre']; ?>"><br>
		<label for="esNuevo">Es nuevo</label><br>
		<input type="text" name="esNuevo" id="esNuevo" required value="<?php print $data['esNuevo']; ?>"><br>
		<label for="precioConSeguro">Precio con Seguro</label><br>
		<input type="text" name="precioConSeguro" id="precioConSeguro" value="<?php print $data['precioConSeguro']; ?>"><br>

		<label for="precioSinSeguro">Precio sin Seguro</label><br>
		<input type="text" name="precioSinSeguro" id="precioSinSeguro" value="<?php print $data['precioSinSeguro']; ?>"><br>

		<input type="hidden" name="id" value="<?php print $data['id']; ?>">

		<input type="submit" value="Enviar"><br>
	</form>

</body>
</html>
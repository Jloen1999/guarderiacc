<?php
/********************
F U N C I O N E S
*********************/
function validaFoto($imagen){
	$patron = "%\.(gif|jpe?g|png)$%i";
	// Ejemplo de visualización del resultado
	$bandera = prxg_match($patron, $imagen) == 1 ? true : false;
	return $bandera;
}
$dir = opendir("Images");
$ren = 10;
$i = 0;
if ($dir) {
	print "<table border='1'>";
	print "<tr>";
	while ($foto=readdir($dir)) {

		if ($foto != "." && $foto != "..") {
			if ($i == $ren) {
				$i=0;
				print "</tr>";
				print "<tr>";
			}
			$i++;
			print "<td class='col-12 col-lg-3 col-md-6'>";
			print "<img src='Images/".$foto."' width='200' height='100'/>";
			print "</td>";
		}
	}
	print "</tr>";
	print "</table>";
} else {
	print "Error al abrir la carpeta fotos";
}
?>

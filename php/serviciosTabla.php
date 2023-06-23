<?php
include "conn.php";
$sql = "SELECT * FROM historialServicios";
//leo todos los registros
$r = mysqli_query($conn, $sql);

print "<table border='1' class='table table-dark table-striped'>";
while ($data = mysqli_fetch_assoc($r)) {
    print "<tr>";
    print "<td>" . $data["nombre"] . "</td>";
    if ($data["esNuevo"] == 1) {
        print "<td>" . "<img src='../Images/tick.png' alt='true' width='20px' height='20px'" . "</td>";
    } else {
        print "<td>" . "<img src='../Images/cruz.png' alt='false' width='20px' height='20px'" . "</td>";
    }
    print "<td>" . $data["precioConSeguro"] . "€</td>";
    print "<td>" . $data["precioSinSeguro"] . "€</td>";
    print "<td><a href='serviciosDrop.php?id=" . $data["id"] . "'>Borrar</a></td>";
    print "<td><a href='serviciosSet.php?id=" . $data["id"] . "'>Modificar</a></td>";
    print "</tr>";
}
print "<tr>";
print "<td rowspan='2'>" . "<a href='../html/formularioServicios.html'>Insertar</a></td>";
print "<td>" . "<a href='almacenarServiciosCSV.php'>Guardar a CSV</a></td>";
print "</tr>";
print "</table>";
?>


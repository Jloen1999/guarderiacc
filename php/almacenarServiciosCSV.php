<?php
require "conn.php";

//DQL
$sql = "SELECT * FROM historialservicios";
$r = mysqli_query($conn, $sql);
$num = mysqli_num_rows($r);

touch("data.csv");
$archivo = fopen("data.csv","w");

while ($data =mysqli_fetch_array($r,MYSQLI_NUM)) {
  fputcsv($archivo, $data);
}
print "Se tranfirieron ".$num." registros";
fclose($archivo);
mysqli_close($conn);
?>
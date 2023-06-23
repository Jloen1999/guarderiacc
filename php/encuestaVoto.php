<?php  
$voto = $_GET["q"];

//archivo
$archivo = "voto.txt";
touch($archivo);
$r = file($archivo);

//Contenido
$arreglo = explode("||",$r[0]);
$si = ($arreglo[0]=="")?0:$arreglo[0];
$no = ($arreglo[1]=="")?0:$arreglo[1];

if ($voto==0) {
	$si++;
} else {
	$no++;
}

$salida = $si."||".$no;
$fp = fopen($archivo,"w");
fputs($fp,$salida);
$total = $si+$no;
print "<h2>Resultado</h2>";
print "<table>";
print "<tr>";
print "<td>Si:</td>";
print "<td><img src='poll.png' width='".(100*round($si/($total),2))."' height='20'/>";
print (100*round($si/($total),2))."%";
print "</td>";
print "</tr>";
print "<tr>";
print "<td>No:</td>";
print "<td><img src='poll.png' width='".(100*round($no/($total),2))."' height='20'/>";
print (100*round($no/($total),2))."%";
print "</tr>";
print "</table>";
?>
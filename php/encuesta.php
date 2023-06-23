<!DOCTYPE html>
<html>
<head>
	<title>Encuesta</title>
	<meta charset="utf-8">
	<script>
		function votar(voto){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("salida").innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET","encuestaVoto.php?q="+voto, true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
<h3>¿Has visitado alguna vez la guardería de Cáceres?</h3>
Si:<input type="radio" name="voto" value="0" onclick="votar(this.value)">
<br>
No:<input type="radio" name="voto" value="1" onclick="votar(this.value)">
<div id="salida"></div>
</body>
</html>
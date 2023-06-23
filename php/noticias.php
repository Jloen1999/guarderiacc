<!DOCTYPE html>
<html>
<head>
	<title>Lee noticias RSS-Reforma</title>
	<meta charset="utf-8">
	<script>
		window.onload = function(){
			document.getElementById("noticias").onchange = leeNoticias;
		}
		function leeNoticias(e){
			seccion = this.value;
			console.log(seccion);
			noticias = document.getElementById("salida");
			if(seccion==""){
				noticias.innerHTML = "";
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("salida").innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET","noticiasRSS.php?q="+seccion, true);
				xmlhttp.send();
			}

		}
	</script>
</head>
<body>
<select id="noticias">
	<option value="">Seleccione una sección</option>
	<option value="portada">Portada</option>
	<option value="ciudad">Ciudad</option>
	<option value="negocios">Negocios</option>
	<option value="cultura">Cultura</option>
	<option value="gadgets">Gadgets</option>
</select>
<div id="salida"></div>
</body>
</html>

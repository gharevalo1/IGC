<html>
<head> <script type="text/javascript" src="pagina4.js"></script>
<title>peso</title>
<link rel="stylesheet" type="text/css" href="pagina3.css">
</head>
<body background="img/fondo.jpg">
<div class="estilo" ><h1 >CALCULADORA DE MASA CORPORAL</h1>
<br>
<form method="post" action="pagina2.php">
<b>Ingrese el nombre:</b>
<input type="text" name="nombre" size="12" required>
<br>
<br>
<b>Ingrese Su Edad:</b>
<input type="text" name="edad" size="3" required>
<br>
<br>
<b>Sexo </b>

<input type="radio" name="sexo" value="femenino" checked="checked" onclick="mostrar()">femenino
<input type="radio" name="sexo" value="masculino"onclick="ocultar()">masculino<br>
<div><br>
<b>Estatura (cm):</b>
<input type="text" name="estatura"></input>
</div><br>
<div>
<b>Cuello (cm):</b>
<input type="text" name="cuello"></input>
</div><br>
<div>
<b>Cintura (m):</b>
<input type="text" name="cintura"></input>
</div><br>
<div id ="cadera" style="display:block">
<b>Cadera (cm):</b>
<input type="text" name="cadera"></input>
</div><br>

<input type="submit" value="Calcular">
<br>
<input type="reset" value="Borrar">

</form>
</div>
</body>
</html>
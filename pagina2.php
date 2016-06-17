<html>
<head> <script type="text/javascript" src="pagina4.js"></script>
<title>peso</title>
<link rel="stylesheet" type="text/css" href="pagina3.css">
 <style type="text/css">
  #center{
  background:white;
  text-align: center;
  margin-top: 15%;
  margin-left: 15%;
  margin-right: 15%;
  border-width: 15px;
  border-style: groove;
  border-color: grey;
  }
  #volver{
    font-size: 20px;
  }
  </style>
</head>

<?php
echo "<div id='center'";
$estatura=$_REQUEST['estatura'];
$cadera=$_REQUEST['cadera'];
$cuello=$_REQUEST['cuello'];
$cintura=$_REQUEST['cintura'];
$nombre=$_REQUEST['nombre'];

$PGC=0;
$rango="";

	
if($_REQUEST['sexo']=="femenino"){
$aux=1.29579-(0.35004*log10( $cintura + $cadera - $cuello )) + (0.221*log10($estatura));
  $PGC=(495/$aux)-450;


}


if ($_REQUEST['sexo']=="masculino") {
	
$aux=1.0324-(0.19077*log10( $_REQUEST['cintura']- $_REQUEST['cuello'] )) + 0.15456*log10($_REQUEST['estatura']);
  $PGC=(495/$aux)-450;

}
$PGC=round($PGC,PHP_ROUND_HALF_DOWN);

//hombres

if($_REQUEST['edad']>=19 and $_REQUEST['edad']<=24 and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
  	case ($PGC<6 and $PGC>=2):
  		$rango="Esencial";
  		break;

  	case ($PGC<9 and $PGC>=6):
  		$rango="Atleta";
  		break;

  	case ($PGC<15 and $PGC >=9):
  		$rango="Excelente";
  		break;

    case ($PGC<19 and $PGC >=15):
      $rango="Bueno";
      break;

      case ($PGC<23 and $PGC >=19):
      $rango="Estandar";
      break;
    case ( $PGC ==23):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >23):
    $rango="Obesidad";
      break;
  	default:
  		$rango="NA";
  		break;
  }

}

if($_REQUEST['edad']>=25 and $_REQUEST['edad']<=29 and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
    case ($PGC<6 and $PGC>=2):
      $rango="Esencial";
      break;

    case ($PGC<10 and $PGC>=6):
      $rango="Atleta";
      break;

    case ($PGC<16 and $PGC >=10):
      $rango="Excelente";
      break;

    case ($PGC<19 and $PGC >=16):
      $rango="Bueno";
      break;

      case ($PGC<24 and $PGC >=19):
      $rango="Estandar";
      break;
    case ( $PGC ==24):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >24):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=30 and $_REQUEST['edad']<=34 and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
    case ($PGC<6 and $PGC>=2):
      $rango="Esencial";
      break;

    case ($PGC<11 and $PGC>=6):
      $rango="Atleta";
      break;

    case ($PGC<17 and $PGC >=11):
      $rango="Excelente";
      break;

    case ($PGC<19 and $PGC >=17):
      $rango="Bueno";
      break;

      case ($PGC<25 and $PGC >=19):
      $rango="Estandar";
      break;
    case ( $PGC ==25):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >25):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=35 and $_REQUEST['edad']<=39 and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
    case ($PGC<6 and $PGC>=2):
      $rango="Esencial";
      break;

    case ($PGC<12 and $PGC>=6):
      $rango="Atleta";
      break;

    case ($PGC<18 and $PGC >=12):
      $rango="Excelente";
      break;

    case ($PGC<19 and $PGC >=18):
      $rango="Bueno";
      break;

      case ($PGC<26 and $PGC >=19):
      $rango="Estandar";
      break;
    case ( $PGC ==26):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >26):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=40 and $_REQUEST['edad']<=44 and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
    case ($PGC<6 and $PGC>=2):
      $rango="Esencial";
      break;

    case ($PGC<13 and $PGC>=6):
      $rango="Atleta";
      break;

    case ($PGC<19 and $PGC >=13):
      $rango="Excelente";
      break;

    case ($PGC<19 and $PGC >=19):
      $rango="Bueno";
      break;

      case ($PGC<27 and $PGC >19):
      $rango="Estandar";
      break;
    case ( $PGC ==27):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >27):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=45 and $_REQUEST['edad']<=49 and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
    case ($PGC<6 and $PGC>=2):
      $rango="Esencial";
      break;

    case ($PGC<15 and $PGC>=6):
      $rango="Atleta";
      break;

    case ($PGC<21 and $PGC >=15):
      $rango="Excelente";
      break;

    case ($PGC<25 and $PGC >=21):
      $rango="Bueno";
      break;

      case ($PGC<28 and $PGC >=25):
      $rango="Estandar";
      break;
    case ( $PGC ==28):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >28):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=50 and $_REQUEST['edad']<=54 and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
    case ($PGC<6 and $PGC>=2):
      $rango="Esencial";
      break;

    case ($PGC<17 and $PGC>=6):
      $rango="Atleta";
      break;

    case ($PGC<23 and $PGC >=17):
      $rango="Excelente";
      break;

    case ($PGC<26 and $PGC >=23):
      $rango="Bueno";
      break;

      case ($PGC<29 and $PGC >=26):
      $rango="Estandar";
      break;
    case ( $PGC ==29):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >29):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=55 and $_REQUEST['edad']<=59 and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
    case ($PGC<6 and $PGC>=2):
      $rango="Esencial";
      break;

    case ($PGC<19 and $PGC>=6):
      $rango="Atleta";
      break;

    case ($PGC<24 and $PGC >=19):
      $rango="Excelente";
      break;

    case ($PGC<28 and $PGC >=24):
      $rango="Bueno";
      break;

      case ($PGC<30 and $PGC >=28):
      $rango="Estandar";
      break;
    case ( $PGC ==30):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >30):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=60  and $_REQUEST['sexo']=="masculino"){
  switch ($PGC) {
    case ($PGC<6 and $PGC>=2):
      $rango="Esencial";
      break;

    case ($PGC<20 and $PGC>=6):
      $rango="Atleta";
      break;

    case ($PGC<25 and $PGC >=20):
      $rango="Excelente";
      break;

    case ($PGC<29 and $PGC >=25):
      $rango="Bueno";
      break;

      case ($PGC<31 and $PGC >=29):
      $rango="Estandar";
      break;
    case ( $PGC ==31):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >31):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

//Mujeres












if($_REQUEST['edad']>=19 and $_REQUEST['edad']<=24 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<15 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<20 and $PGC >=15):
      $rango="Excelente";
      break;

    case ($PGC<25 and $PGC >=20):
      $rango="Bueno";
      break;

      case ($PGC<30 and $PGC >=25):
      $rango="Estandar";
      break;
    case ( $PGC ==30):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >30):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}


if($_REQUEST['edad']>=25 and $_REQUEST['edad']<=29 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<16 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<21 and $PGC >=16):
      $rango="Excelente";
      break;

    case ($PGC<26 and $PGC >=21):
      $rango="Bueno";
      break;

      case ($PGC<31 and $PGC >=26):
      $rango="Estandar";
      break;
    case ( $PGC ==31):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >31):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=30 and $_REQUEST['edad']<=34 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<17 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<22 and $PGC >=17):
      $rango="Excelente";
      break;

    case ($PGC<27 and $PGC >=22):
      $rango="Bueno";
      break;

      case ($PGC<32 and $PGC >=27):
      $rango="Estandar";
      break;
    case ( $PGC ==32):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >32):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}


if($_REQUEST['edad']>=35 and $_REQUEST['edad']<=39 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<19 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<23 and $PGC >=19):
      $rango="Excelente";
      break;

    case ($PGC<28 and $PGC >=23):
      $rango="Bueno";
      break;

      case ($PGC<33 and $PGC >=28):
      $rango="Estandar";
      break;
    case ( $PGC ==33):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >33):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}


if($_REQUEST['edad']>=40 and $_REQUEST['edad']<=44 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<21 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<24 and $PGC >=21):
      $rango="Excelente";
      break;

    case ($PGC<29 and $PGC >=24):
      $rango="Bueno";
      break;

      case ($PGC<34 and $PGC >=29):
      $rango="Estandar";
      break;
    case ( $PGC ==34):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >34):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}


if($_REQUEST['edad']>=45 and $_REQUEST['edad']<=49 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<23 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<26 and $PGC >=23):
      $rango="Excelente";
      break;

    case ($PGC<31 and $PGC >=26):
      $rango="Bueno";
      break;

      case ($PGC<36 and $PGC >=31):
      $rango="Estandar";
      break;
    case ( $PGC ==36):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >36):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}


if($_REQUEST['edad']>=50 and $_REQUEST['edad']<=54 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<25 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<28 and $PGC >=25):
      $rango="Excelente";
      break;

    case ($PGC<33 and $PGC >=28):
      $rango="Bueno";
      break;

      case ($PGC<37  and $PGC >=33):
      $rango="Estandar";
      break;
    case ( $PGC ==37):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >37):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}


if($_REQUEST['edad']>=55 and $_REQUEST['edad']<=59 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<26 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<29 and $PGC >=26):
      $rango="Excelente";
      break;

    case ($PGC<34 and $PGC >=29):
      $rango="Bueno";
      break;

      case ($PGC<38 and $PGC >=34):
      $rango="Estandar";
      break;
    case ( $PGC ==38):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >38):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}

if($_REQUEST['edad']>=60 and $_REQUEST['sexo']=="femenino"){
  switch ($PGC) {
    case ($PGC<12 and $PGC>=7):
      $rango="Esencial";
      break;

    case ($PGC<27 and $PGC>=12):
      $rango="Atleta";
      break;

    case ($PGC<30 and $PGC >=27):
      $rango="Excelente";
      break;

    case ($PGC<35 and $PGC >=30):
      $rango="Bueno";
      break;

      case ($PGC<39 and $PGC >=35):
      $rango="Estandar";
      break;
    case ( $PGC ==39):
    $rango="Sobrepeso";
      break;
    
      case ( $PGC >39):
    $rango="Obesidad";
      break;
    default:
      $rango="NA";
      break;
  }

}


echo "</div>";
?>
<body background="img/fondo3.jpg">
 
<br>


<div id="resultado">
  <h1>RESULTADO</h1>
<?php

echo "<h1>----".$nombre." ----<h1>su porcentaje de grasa corporal es del ".$PGC."% el cual esta situado en el rango de <h1>----".$rango."---- <h1>para personas de su sexo.<h1>"."</div>";

?>
<div id="volver">
<div><input type='submit' name="boton" class="boton" id="volver" value='volver' onClick=" window.location.href='pagina1.php' "></div>
</div>
</body>
</html>
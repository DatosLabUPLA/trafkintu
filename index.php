<html>

<head>
	<title>TRAFKINTU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-PPSG2HWBLM"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-PPSG2HWBLM');
	</script>

</head>

<body>	
<h1>TRAFKINTU</h1>

<main>
<?php
phpinfo();
//CONECTAMOS CON LA BD
require "conexion.php";

//OBTENEMOS EL NÚMERO DEL NODO DENTRO DEL ÁRBOL (PARA SABER QUÉ CAMINO HEMOS TOMADO)
$nodo = 1;
$nodoRepuesto = 0;
$numPregunta = 1;
$proxPregunta = 2;

if(isset($_GET['n'])) {
	$nodo = $_GET["n"];
}

if(isset($_GET['r'])) {
	$nodoRepuesto = $_GET["r"];
}

if(isset($_GET['np'])) {
	$numPregunta = $_GET["np"];
	$proxPregunta = $numPregunta+1;
}

//------------------------------------------------------
//CALCULAMOS LO SIGUIENTES PASOS A SEGUIR

$nodoSi = $nodo * 2;
$nodoNo = $nodo * 2 + 1;

$nodoProbablementeSi = $nodoSi;
$nodoProbablementeNo = $nodoNo;

//-----------------------------------------------------
//OBTENEMOS UN NÚMERO AL AZAR ENTRE CERO Y UNO
//lo hacemos para evitar que tenga una tendencia a recorrer siempre el mismo camino

$aleatrio = rand(0,1);

$nodoAleatorio 	  = 0;	//EL QUE ELEGIMOS
$nodoAleatorioAlt = 0;	//EL CONTRARIO

if($aleatrio==0){
	$nodoAleatorio = $nodoNo;
	$nodoAleatorioAlt = $nodoSi;
}

else{
	$nodoAleatorio = $nodoSi;
	$nodoAleatorioAlt = $nodoNo;
}

//-----------------------------------------------------
//HACEMOS LA CONSULTA A LA BD
$consulta = "SELECT texto,pregunta FROM arbol WHERE nodo = ".$nodo.";";

$texto = '';
$pregunta = true;
 
if ($resultado = mysqli_query($enlace, $consulta)) {
 
	if($resultado->num_rows === 0)
    {
        echo 'No existe el nodo';
    }
	else{
		while ($fila = mysqli_fetch_row($resultado)) {
			$texto 	  = $fila[0];
			$pregunta = $fila[1];
		}
		//SI NO ES UNA PREGUNTA ES UN RESULTADO FINAL (TRAFKINTU DA UNA RESPUESTA)
		/*echo "<h2>PREGUNTA #".$numPregunta."</h2>";*/
		if($pregunta == 0){
			echo "<div class='contenedorPregunta'>";
			echo "<h2>" .$texto. "</h2>";
			echo "</div>";
		}
		//SI ES UNA PREGUNTA, PREGUNTAMOS (SI DUDAMOS, EN EL PARÁMETRO "R" GUARDAMOS LA RAMA ALTERNATIVA, SINO VALE CERO)
		else{
			echo "<div class='contenedorPregunta'>";
			echo "<h2>". $texto. "</h>";
			echo "</div>";
			echo "<div class='' >";
			echo "<h3><a class='button' color='#000' href='index.php?n=".$nodoSi."&r=0&np=".$proxPregunta."'>SI</a></h3>";
			echo "<h3><a class='button' href='index.php?n=".$nodoNo."&r=0&np=".$proxPregunta."'>NO</a></h3>";
			echo "<div class='limpiar'></div>";
			echo "</div>";
		}
	}
    mysqli_free_result($resultado);
}
?>
</main>

<footer>
<?php
	echo "<h3><div class=''>";
	echo "<a class=button href='index.php?n=1&r=0'>Volver a probar</a>";
	echo "<a class=button href='datos.php'>Datos de TRAFKINTU</a>";
	echo "</h3></div>";
?>
</footer>

</body>
</html>

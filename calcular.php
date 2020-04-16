<?php
if(!$_POST)
{
	header('Location:multiplo.html');
}

$tabla = $_POST['tabla'];
$nMaximo = $_POST['maximo'];
$multiplicador = 1;
?>


<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Tabla de Multiplicar</title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	
	<body>
		<h1>Tabla del <?php echo $tabla ?></h1>
		
		<?php
	while($multiplicador <= $nMaximo)
	{
		echo 
			"<p>{$tabla} * {$multiplicador} = ". $tabla * $multiplicador ."</p>";
		$multiplicador++;
	}
		?>
	</body>
	</html
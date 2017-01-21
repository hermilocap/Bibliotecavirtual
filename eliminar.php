<?php

include 'config/conexion.php';
include 'config/conectar.php';
$conexion = conectar();

$idImagen=$_GET['idImagen'];
$eliminar=mysql_query("DELETE FROM libros WHERE IdLibro='".$idImagen."'");


if ($eliminar)
{
	echo "
	<html>
		<head>
			<meta http-equiv='REFRESH' content='0 ; url=consulta.php'>
			<script >
				alert(Libro eliminado con exito!!!');
			</script>
		</head>
	
	</html>
	
	";
	
}

else
{
	
	echo "
	<html>
		<head>
			<meta http-equiv='REFRESH' content='0 ; url=consulta.php'>
			<script >
				alert('No pudo ser eliminado');
			</script>
		</head>
	
	</html>
	
	";
	
}




?>

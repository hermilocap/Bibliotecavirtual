<?php

include 'config/conexion.php';
include 'config/conectar.php';
$conexion = conectar();

    $nuevoId = $_POST['id'];
    $nuevonombre = $_POST['nombre'];
    $nuevoautor = $_POST['autor'];
    $nuevoeditorial = $_POST['editorial'];
    $nuevocategoria = $_POST['categoria'];
    $nuevodescripcion = $_POST['descripcion'];       

    $ruta="images";
$archivo=$_FILES['nuevaImagen']['tmp_name'];
$nombreArchivo=$_FILES['nuevaImagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;
    $destacado = $_POST['destacado'];
    $tipolibro=$_POST['tipo'];


$actualizar=mysql_query("UPDATE libros SET NombreLibro='".$nuevonombre."',AutorLibro='".$nuevoautor."',
EditorialLibro='".$nuevoeditorial."',CategoriaLibro='".$nuevocategoria."',DescripcionLibro='".$nuevodescripcion."',
ImagenLibro='".$ruta."',Destacado='".$destacado."',TipoLibro='".$tipolibro."' WHERE IdLibro='".$nuevoId."'",$conexion);

if ($actualizar)
{
	echo "
	<html>
		<head>
			<meta http-equiv='REFRESH' content='0 ; url=consulta.php'>
			<script>
				alert('Datos actualizado con exito!!!');
			
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
			<script>
				alert('La actualizacion fallo');
			
			</script>
		
		</head>
	
	
	</html>
	
	";
}



?>

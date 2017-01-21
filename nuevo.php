<?php
include 'config/conexion.php';
include 'config/conectar.php';
$conexion = conectar();


    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];       

//imagen libro
$ruta="images";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;

//archivo libro
$rutalibro="librosdescargas";
$archivolibro=$_FILES['urllibro']['tmp_name'];
$nombreArchivourllibro=$_FILES['urllibro']['name'];
move_uploaded_file($archivolibro,$rutalibro."/".$nombreArchivourllibro);
$rutalibro=$rutalibro."/".$nombreArchivourllibro;

    $destacado = $_POST['destacado'];
    $tipolibro = $_POST['tipolibro'];

    $query = "INSERT INTO libros (IdLibro, NombreLibro, AutorLibro, EditorialLibro, CategoriaLibro, DescripcionLibro, ImagenLibro, UrlLibro, Destacado, TipoLibro)
    VALUES(NULL,'$nombre', '$autor', '$editorial', '$categoria', '$descripcion', '$ruta', '$rutalibro', '$destacado', '$tipolibro')";

$insertar=mysql_query($query,$conexion) or die(mysql_error());


if($insertar)
{
    echo "<html>
        <head>
        
        
        </head>
        <body>
            <meta http-equiv='REFRESH' content='0 ; url=consulta.php'>
            <script>
            
                alert('Datos insertados con exito...');
            
            </script>
        </body>
    
    
    
    </html>";

}
else
{
    
    echo "<html>
        <head>
        
        
        </head>
        <body>
            <meta http-equiv='REFRESH' content='0 ; url=consulta.php'>
            <script>
            
                alert('La insercion Fallo ;(');
            
            </script>
        </body>
    
    
    
    </html>";
}
?>
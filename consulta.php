<?php
include 'config/conexion.php';
include 'config/conectar.php';
$conexion = conectar();

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- templatemo 417 grill -->
<!-- 
Grill Template 
http://www.templatemo.com/preview/templatemo_417_grill 
-->
    <head>
        <meta charset="utf-8">
        <title>Biblioteca Virtual CBTa 178</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-md-6">
                                <div class="cart-info">
                                    <i class="fa fa-shopping-cart"></i>
                                    <a id="user-info">
                            <?php 
                            session_start(); 
                                if (isset($_SESSION['Admin'])){
                                    $nombre = $_SESSION['nombre'];
                                    echo "Bienvenido $nombre <a href='salir.php' class='salir'>salir</a>";
                                }
                                else
                                {
                                    echo "Bienvenido <a href='login.php'  class='login'>login</a>";
                                }
                            ?>
                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </header>
         


            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>LISTA DE LIBROS...</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div id="contact-us">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                            <div class="message-form">
                                            <p>  <a  id="listarLibros" href="registrarlibro.php">Nuevo Libro..</a> </p>

                                                <?php

$sql="select * from libros";
$cs=mysql_query($sql,$conexion);
$cantidad=mysql_num_rows($cs);
if ($cantidad>0) {

		echo"<center>
<table border='3'>
<tr>
<td>Id</td>
<td>Nombre</td>
<td>Autor</td>
<td>Editoria</td>
<td>Categoria</td>
<td>Descripcion</td>
<td>Image</td>
<td>Destacado</td>
<td>TipoLibro</td>
<td>Eliminar</td>
<td>Actualizar</td>

</tr>";
		while($fila=mysql_fetch_array($cs)){
			        $id = $fila['IdLibro'];
                    $nombrelibro = $fila['NombreLibro'];
                    $autor =$fila['AutorLibro'];
                    $editorial =$fila['EditorialLibro'];
                    $categoria =$fila['CategoriaLibro'];
                    $descripcion = $fila['DescripcionLibro'];
                    $imagen = $fila['ImagenLibro'];
                    $destacado =$fila['Destacado'];
                    $tipolibro=$fila['TipoLibro'];

			
			echo "<tr>
<td>$id</td>
<td>$nombrelibro</td>
<td>$autor</td>
<td>$editorial</td>
<td>$categoria</td>
<td>$descripcion</td>
<td><img src='$imagen' width='80' height='80'></td>
<td>$destacado</td>
<td>$tipolibro</td>

<td><a href='eliminar.php?idImagen=$id'>Eliminar</a></td>
<td><a href='cambiarlibro.php?idImagen=$id&nombre=$nombrelibro&autor=$autor&editorial=$editorial&categoria=$categoria&descripcion=$descripcion&imagen=$imagen&destacado=$destacado&tipo=$tipolibro'>Actualizar</a></td>

</tr>";
			}
			
			echo "</table>
</center>";
    # code...
}
else{
          echo "<div id='finalizado'><p>No se encontraron datos para mostrar</p> <a id='regresar-login' href='registrarlibro.php'>regresar a inicio</a></div>";
                }

?>


                                         </div>
                                        </div>
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                        
                </div>
            </div>


           
            <footer>
                <div class="container">
                    <div class="bottom-footer">
                      <p id="texend">Todos los Derechos Reservados 2015 | <a href="">Centro de Bachillerato Tecnologico Agropecuario N° 178</a></p>
                    </div>
                </div>
            </footer>

    </body>
</html>
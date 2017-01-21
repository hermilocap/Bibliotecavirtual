
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
                                <h2>ACTUALIZAR DATOS DE LIBROS...</h2>
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
                                            <?php


include 'config/conexion.php';
include 'config/conectar.php';
$conexion = conectar();


    $nuevoId = $_GET['idImagen'];
    $nuevonombre = $_GET['nombre'];
    $nuevoautor = $_GET['autor'];
    $nuevoeditorial = $_GET['editorial'];
    $nuevocategoria = $_GET['categoria'];
    $nuevodescripcion = $_GET['descripcion'];
    $imagelibro= $_GET['imagen'];
    $nuevodestacado= $_GET['destacado'];       
    $nuevotipolibro= $_GET['tipo'];

                                            echo "
                                                <form  action='actualizar.php' method='post' class='send-message' enctype='multipart/form-data'>
                                                    <div class='row'>
                                                    <div class='name col-md-4'>
                                                    <label>Id</label>
                                                        <input type='text' name='id' id='name' value='$nuevoId' />
                                                    </div>
                                                    <div class='name col-md-4'>
                                                    <label>Nombre</label>
                                                        <input type='text' name='nombre' id='name' value='$nuevonombre' />
                                                    </div>
                                                    <div class='email col-md-4'>
                                                    <label>Autor</label>
                                                        <input type='text' name='autor' id='email' value='$nuevoautor'/>
                                                    </div>
                                                    <div class='subject col-md-4'>
                                                    <label>Editorial</label>
                                                <input type='text' name='editorial' id='subject' value='$nuevoeditorial'/>
                                                    </div>
                                                    <div class='subject col-md-4'>
                                                    <label>Categoria</label>
                                                    <input type='text' name='categoria' id='subject' value='$nuevocategoria'/>
                                                    </div>

                                                    </div>
                                                    <div class='row'>        
                                                        <div class='text col-md-12'>
                                                        <label>Descripcion</label>
                                                    <textarea type='hidden' name='descripcion'>$nuevodescripcion</textarea>
                                                        </div>   
                                                    </div>
                                                    <div class='subject col-md-4'>
                                                    <label>Imagen</label>
                                                       <img src='$imagelibro'>
                                                       <br><br>
                                                       <input type='file' name='nuevaImagen'>
                <br><br>
                                                    </div>
                                                    <div class='subject col-md-4'>
                                                    <label>Destacado</label>
                                                        <input type='text' name='destacado' id='subject' value='$nuevodestacado' />
                                                    </div>
                                                    <div class='subject col-md-4'>
                                                    <label>Tipo</label>
                                                        <input type='text' name='tipo' id='subject' value='$nuevotipolibro' />
                                                    </div>                              
                                                    <div class='send'>
                                                        <button type='submit'>Actualizar</button>

                                                    </div>
                                                </form>
                                               " ?>
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
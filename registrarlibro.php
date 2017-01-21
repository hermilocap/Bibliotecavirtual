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
          <link rel="stylesheet" href="css/estilos.css">
       <script src="js/funciones.js"></script>
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
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
                                    echo "Bienvenido: $nombre <a href='salir.php' class='salir'>salir</a>";
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
                                <h2>REGISTRAR UN NUEVO LIBRO...</h2>
                                
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

                                                <form  action="nuevo.php" method="post" class="send-message" enctype="multipart/form-data" onsubmit="return validate()">
                                                    <div class="row">
                                                    <div class="name col-md-5">
                                                    <label>Nombre Libro:</label>
                                                        <input type="text" class='nombre' name="nombre" id="nombre" required pattern="^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\^&\*\?_~\/]{4,20}*$" title="Por ejemplo:Biologia"/>
                                                      
                                                    </div>
                                                    <div class="email col-md-5">
                                                        <label>Autor:</label>
                                                        <input type="text" class='autor' name="autor" id="autor" required pattern="^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\^&\*\?_~\/]{4,20}*$" title="Por ejemplo:Marcela"/>
                                                    </div>
                                                    <div class="subject col-md-5">
                                                    <label>Editorial:</label>
                                                        <input type="text" class='editorial' name="editorial" id="editorial" required pattern="^[A-Za-z ÑñáéíóúÁÉÍÓÚ]*$" title="Por ejemplo:Prentice Hall"/>
                                                    </div>
                                                    <div class="subject col-md-5">
                                                    <label>Categoria:</label>
                                                    <select name="categoria"  class="tipos"> 
                                                    <option id="0" value="0" selected="selected">Elige categoria</option>
                                                    
                                                <option value="Matematicas">Matematicas</option>
                                                    <option value="Historia">Historia</option>
                                                    <option value="Quimica">Quimica</option>
                                                    <option value="Fisica">Fisica</option>
                                                        <option value="Fisica">Ecologia</option>
                                            <option value="Diccionarios">Diccionarios</option>
                                                    <option value="Biologia">Biologia</option>                                                <option value="Zootecnia">Ingles</option>
                                            <option value="Psicologia">Psicologia</option>
                        <option value="Orientacion Vocacional">Orientacion Vocacional</option>
                                                <option value="Agronomia">Agronomia</option>
                                                <option value="Agricultura">Agricultura</option>
                                                <option value="Apicultura">Apicultura</option>
                                                <option value="Acuacultura">Acuacultura</option>
                                        <option value="Dibujo Tecnico">Dibujo Tecnico</option>
                                                    <option value="Proyectos">Proyectos</option>
                                            <option value="Proyectos">Android Magazine</option>
                                <option value="Proyectos">Historia National Geographic</option>
                                        <option value="Proyectos">National Geographic</option>
                                            <option value="Proyectos">Muy Interesante</option>
                                            <option value="Proyectos">Personal Computer</option>
                                     <option value="Proyectos">Computer Hoy</option>
                                         <option value="Proyectos">TICs</option>
                                 <option value="Proyectos">Viajes National Geographic</option>
                                                <option value="Zootecnia">Zootecnia</option>
                                                    </select>

                                                    </div>

                                                    </div>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                        <label>Descripcion:</label>
                                                            <input name="descripcion" type="text"  id="descripcion" class="descripcion" required pattern="^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\^&\*\?_~\/]{4,20}*$" title="Por ejemplo:Contiene nociones basicas de metodos biointensivos de agricultura"></input>
                                                        </div>   
                                                    </div>
                                                    <div class="row">
                                                    <div class="subject col-md-5">
                                                    <label>Imagen:</label>
                                                        <input type="file" class='imagen' name="imagen" id="imagen" required />
                                                    </div>
                                                    <div class="subject col-md-5">
                                                    <label>Url Libro:</label>
                                                        <input type="file" class='imagen' name="urllibro" id="imagen" required />
                                                    </div>
                                                    <div class="subject col-md-5">
                                                    <label>Destacado:</label>
                                                        <input type="text" class='destacado' name="destacado" id="destacado" pattern="[0-9]{1}" required placeholder="Escriba un valor numerico 1 y 0" title="Por ejemplo:1,0" height="200px" />
                                                    </div>
                                                    <div class="subject col-md-5">
                                                    <label>Tipo Documento:</label>
                                                    <select name="tipolibro" class="tipos" > 
                                                    <option id="0" value="0" selected="selected">Elige documento</option>
                                                    <option value="Libros">Libros</option>
                                                    <option value="Revistas">Revistas</option>
                                                    </select>
                                                    </div>  
                                                    </div>
                                                    <div class="row">                             
                                                    <div class="send">
                                                        <button type="submit"  class="boton" name="boton">Guardar</button> 

                                                        <a href="consulta.php" id="listarLibros">Listar</a> 

                                                    </div>
                                                    </div>
                                                </form>
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
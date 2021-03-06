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
              
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" widthe="100" height="130" title="CBTa N°178" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="products.php">Libros</a></li>
                                        <li><a href="revistas.php">Revistas</a></li>
                                        <li><a href="about-us.php">Nosotros</a></li>
                                        <li><a href="links.php">Links</a></li>
                                        <li><a href="contact-us.php">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="search-box">  
                                     <form name="search_form" method="post" class="search_form" action="buscador.php">

                                        <input id="search" type="text" name="titulo" required pattern="^[A-Za-z ÑñáéíóúÁÉÍÓÚ]*$" title="Por ejemplo:Biologia, Marcela" />
                                        <input type="submit" id="search-button" name="btn" value="buscar" title="buscar" />
                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Nuestros Libros</h2>
                                <span>Inicio / <a href="products.php">Categorias</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="products-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-heading">
                                <h2>CATEGORIAS</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                                <li><span class="filter" data-filter="all"><a href="products.php">Todos</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="matematicas.php">Matematicas</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="historia.php">Historia</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="quimica.php">Quimica</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="Fisica.php">Fisica</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="diccionario.php">Diccionarios</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="biologia.php">Biologia</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="zootecnia.php">Zootecnia</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="psicologia.php">Psicologia</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="orientacionvocacional.php">Orientacion Vocacional</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="agronomia.php">Agronomia</a></span></li>

                                <li><span class="filter" data-filter=".ginger"><a href="agricultura.php">Agricultura</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="apicultura.php">Apicultura</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="acuacultura.php">Acuacultura</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="dibujotecnico.php">Dibujo Tecnico</a></span></li>
                                <li><span class="filter" data-filter="all"><a href="proyectos.php">Proyectos</a></span></li>
                                <li><span class="filter" data-filter=".pizza"><a href="computacion.php">Computacion</a></span></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="Container">
                         <div class="row">
                      <?php 
                $query = mysql_query("SELECT * FROM libros where Destacado=1 AND  TipoLibro='Libros'",$conexion);
                while ($fila = mysql_fetch_array($query)) {
                    $id = $fila['IdLibro'];
                    $nombrelibro = $fila['NombreLibro'];
                    $autor =$fila['AutorLibro'];
                    $descripcionlibro = $fila['DescripcionLibro'];
                    $imagenlibro = $fila['ImagenLibro'];
                     $urllibro=$fila['UrlLibro'];

                ?>
                        <div class="col-md-4 col-sm-6" style="height: 208px; width: 180px; margin-bottom: 30px;">
                            <div class="blog-post">
                                <div class="blog-thumb" style="width: 140px;">
                                <img src="<?php echo $imagenlibro ?>" style="width: 140px; height: 208px;"/>
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                    <h4><?php echo $nombrelibro ?></h4> 
                                     <span><?php echo $autor ?></span>
                                    </div>
                                    <div class="content-hide">
                                    
                                    <!-- <a href="#">Continuar leyendo</a> -->
                                <form action="detallelibro.php" method="post">
                              <input type="hidden" name="IdLibro"  value="<?php echo $id ?>">
                               <input type="hidden" name="NombreLibro" value="<?php echo $nombrelibro ?>">
                               <input type="hidden" name="AutorLibro" value="<?php echo $autor ?>">
                               <input type="hidden" name="DescripcionLibro" value="<?php echo $descripcionlibro ?>">
                               <input type="hidden" name="ImagenLibro" value="<?php echo $imagenlibro ?>">
                                <input type="hidden" name="UrlLibro" value="<?php echo $urllibro ?>">                               
                   
                               <input type="submit" id="detalle"  value="continuar leyendo" />  
                               </form>
                                         
                                    </div>
                                </div>
                            </div>
                        </div><?php 
                    }
                    mysql_close();

                 ?>
                    </div>
                   

                    </div>
                    <div class="pagination">
                        <div class="row">   
                            <div class="col-md-12">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                         
                </div>
            </div>



			
            <footer>
                <div class="container">
                    
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">Acerca de</h4>
                                    <p>La Biblioteca Virtual te ofrece una amplia gama de recursos electrónicos como libros, 
                                    artículos, revistas, noticias, boletines y bases de datos diversas del CBTa 178, 
                                    para apoyarte en todo momento y desde cualquier lugar en tu proceso de aprendizaje. 
                                    <br>Encuentra también el catálogo en línea de las colecciones disponibles en la biblioteca física.</br></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">Mision</h4>
                                    <p>Los libros subidos a la biblioteca virtual son en su gran mayoría de dominio público y/o sus autores han autorizado el uso de los ejemplares. 
                                    Algunos fragmentos de obras comerciales pueden estar presentes con fines educativos.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">Vision y Valores</h4>
                                    <p>Los libros subidos a la biblioteca virtual son en su gran mayoría de dominio público y/o sus autores han autorizado el uso de los ejemplares. 
                                    Algunos fragmentos de obras comerciales pueden estar presentes con fines educativos.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>01 741-414-3145</li>
                                        <li><i class="fa fa-globe"><a href="#" target="_blank"></i>Sitio Web CBTa N°178</li></a>
                                        <li><i class="fa fa-envelope"></i><a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=12&ct=1429683303&rver=6.4.6456.0&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fsnt152.mail.live.com%2Fdefault.aspx%3Fmkt%3Des-us%26rru%3Dinbox&lc=2058&id=64855&mkt=es-us&cbcxt=mai" target="_blank">
                                        cbta178@hotmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">Mas informacion</h4>
                                    <p>Los libros subidos a la biblioteca virtual son en su gran mayoría de dominio público y/o sus autores han autorizado el uso de los ejemplares. 
                                    Algunos fragmentos de obras comerciales pueden estar presentes con fines educativos.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>01 741-414-3145</li>
                                        <li><i class="fa fa-globe"><a href="#" target="_blank"></i>Sitio Web CBTa N°178</li></a>
                                        <li><i class="fa fa-envelope"></i><a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=12&ct=1429683303&rver=6.4.6456.0&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fsnt152.mail.live.com%2Fdefault.aspx%3Fmkt%3Des-us%26rru%3Dinbox&lc=2058&id=64855&mkt=es-us&cbcxt=mai" target="_blank">
                                        cbta178@hotmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p id="texend">Todos los Derechos Reservados 2015 | <a href="">Centro de Bachillerato Tecnologico Agropecuario N° 178</a></p>
                    </div>
                </div>
            </footer>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
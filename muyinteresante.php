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
                                <div class="home-account">
                                    <a href="index.php">Inicio</a>
                                    <a href="login.php">Mi cuenta</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cart-info">
                                    <i class="fa fa-shopping-cart"></i>
                                    <a href="login.php">Si eres administrador podras iniciar sesion en la biblioteca virtual.. pulsando aqui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="#"><img src="images/logo.png" widthe="100" height="130" title="Grill Template" alt="Grill Website Template" ></a>
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

                                        <input id="search" type="text" name="titulo" />
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
                                <span>Inicio / <a href="apicultura.php">Muy Interesante</a></span>
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
                                <h2>Muy Interesante</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" id="Container">
                         <div class="row">
                      <?php 
                $query = mysql_query("SELECT * FROM libros where CategoriaLibro='Muy Interesante' AND  TipoLibro='Revistas'",$conexion);
                while ($fila = mysql_fetch_array($query)) {
                    $id = $fila['IdLibro'];
                    $nombrelibro = $fila['NombreLibro'];
                    $autor =$fila['AutorLibro'];
                    $descripcionlibro = $fila['DescripcionLibro'];
                    $imagenlibro = $fila['ImagenLibro'];
                     $urllibro=$fila['UrlLibro'];

                ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                <img src="<?php echo $imagenlibro ?>"/>
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                    <h4><?php echo $nombrelibro ?></h4> 
                                     <span><?php echo $autor ?></span>
                                    </div>
                                    <div class="content-hide">
                                    <p><?php echo $descripcionlibro ?></p>  
                                    <!-- <a href="#">Continuar leyendo</a> -->
                                <form action="detallelibro.php" method="post">
                              <input type="hidden" name="IdLibro"  value="<?php echo $id ?>">
                               <input type="hidden" name="NombreLibro" value="<?php echo $nombrelibro ?>">
                               <input type="hidden" name="AutorLibro" value="<?php echo $autor ?>">
                               <input type="hidden" name="DescripcionLibro" value="<?php echo $descripcionlibro ?>">
                               <input type="hidden" name="ImagenLibro" value="<?php echo $imagenlibro ?>">
                                <input type="hidden" name="UrlLibro" value="<?php echo $urllibro ?>">                               
                   
                               <input type="submit" id="detalle" value="continuar leyendo" />  
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
                                    <li><a href="#">>></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>



			<footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="social-bottom">
                                    <span>Redes sociales:</span>
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-rss"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">Acerca de</h4>
                                    <p>Grill is free HTML5 template by <span class="blue">template</span><span class="green">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                                    <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Categorias</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Matematicas</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Historia</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Bilogia</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Quimica</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Zootecnia</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Fisica</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="recent-posts">
                                    <h4 class="footer-title">Directorio</h4>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post1.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                            <span>24/12/2084</span>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post2.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Simple and effective meals</a></h6>
                                            <span>18/12/2084</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">Mas informacion</h4>
                                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>010-020-0340</li>
                                        <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>Copyright © 2015 <a href="#">Colegio de Bachilleres Plantel 15</a></p>
                    </div>
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
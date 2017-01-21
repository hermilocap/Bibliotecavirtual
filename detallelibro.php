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
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script> <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

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
                                <span>Inicio / <a href="products.php">Descargas</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
            <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>CONTENIDOS</h2>
                                
                            </div>
                        </div>
                    </div>   

                    <div class="row">
                    <div class="contenedor-detalle">
                      <?php 
                    if(isset($_POST['IdLibro'])){
                    $id =$_POST['IdLibro'];
                    $nombrelibro=$_POST['NombreLibro'];
                    $autor=$_POST['AutorLibro'];
                    $descripcionlibro=$_POST['DescripcionLibro'];
                    $imagenlibro=$_POST['ImagenLibro'];
                    $urllibro=$_POST['UrlLibro'];
                ?>
                       <div id="contenedor-detalle-imagen">        
                    <img src="<?php echo $imagenlibro ?>" width="300px"  class="detalle-imagen"/>
                             
                       </div>
                        <div class="detalle-libro">
                                    <h4><strong>Nombre:</strong><?php echo $nombrelibro ?></h4> 
                                     <span><strong> Autor:</strong> <?php echo $autor ?></span>
                                    
                    
                                    <p><strong>CONTENIDO:</strong><?php echo $descripcionlibro ?></p> 
                                <a href="<?php echo $urllibro ?>" download="<?php echo $nombrelibro ?>" id="descargar">Descargar</a>
                                <a href="<?php echo $urllibro ?>"  id="descargar">Leer</a>
                                
                                </div>

                        <?php 
					}
					mysql_close();

			     ?>
                    </div>

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
                                        <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh Juices</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li>
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
                        <p>Copyright © 2014 <a href="#">Colegio de Bachilleres Plantel 15</a></p>
                    </div>
                </div>
            </footer>   
    </body>
</html>
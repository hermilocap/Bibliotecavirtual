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
                                    <a href="index.php"><img src="images/logo.png" widthe="100" height="130" title="CBTa N°178" alt="Grill Website Template" ></a>
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
                                        <input id="search" type="text" name="titulo" required pattern="^[A-Za-z ÑñáéíóúÁÉÍÓÚ]*$" title="Por ejemplo:Biologia, Marcela"/>
                                        <input type="submit" id="search-button" name="btn" value="buscar" title="buscar" />
                                                                       
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </header>
            

            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1>Delicious Meals</h1>
                            <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                            <br><br>eget tellus luctus fermentum.</p>
                            <a href="single-post.html">Shop Now</a>
                        </div>
                      <img src="images/slide1.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Ice-cream Menus</h1>
                            <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam 
                            <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                            <a href="single-post.html">More Details</a>
                        </div>
                      <img src="images/slide2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Healthy Drinks</h1>
                            <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet 
                            <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                            <a href="single-post.html">Get Ready</a>
                        </div>
                      <img src="images/slide3.jpg" alt="" />
                    </li>
                  </ul>
                </div>
            </div>


            <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>BUSQUEDA</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
               
  
                    
                    <div class="row">
               
                            <?php
//buscar por nombre del libro
               $titulo = $_POST['titulo'];
                $query = mysql_query("SELECT * FROM libros where NombreLibro like'%".$titulo."%' or AutorLibro like'%".$titulo."%'", $conexion);
                $cantidad=mysql_num_rows($query);
                if ($cantidad>0) {
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
                                   
                                     <form action="detallelibro.php" method="post">
                              <input type="hidden" name="IdLibro"  value="<?php echo $id ?>">
                               <input type="hidden" name="NombreLibro" value="<?php echo $nombrelibro ?>">
                               <input type="hidden" name="AutorLibro" value="<?php echo $autor ?>">
                               <input type="hidden" name="DescripcionLibro" value="<?php echo $descripcionlibro ?>">
                               <input type="hidden" name="ImagenLibro" value="<?php echo $imagenlibro ?>">
                               <input type="hidden" name="UrlLibro" value="<?php echo $urllibro ?>">
                                
                               <input type="submit" id="detalle"  width="100px" value="Ver mas" />  
                               </form>        
                                    </div>
                                </div>
                            </div>
                        </div><!-- aqui va -->
                        <?php 
                    }
            }
            else{
          echo "<div id='finalizado'><p>No se encontraron coincidencias</p> <a id='regresar-login' href='index.php'>regresar a inicio</a></div>";
                }
                    mysql_close();
                 ?>

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
                        <p id="texend">Todos los Derechos Reservados 2015 | <a href="">Centro de Bachillerato Tecnologico Agropecuario N° 178</a></p>
                    </div>
                </div>
            </footer>
			    
       
    </body>
</html>
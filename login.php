<?php
include 'config/conexion.php';
include 'config/conectar.php';

$conexion = conectar();

//si se encio el id del textbox del login
    if (isset($_POST['usuario']) and isset($_POST['password'])) {
        
        //recibo datos de enviados
        $nombreusuario = $_POST['usuario'];
        $password = $_POST['password'];
        
        //consulto en bd el nombre de usuario
        $query = mysql_query("SELECT * FROM usuarios where nombreusuario='$nombreusuario'",$conexion);
    
    //si existe datos 
        if (mysql_num_rows($query)>0) {

            //inicio sesion
            session_start();
            
            // ejecuto la consulta
            while ($fila = mysql_fetch_array($query)) {
                // guardo el id y nombre del admin...
                $_SESSION['Admin'] = $fila['idusuario'];
                $_SESSION['nombre'] = $fila['nombreusuario'];
            }
            // si es admin inicia sesion caso contrario manda ala pag. principal
            if ($_SESSION['Admin']) {
                
                header("Location: registrarlibro.php");
            }
            else{
                header("Location: index.php");
            }
        }else{
            $encontrado = 0;
        }

    }

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
                           
                        </div>
                    </div>
                </div>
            </header>
            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>LOGIN</h2>
                                <span>Inicio / <a href="contact-us.html">Inicio de sesion</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>INICIO DE SESION</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div id="contact-us">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                    
                                        <div class="col-md-8">  
                                            <div class="message-form">                <?php
                    if (isset($encontrado)) {
                        echo "<div id='finalizado'><p>Usuario o password incorrectos...</p> <a id='regresar-login' href='login.php'>Regresar a Login</a></div>";
                     } 
                     else{
                ?>
                                                <form  method="post" class="send-message">
                                                    <div class="row">
                                                    <div class="name col-md-5">
                                                    <label>Usuario:</label>
                                                        <input type="text" name="usuario" id="name" placeholder="Usuario" pattern="^[A-Za-z ÑñáéíóúÁÉÍÓÚ]*$" required  title="Password es texto. Por ejemplo:Yova"/>
                                                    </div>
                                                    
                                                    <div class="subject col-md-5">
                                                    <label>Password:</label>
                                                        <input type="password" name="password" id="subject" placeholder="Password" pattern="[0-9]{3}" title="Password es numerico. Por ejemplo:123"  required />
                                                    </div>

                                                    </div>
                                                                                  
                                                    <div class="send">
                                                        <button type="submit">Login</button>
                                                    </div>
                                                </form>
                                                    <?php } ?>
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
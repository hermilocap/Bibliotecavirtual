<?php
include 'config/conexion.php';
include 'config/conectar.php';
$conexion = conectar();

    if(isset($_POST['boton'])){
        if($_POST['nombre'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';
        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = '<span class="error">Ingrese un email correcto</span>';
        }else if($_POST['asunto'] == ''){
            $errors[3] = '<span class="error">Ingrese un asunto</span>';
        }else if($_POST['mensaje'] == ''){
            $errors[4] = '<span class="error">Ingrese un mensaje</span>';
        }else{
            $dest = "hermilocap@hotmail.com"; //Email de destino
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto']; //Asunto
            $cuerpo = $_POST['mensaje']; //Cuerpo del mensaje
            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
 
            if(mail($dest,$asunto,$cuerpo,$headers)){
                $result = '<div class="result_ok">Email enviado correctamente </div>';
                // si el envio fue exitoso reseteamos lo que el usuario escribio:
                $_POST['nombre'] = '';
                $_POST['email'] = '';
                $_POST['asunto'] = '';
                $_POST['mensaje'] = '';
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
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
                                    <a href="login.php">Si eres administrador podras iniciar sesion en la biblioteca virtual</a>
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
                                <h2>Contactanos</h2>
                                <span>Inicio / <a href="contact-us.php">Contactanos</a></span>
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
                                <h2>Buzon de quejas y sujerencias...</h2>
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
                                                <form action="" method="POST" class="send-message">
                                                    <div class="row">
                                                    <div class="name col-md-4">
                                                    <label>Nombre:</label>
                                                        <input type="text" name='nombre' id="name" placeholder="Nombre" required pattern="^[A-Za-z ÑñáéíóúÁÉÍÓÚ]*$" value='<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; } ?>'><?php if(isset($errors)){ echo $errors[1]; } ?>
                                                    </div>
                                                    <div class="email col-md-4">
                                                    <label>Email:</label>
                                                        <input type="text" name='email' id="email" placeholder="Email" required pattern="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"  value='<?php if(isset($_POST['email'])){ $_POST['email']; } ?>'><?php if(isset($errors)){ echo $errors[2]; } ?>
                                                    </div>
                                                    <div class="subject col-md-4">
                                                    <label>Titulo:</label>
                                                        <input type="text" name='asunto' id="subject" placeholder="Titulo" required pattern="^[A-Za-z ÑñáéíóúÁÉÍÓÚ]*$" value='<?php if(isset($_POST['asunto'])){ $_POST['asunto']; } ?>'><?php if(isset($errors)){ echo $errors[3]; } ?>
                                                    </div>
                                                    </div>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                        <label>Mensaje:</label>
                                                            <input type="text" name='mensaje' placeholder="Mensaje" required pattern="^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9!@#\$%\^&\*\?_~\/]{4,20}*$" height="300"> <?php if(isset($_POST['mensaje'])){ $_POST['mensaje']; } ?></input><?php if(isset($errors)){ echo $errors[4]; } ?>
                                                        </div>
                                                       <small class="obligatorio">... Campo obligatorio o datos incorrectos</small><br>
                                                       <small class="correcto">... Datos correcto...</small>

                                                    </div>                              
                                                    <div class="send">
                                                        <button type="submit" name='boton'>Enviar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info">
                                                <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit. </p>
                                                <ul>
                                                    <li><i class="fa fa-phone"></i>Telefono:741-114-50-98</li>
                                                    <li><i class="fa fa-globe"></i>Calle:, Colonia:,San Luis Acatlan</li>
                                                    <li><i class="fa fa-envelope"></i><a href="mailto:cbta178@hotmail.com">Envienos su mensaje</a></li>
                                                </ul>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Nuestra ubicacion</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="googleMap" style="height:420px;"></div>
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
                                <div class="shop-list">
                                    <h4 class="footer-title">Biblioteca Fisica</h4>
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

        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false">
        </script>
                
        <script>
		
		var map;
		
        function initialize()
        {
			var map_options = {
			  center: new google.maps.LatLng(16.807069,-98.734568),
			  zoom: 15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map = new google.maps.Map(document.getElementById("googleMap"), map_options);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, "resize", function() 
		{
		 	var center = map.getCenter();
		 	google.maps.event.trigger(map, "resize");
		 	map.setCenter(center); 
		});
        </script>

    </body>
</html>
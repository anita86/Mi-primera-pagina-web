<!doctype html>
<html>
    <head>
        <title>Elecciones 2015</title>
		<meta charset="utf-8"> 
        <meta name="description" content="Elecciones Argentina 2015">
		<link href="images/logo-sol.png" rel="shortcut icon">
        <link href="styles.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
		<!-- Place somewhere in the <head> of your document -->
		<link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">
	</head>
    <body>
        <div id="header">
            <div id="top">
					<img src="images/logo2.png" rel="logo" alt="logo">
					<h1 class="titulo">Tu Voto Vale!</h1>
					<h2>Herramientas y datos para votar con <span>conciencia</span></h2>
            </div><!-- cierra top -->
            <nav id="botonera">
                <ul>
                    <li><a href="contenido.html">Elecciones 2015</a></li>
					<li><a href="contenido.html">¿Cómo votar?</a></li>
					<li><a href="contenido.html">Cuestión Ciudadana</a></li>
					<li><a href="contenido.html" id="us">Nosotros</a></li>
                </ul>
            </nav><!-- cierra botonera -->
        </div><!-- cierra header -->
        
        <div id="wrapper">
			<div id="left">
			   		<ul>
						<li><a href="index.html" class="home" title="Index"></a></li>
						<li><a href="https://twitter.com/?lang=es" class="tw" title="Twitter" ></a></li>
						<li><a href="https://www.facebook.com/" class="fb" title="Facebook" ></a></li>
						<li><a href="https://www.gmail.com/intl/es/mail/help/about.html" class="g" title="Googleplus" ></a></li>
						<li><a href="https://ar.linkedin.com/nhome/" class="in" title="Linkedin" ></a></li>
						<li><a href="formulario.html" class="email" title="Escribinos"></a></li>
					</ul>			
					<div class="newsletter">
						<h3><a href="index.html">Suscribite al Newsletter</a></h3>
						<?php
							//suscribir.php
							//conseguir datos del form y guardarlos en bd "contacto"
							
								$email = $_POST['email'];
										
							//guardar la conexión en una variable
							$conexion = mysqli_connect(
							"mysql12.000webhost.com",
							"a3131200_usuario",
							"fide2015",
							"a3131200_news"
							);
			
							//Query -> MySQL
							$query = "
									INSERT INTO suscriptores 
									VALUES(
										NULL, 
										'$email'
										)
									"; 
				
							//Ejecuto la query y guardo el resultado en una variable
							$insertar = mysqli_query($conexion, $query);
							
							//Verificar
							if($insertar == true){
								
    						//conseguimos los datos
    						$email = $_POST['email'];
    						    						
    						// Para poder enviar HTML y caracteres especiales
    						$cabeceras = 'MIME-Version: 1.0' . "\r\n";
    						$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    							
    						// Cabeceras adicionales 2
    						$cabeceras .= 'From: Ana Bobadilla <analiasoledad1986@gmail.com>'."\r\n";
    						$cabeceras .= 'BCC: Ana <analiasoledad1986@gmail.com>' . "\r\n"; 
    
    						// Defino funcion mail:
    						$destino = "analiasoledad1986@gmail.com";
    						$asunto = "Mensaje desde www.voto2015.webatu.com";
    						$mensaje = "Suscripción de: $email";
    						$cabeceras = 'From: Analía Bobadilla <analiasoledad1986@gmail.com>'."\r\n";
    
    						//Envio mail
    						mail($destino, $asunto, $mensaje, $cabeceras);
    
    						//Mail para el que completo el formulario
    						mail($email, "Gracias por suscribirte!", "Recibimos tu suscripción, en breve te enviaremos nuestras novedades.", $cabeceras);
							echo  "<div style ='font: italic 14px Arial; color:#FF9C9C; border: 2px ridge yellow; margin: 10px 0px;'>Gracias por suscribirte!!</div>";
											
							}else{
								echo "Error, ver SQL. <br>";}
							?>
					</div><!-- cierra newsletter -->	
			</div><!-- cierra left -->
			
			<!-- Place somewhere in the <body> of your page -->
			<div class="flexslider">
			  <ul class="slides">
				<li data-thumb="images/scioli.jpg"><a href="candidato.html"><img src="images/scioli.jpg" title="candidato" /></a></li>
				
				<li data-thumb="images/altamira.jpg"><a href="candidato.html"><img src="images/altamira.jpg" /></a></li>
				
				<li data-thumb="images/massa.jpg"><a href="candidato.html"><img src="images/massa.jpg" /></a></li>
				
				<li data-thumb="images/carrio.jpg"><a href="candidato.html"><img src="images/carrio.jpg" /></a></li>
				
				<li data-thumb="images/stolbizer.jpg"><a href="candidato.html"><img src="images/stolbizer.jpg" /></a></li>
				
				<li data-thumb="images/macri.jpg"><a href="candidato.html"><img src="images/macri.jpg" /></a></li>
				
			  </ul>
            </div><!-- cierra flexslider -->           
        </div><!-- cierra wrapper -->
		
        		<div id="pie">
        				<div id="copy">
        					&copy; 2015 #tuVotoVale | <a href="#" class="designer" >ChanaDiseño</a>
        				</div><!-- cierra copy -->
        		</div><!-- cierra pie -->
		
            			<!-- Llamo a Jquery -->
            	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            	
            	<!-- Llamo al archivo JS de Flexslider. Debe estar despues de la llamada a Jquery ya que necesita que ese archivo se cargue antes -->
            	<script src="flexslider/jquery.flexslider-min.js"></script>
            	
            	<!-- Pegamos el codigo que me muestra el demo -->
            	<script>
            		// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
            	</script>
		
    </body>
</html>
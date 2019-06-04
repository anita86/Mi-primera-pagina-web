<!doctype html>
<html>
    <head>
        <title>Elecciones 2015</title>
		<meta charset="utf-8"> 
		<meta name="description" content="Elecciones Argentina 2015">
		<link href="images/logo-sol.png" rel="shortcut icon">
        <link href="styles2.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
        </script>
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
					<li><a href="contenido.html">Cómo votar?</a></li>
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
						<form action="suscribir.php" method="post">
						<input class="email" type="text" placeholder="Aquí su email"/>
						<input class="enviar" type="submit" value="Enviar"/>
						</form>
					</div><!-- cierra newsletter -->	
			</div><!-- cierra left -->
			
            <div id="content">
			
					<div id="form">  
																									
							<?php
							//enviar.php
							//conseguir datos del form y guardarlos en bd "contacto"
							
								$nombre = $_POST['nombre'];
								$email = $_POST['email'];
								$provincia = $_POST['provincia'];
								$comentario = $_POST['comentario'];
		
							//guardar la conexión en una variable
							$conexion = mysqli_connect(
							"mysql12.000webhost.com",
							"a3131200_user",
							"seba1309",
							"a3131200_contact"
							);
			
							//Query -> MySQL
							$query = "
									INSERT INTO mensajes 
									VALUES(
										NULL, 
										'$nombre',
										'$email',
										'$provincia',					
										'$comentario'					
										)
									"; 
				
							//Ejecuto la query y guardo el resultado en una variable
							$insertar = mysqli_query($conexion, $query);
							
							//Verificar
							if($insertar == true){
								
    						//conseguimos los datos
    						$nombre = $_POST['nombre'];
    						$email = $_POST['email'];
    						$provincia = $_POST['provincia'];
    						$comentario = $_POST['comentario'];
    						
    						// Para poder enviar HTML y caracteres especiales
    						$cabeceras = 'MIME-Version: 1.0' . "\r\n";
    						$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    							
    						// Cabeceras adicionales 2
    						$cabeceras .= 'From: Ana Bobadilla <analiasoledad1986@gmail.com>'."\r\n";
    						$cabeceras .= 'BCC: Ana <analiasoledad1986@gmail.com>' . "\r\n"; 
    
    						// Defino funcion mail:
    						$destino = "analiasoledad1986@gmail.com";
    						$asunto = "Mensaje desde www.voto2015.webatu.com";
    						$mensaje = "$nombre, de la provincia $provincia, dice: $comentario. Respondele a $email";
    						$cabeceras = 'From: Analía Bobadilla <analiasoledad1986@gmail.com>'."\r\n";
    
    						//Envio mail
    						mail($destino, $asunto, $mensaje, $cabeceras);
    
    						//Mail para el que completo el formulario
    						mail($email, "Recibimos tu mensaje!", "Recibimos tu email, te contestaremos a la brevedad.", $cabeceras);
    
    						echo "<div style ='font: italic 24px Arial; color: yellow; margin-top: 200px;'>
							Mensaje enviado, muchas gracias!! </div>";
							
							echo "<div style ='font: 16px Arial; color: #A2D5F9; margin: 20px;'>
							Te responderemos a la brevedad. Revisa tu SPAM! </div>";
							
							}else{
								echo "Error, ver SQL. <br>";}
							?>
						
						
					</div><!-- cierra formulario_contacto -->
            </div><!-- cierra content -->	
        </div><!-- cierra wrapper -->
		<div id="pie">
				<div id="copy">
					&copy; 2015 #tuVotoVale | <a href="#" class="designer" >ChanaDiseño</a>
				</div><!-- cierra copy -->
		</div><!-- cierra pie -->
    </body>
</html>
<?php
	// conexion.php
	
	$conexion = mysqli_connect(
			"mysql12.000webhost.com",
			"a3131200_usuario",
			"fide2015",
			"a3131200_news"
			);
			
	If(mysqli_connect_errno($conexion)){
     //Si no funcion�, mostramos el mensaje de error
    echo �No se pudo conectar porque: � .
       mysqli_connect_error();	
	   }
			
			
?>

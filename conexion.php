<?php
	// conexion.php
	
	$conexion = mysqli_connect(
			"mysql12.000webhost.com",
			"a3131200_user",
			"seba1309",
			"a3131200_contact"
			);
			
	If(mysqli_connect_errno($conexion)){
     //Si no funcionó, mostramos el mensaje de error
    echo “No se pudo conectar porque: “ .
       mysqli_connect_error();	
	   }
			
			
?>
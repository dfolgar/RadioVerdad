<?php 

require "vistasHimnario.php";


$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
	if ($transaccion =="verHimnosCargarDocumento"){
		verHimnosCargarDocumento(
//			$_POST["idInstitucion"],
			$_POST["idEntidad"]
			);
	}
	
	
	
}

ejecutarTransaccion($transaccion);
?>
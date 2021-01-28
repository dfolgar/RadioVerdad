<?php 
require_once "conexionRadioVerdad.php";

function verHimnosCargarDocumento($idEntidad){
	$mysql=conexionMYSQL();

	$select = "SELECT * FROM himno WHERE id_entidad='$idEntidad'";

	if($resultado = $mysql->query($select)){

		if(mysqli_num_rows($resultado)==0){
			/*$tabla="<div class='containerHimno'>";
				
					$tabla.="<div class='circleContainer'></div>";
			
				
				$tabla.="<div class='contenidoHimnoError'>";
			 		$tabla.= "<div id='error' class='errorHimno' data-Error>No se encontraron himnos.<b></b></div>";
				$tabla.="</div>";
				$tabla.="<div class='mensaje'>";
			 		$tabla.= "<div id='textoBiblico' class=''>Porque la palabra de Dios es viva y eficaz, y más cortante que toda espada de dos filos.</div>";
			 		$tabla.= "<div id='textoBiblico' class=''>Hebreos 4:12.</div>";
			 			$tabla.= "<div id='' class='circleMensaje'></div>";
				$tabla.="</div>";
			$tabla.="</div>";
*/
			
		}
		else
		{
			
				
					/*
				
				$tabla="<div class='containerRespuestaHimno'>";
						
						while($fila = $resultado->fetch_assoc())
						{
							$tabla.="<div class='containerHimno'>";
								
								$tabla.="<div class='cabezaHimno'>";
									$tabla.="<h2 class='id_himno'>".$fila['id_himno']."</h2>";
									$tabla.="<h3 class='nombre_himno'>".$fila['nombre_himno']."</h3>";
								$tabla.="</div>";
								$tabla.="<div class='cuerpoHimno'>";
									$tabla.="<div class='nombreIngles_himno'>".$fila['nombreIngles_himno']."</div>";
									$tabla.="<div class='notaMusical_himno'>".$fila['notaMusical_himno']."</div>";
									$tabla.="<div class='tiempo_himno'>".$fila['tiempo_himno']."</div>";
								$tabla.="</div>";
							$tabla.="</div>";
						
						}
				$tabla.="</div>";	
						*/
		
			
		}
	}
	$respuesta=$tabla;		
	$mysql->close();
	return printf($respuesta);
	$resultado->free();

}
?>

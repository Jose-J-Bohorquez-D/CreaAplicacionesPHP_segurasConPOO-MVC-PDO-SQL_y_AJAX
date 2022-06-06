<?php 

class EnlacesPaginas{
	public static function enalcesPaginasModelo($enlacesModelo){

		if ($enlacesModelo == "pagos" 		||
			$enlacesModelo == "nosotros" 		||
			$enlacesModelo == "contacto" 		||
			$enlacesModelo == "servicios" 		) {

			$modulo = "Vistas/Paginas/".$enlacesModelo.".php";
			
		}

		elseif ($enlacesModelo == "inicio") {

			$modulo = "Vistas/Paginas/inicio.php";
			
		}

		return $modulo;
	}
}




 ?>
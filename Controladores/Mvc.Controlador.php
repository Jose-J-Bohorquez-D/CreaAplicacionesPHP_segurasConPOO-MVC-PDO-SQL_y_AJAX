<?php 

class MvcControlador{


	#Llamada a la plantilla
	#--------------------------------------------------
	public function llamadoPlantilla(){

		require_once("Vistas/Plantilla.php");
		
	}

	#Llamada a la plantilla
	#--------------------------------------------------
	public function enalcesPaginasControlador(){

		if (isset($_GET["action"])) {

			$enlacesControlador = $_GET["action"];

			#echo $enlacesControlador;

			$respuesta=EnlacesPaginas::enalcesPaginasModelo($enlacesControlador);

		}

		else{

			$enlacesControlador = "inicio";

			#echo $enlacesControlador;

			$respuesta=EnlacesPaginas::enalcesPaginasModelo($enlacesControlador);

		}
		
		include $respuesta;
	}


}

 ?>
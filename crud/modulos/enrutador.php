<?php
   /*Enrutador
    * Gabriel Rodriguez
    * 2022
	hasta ahora sin atributos
    */

    class Enrutador{
		
		
		//metodos
		
		public function cargarVista($vista){
			switch($vista):
			 
               case "crear":
			       include_once("vistas/" . $vista .".php");
			       break;
				case "ver":
					include_once("vistas/" . $vista .".php");
					break;
				case "editar":
					include_once("vistas/" . $vista .".php");
					break;
				case "eliminar":
						include_once("vistas/" . $vista .".php");
						break;



			   default:
			       include_once("vistas/error.php");

		    endswitch;	
			
			}
		public function validarGET($variable){
			
            if (empty($variable)){
			    include_once("./vistas/inicio.php");
			}
			else
			{
				return true;
			}
			
			
		}
		
	}
	
	


?>
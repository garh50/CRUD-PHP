<?php
    /*Controlador
    * Gabriel Rodriguez
    * 2022
    */
	
	include_once('./clases/usuario.php');
	
	
    class controladorUsuario {
		
	     //atributos
		 public $usuario;
		 
		//metodos
	    public function __construct(){
	         $this->usuario = new usuario();
	    }
		 
		public function index(){
				
		    $result = $this->usuario->listar();
			
		    return $result;
		
		}
		
        public function buscar($buscar){
				
		    $result = $this->usuario->listarb($buscar);
			
		    return $result;
		
		}






		//public function crear($rowid,$id,$firstname,$lastname,$createdate,$birthdate,$email,$web,$countryid,$cityid,$stateid,$address,$positionid,$phone,$legalid){

		public function crear($id,$firstname,$lastname,$email,$image){

           $this->usuario->set('id'        , $id         );
		   $this->usuario->set('firstname' , $firstname  );
           $this->usuario->set('lastname'  , $lastname   );
           //$this->usuario->set('createdate', $createdate );
           //$this->usuario->set('birthdate' , $birthdate  );
           $this->usuario->set('email'     , $email      );
           //$this->usuario->set('web'       , $web        );
           //$this->usuario->set('countryid' , $countryid  );
           //$this->usuario->set('cityid'    , $cityid     );
           //$this->usuario->set('stateid'   , $stateid    );
           //$this->usuario->set('address'   , $address    );
           //$this->usuario->set('positionid', $positionid );
           //$this->usuario->set('phone'     , $phone      );
		   //$this->usuario->set('legalid'   , $legalid    );
		   $this->usuario->set("image",$image);
			
			
		   $result = $this->usuario->crear();
		   return $result;
		
		}
		
		public function eliminar($id){
	       
		    $this->usuario->set("rowid",$id);
       	    $this->usuario->eliminar();
		   
	    }  
	   
		public function ver($id){
	       $this->usuario->set("rowid",$id);
       	   $datos=$this->usuario->ver();
		   return $datos;
	    }  
	   
	   
	   public function editar($id,$firstname,$lastname,$image){
		     $this->usuario->set("id",$id);
			 $this->usuario->set("firstname",$firstname);
			 $this->usuario->set("lastname",$lastname);
			 $this->usuario->set("image",$image);
			 
		    // $this->usuario->ver();
       	     $this->usuario->editar();
		  
	    }  
	   
		
		
	}

?>
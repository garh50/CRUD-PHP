<?php
    /* Clase de Conexion con Db
    *  Gabriel Rodriguez
    *  2023
    */
    
    
    
    Class Conexion {
    
        //Atributos
        ///Privados No saldran de este archivo
    
    	private $host;
    	private $user;
    	private $pass;
    	private $bd;
		public $con;
		
        //Metodos
    	//funciones dentro de clases pueden ser publicas o privadas
    	///contructor cabecera de clase siempre se va a ejecutar
        public function __construct () {
    	
			$this->host ="localhost";
			$this->user ="root";
			$this->pass = "";
			$this->bd = "curso";

    	
    	    $this->con=mysqli_connect($this->host,$this->user, $this->pass,$this->bd);
    	
		    // Check connection
			if ($this->con->connect_errno) {
				echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
				exit();
			}
			
             
    	}
    
        public function consultaSimple($sql){
    		mysqli_query($this->con,$sql);
        }
    	
    	public function consultaRetorno($sql){
    		
			$consulta = mysqli_query($this->con,$sql);
            return $consulta;
        }
    		
    
    }



?>
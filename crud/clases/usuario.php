<?php
	/* Clase de usuarios
	*  Gabriel Rodriguez
	*  2022
	   conexion incluida
	   los set arman a quien se aplica  
	
	*/
    

	include_once("conexion.php");


	/* tabla user

	rowid	    int	11	0	0	0	0	0	0		0					-1	0
	id	        int	11	0	0	0	0	0	0		0					0	0
	firstname	varchar	255	0	-1	0	0	0	0		0		latin1	latin1_swedish_ci		0	0
	lastname	varchar	255	0	-1	0	0	0	0		0		latin1	latin1_swedish_ci		0	0
	createdate	datetime	0	0	-1	0	0	0	0		0					0	0
	birthdate	date	0	0	-1	0	0	0	0		0					0	0
	email	    varchar	255	0	-1	0	0	0	0		0		latin1	latin1_swedish_ci		0	0
	web	        varchar	255	0	-1	0	0	0	0		0		latin1	latin1_swedish_ci		0	0
	countryid	int	11	0	-1	0	0	0	0		0					0	0
	cityid	    int	11	0	-1	0	0	0	0		0					0	0
	stateid	    int	11	0	-1	0	0	0	0		0					0	0
	address	    varchar	255	0	-1	0	0	0	0		0		latin1	latin1_swedish_ci		0	0
	positionid	int	11	0	-1	0	0	0	0		0					0	0
	phone	    varchar	255	0	-1	0	0	0	0		0		latin1	latin1_swedish_ci		0	0
	legalid	varchar	255	0	-1	0	0	0	0		0		latin1	latin1_swedish_ci		0	0
    image	varchar	255	0	-1	0	0	0	0		0		latin1	latin1_swedish_ci		0	0


	*/


    class Usuario{

        //atributos
       private  $rowid          ;
       private  $id             ;
       private  $firstname      ;
	   private  $lastname       ;
	   private  $createdate     ;
	   private  $birthdate      ;
	   private  $email          ;
	   private  $web            ;
	   private  $countryid      ;
	   private  $cityid         ;
	   private  $stateid        ;
	   private  $address        ;
	   private  $positionid     ;
	   private  $phone          ;
	   private  $legalid        ;
	   private  $image          ;
	  
		
		
	   private  $con;
	
	    
	    //metodo (setters y getters)
	    public function __construct (){
	          $this->con = new Conexion();
			  
	    }
	
	    public function set($atributo,$contenido){
			 
			 $this->$atributo = $contenido;
		
		}
	
	
	    //ejemplo de eliminacion
	    // set("id",5);
        // eliminar();		
	
	
	    public function get($atributo){
		
		    return $this->$atributo;
		
		}
	
	
	     public function listar(){
		
		    $sql="SELECT * FROM usuario";
          			
			$result = $this->con->consultaRetorno($sql);
			
			return $result;
		
		}

        public function listarb($buscar){
		
		    $sql="SELECT * FROM usuario where lastname like ('%".$buscar."%')";
          	
			$sql.=" OR firstname like ('%".$buscar."%')";
          
            $sql.=" OR email like ('%".$buscar."%')";

			if (is_numeric($buscar)) {

			    $sql.=" OR id =" .$buscar;

			}

			$result = $this->con->consultaRetorno($sql);
			
			return $result;
		
		}

	
	   public function crear(){
	   
	      
	       $sql2= "select * from usuario where id = '{$this->id}'";
	       
	       $result = $this->con->consultaRetorno($sql2);
	       $num=0;
	       @$num=mysqli_num_rows($result);
	       
	       if ($num!=0){
		        return false;
	       }
	       else{
	           /*INSERT INTO 'curso'.'user' ('rowid', 'id', 'firstname', 'lastname', 'createdate', 'birthdate', 'email', 
	           'web', 'countryid', 'cityid', 'stateid', 'address', 'positionid', 'phone', 'legalid') 
	           VALUES (''{', 'Gabriel', 'Rodriguez', '2022-10-10 17:30:33', '2022-10-10', 'gabrielrod@gmail.com', 'gabriel',
	           '1', '1', '1', 'Calle Paez', '1', '041-2222', 'J-9828434')*/
	       
		        
	           /*$sql="INSERT INTO 'curso'.'user' ('rowid', 'id', 'firstname', 'lastname', 'createdate', 'birthdate', 'email', 
	           'web', 'countryid', 'cityid', 'stateid', 'address', 'positionid', 'phone', 'legalid') 
	           VALUES (";
               $sql.="{'$this->$firstname'},{'$this->$lastname'},NOW(),{'$this->$birthdate'},{'$this->$email}',";
               $sql.="{'$this->$web'},{'$this->$countryid'},{'$this->$cityid'},{'$this->$stateid'},{'$this->$address'}, {'$this->$positionid'},";
               $sql.="{'$this->$phone'},{'$this->$legalid'})";*/
			   
			   if (empty($this->image)){
				$this->image=$this->id.'.jpg';
			  }
	


			   $sql="INSERT INTO curso.usuario (id, firstname, lastname, email,image)";
	           $sql.="VALUES ('{$this->id}','{$this->firstname}','{$this->lastname}','{$this->email}','{$this->image}')";
              
	           $this->con->consultaSimple($sql);
			   return true;
	       	   
	       }	   
		   
	    }   
           		   
	    public function eliminar(){
	   
	       $sql= "DELETE from usuario where id = '{$this->id}'";
	       $this->con->consultaSimple($sql);
		   
	       	   
		   
	    }  
	   
	    public function ver(){
	   
	       $sql= "select * from usuario where rowid = '{$this->rowid}' LIMIT 1";
	       
	       $result = $this->con->consultaRetorno($sql);
	       
	       $row=mysqli_fetch_assoc($result);
	       
		   //set
		   $this->rowid      =$row['rowid'];
           $this->id         =$row['id'];
           $this->firstname  =$row['firstname'];
           $this->lastname   =$row['lastname'];
           $this->createdate =$row['createdate'];
           $this->birthdate  =$row['birthdate'];
           $this->email      =$row['email'];
           $this->web        =$row['web'];
           $this->countryid  =$row['countryid'];
           $this->cityid     =$row['cityid'];
           $this->stateid    =$row['stateid'];
           $this->address    =$row['address'];
           $this->positionid =$row['positionid'];
           $this->phone      =$row['phone'];
		   $this->legalid    =$row['legalid'];
		   $this->image    =$row['image'];
		   
		   return $row;
	        
		 }
		 
		 
		public function editar(){
	   
	      /*$sql.="UPDATE 'curso'.'user' SET 'id'={'$this->$id'},"; 
		  $sql.="'firstname' =  {'$this->$firstname'}," ;
		  $sql.="'lastname '  = {'$this->$lastname'}, ";
		  $sql.="'birthdate' =  {'$this->$birthdate'}," ;
		  $sql.="'email'     =  {'$this->$email'}," ;
		  $sql.="'web'       =  {'$this->$web'},";
		  $sql.="'countryid' =  {'$this->$countryid'}," ;
		  $sql.="'cityid'    =  {'$this->$cityid'},";
		  $sql.="''stateid'  =  {'$this->$stateid'}'" ;
		  $sql.="'address'   =  {'$this->$address'}',";
		  $sql.="'positionid'=  {'$this->$positionid'}," ;
		  $sql.="'phone'=  {'$this->$phone'}," ;
		  $sql.="'legalid'=  {'$this->$legaiil'},";
		  $sql.=" WHERE ('rowid'='$this->$rowid'),";*/

          if (empty($this->image)){
			$this->image=$this->id.'.jpg';
		  }


          $sql="UPDATE curso.usuario SET "; 
		  $sql.="firstname ='".$this->firstname."',";
		  $sql.="lastname   = '".$this->lastname."',";
		  $sql.="image   = '".$this->image."'";
		  $sql.=" WHERE id='".$this->id."'";

	      $result = $this->con->consultaSimple($sql);
          
          
		}

      


		  
	         
		 
		 
	   
	   
    }   
?>	   
	
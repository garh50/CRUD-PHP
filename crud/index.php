<?php

   include_once("modulos/enrutador.php");
   include_once("modulos/controlador.php");
   
?>   
   
   

<?php include ("header.php"); ?>







<?php 
    If (isset($_GET['cargar'])){
        $variable=$_GET['cargar'];
    }
    else{
        $variable="";
    }

   

?>

<body>
  
  
   <section>
    <?php
	   $enrutador =  new Enrutador();

   

   // if ($enrutador->validarGET($_GET['cargar'])){
    if ($enrutador->validarGET($variable)){
        
		  $enrutador->cargarVista($_GET['cargar']);
	   }
	   
	
	?>
   
   </section>
   
   
    </div>

    <?php include("footer.php"); ?>








  </body>
</html>






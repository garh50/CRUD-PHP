<?php include ("header.php"); ?>
<?php include ("menu.php"); ?>

<!--breadcrumb-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid header">
         <span class="ruta">Readme.md</span>
	 </div> 
</nav>


<body>
  
  
   <section>

   <div class="container text-center">

  
         <div class="row">



           <div class="col-12 title">
              <h2><b>Readme file</b></h2>
           </div>

        

           <div class="col-12 title">
             





    <?php
	  
      $file = "Readme.md";
      $fp = fopen($file, "r");
      $contents = fread($fp, filesize($file));
      
      
      
      
      
      echo 
      '<textarea id="story" name="story"
      rows="15" cols="45">'.
      $contents,'
      </textarea>';



	
	?>
   

   </div>
   </div>


   </section>
   
   
    </div>

    <?php include("footer.php"); ?>








  </body>
</html>






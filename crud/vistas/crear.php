<?php

//echo '<h1><b>Registro de nuevo usuario</b></h1>';


$controlador= new controladorUsuario();

if ((isset($_POST['enviar']))){
	   $r = $controlador->crear($_POST['idu'],$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['image']);
	
	   if ($r){
	    //	echo "se ha registrado un nuevo Usuario";


      $target_dir = "imgs/"; //directorio en el que se subira
      //$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);//se añade el directorio y el nombre del archivo
      $target_file = $target_dir .$_POST['idu'].".jpg";//se añade el directorio y el nombre del archivo
      
      $res=move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file); 
    
  
       $uploadOk = 1;//se añade un valor determinado en 1
           //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
           //$name_File= basename($_FILES["fileToUpload"]["name"]);//Tomamos el nombre del archivo.
           //$encriptar2=md5(basename($_FILES["fileToUpload"]["name"])).".".$imageFileType;/*En este caso lo encripté con md5, si quisiseras ponerle un nombre a tu elección puedes simplemente cambiar la variable y poner $encriptar="nombre a tú elección"*/
           //$resultado=$encriptar .".".$imageFileType;/*concatenamos el nuevo nombre con la extensión del archivo que está tomado mediante $imageFileType*/
         //if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
       //rename("../image/$name_File","../image/$encriptar2");//cambiamos el nombre del archivo mediante rename()
       //rename("../image/$name_File","../image/$encriptar2");//cambiamos el nombre del archivo mediante rename()
         
       //echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " Se subio correctamente";
       //} else {
       //	echo "Error al cargar el archivo";
       //}





      header("location:index.php?search=".$_POST['idu']."&success=Usuario creado"); 
	   }else{
		  


      //$row = $controlador->ver($_POST['idu']);
      header("location:index.php?search=".$_POST['idu']."&error=la identificacion ya existe"); 
      

	}
	
	
}


?>
<?php include ("menu.php"); ?>

<!--breadcrumb-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid header">
         <span class="ruta">editar</span>
	 </div> 
</nav>

<div class="container text-center">

  
  <div class="row">

  

  <div class="col-12 title">
    <h2><b>Insertar datos del usuario</b></h2>
  </div>
  </div>


 <div>
 <form action="" method="POST" enctype="multipart/form-data">



<div class="card mb-3" style="margin:0 auto;">
  <div class="row g-0">
    <div class="col-md-4">
      <div style="border:thin solid #d0c8c8;padding:10px;margin-top: 10px;margin-left: 10px;">
        <img src="imgs/noimage.png" class="img-fluid rounded-start" alt="...">
      </div>
      <input type="text" class="form-control" name="image" id="image" value="" placeholder="imagen">
                    



    </div>
    <div class="col-md-8">
      <div class="card-body">
      <div  style="background-color: #1b2c5d;margin: 0 auto;height: 34px;text-align: middle;">    
          <h5 class="card-title" style="color:grey;font-size:25px;">Nuevo Usuario</h5>
      </div>   


        <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
-->
        <!--formulario de usuario-->
        <div style="margin-top:5px;">
           

              <div class="mb-3 row">
                  <label for="id" class="col-sm-2 col-form-label">Dni:</label>
              <div class="col-sm-10">
                  <input type="text"  name="idu" class="form-control" id="idu" value="" placeholder="Su id aqui">
                </div>
              </div>

              <div class="mb-3 row">
                  <label for="firstname" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                  <input type="text"  name="firstname" class="form-control" id="firstname" value="" placeholder="Su Nombre aqui">
                </div>
              </div>
              
                <div class="mb-3 row">
                    <label for="lastname" class="col-sm-2 col-form-label">Apellido:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname" id="lastname" value="" placeholder="Su apellido aqui">
                  </div>
                </div>

  <input type="hidden"  name="id" class="form-control" id="id" value="" placeholder="Su id aqui">
 
  <div class="mb-3 row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="staticEmail" name="email" value="" placeholder="Su email aqui">
    </div>
  </div>


  <div class="mb-3 row">
      <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
  <div class="col-sm-10">

  <input type="text" class="form-control" id="image" name="image" value="" placeholder="Su imagen aqui">
  
  <input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
  </div>
  </div>



  <!--<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>-->

  <div class="col-12">
  <button type="submit" class="btn btn-primary" name="enviar" value="enviar" >Enviar</button>

  </div>



  </form>
  
  </div>
        
        
         <!--formulario de usuario-->
        
        
        
<?php




$controlador= new controladorUsuario();

if (isset($_GET['id'])){
    $row = $controlador->ver($_GET['id']);
}else{
		header("location:index.php");
}

if ((isset($_POST['enviar']))){
  $controlador->eliminar($_POST['idu']);
  header("location:index.php?&success=Usuario eliminado"); 
	 
}






?>

<?php include ("menu.php"); ?>
<!--breadcrumb-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid header">
         <span class="ruta">eliminar</span>
	 </div> 
</nav>


<div class="container text-center">

  
  <div class="row">

  

  <div class="col-12 title">
    <h2><b>Eliminar Datos Usuario</b></h2>
  </div>
  </div>

 <div>
<form action="" method="POST">



<div class="card mb-3" style="margin:0 auto;">
  <div class="row g-0">
    <div class="col-md-4">
      <div style="border:thin solid #d0c8c8;padding:10px;margin-top: 10px;margin-left: 10px;">
        <img src="imgs/noimage.png" class="img-fluid rounded-start" alt="...">
      </div>
      <!--<input type="text" class="form-control" name="image" id="image" value="<?php echo $row['image']; ?>" placeholder="imagen">-->
     
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <div  style="background-color: #1b2c5d;margin: 0 auto;height: 34px;text-align: middle;">    
          <h5 class="card-title" style="color:grey;font-size:25px;"><?php echo $row['firstname'].", ".$row['lastname']; ?></h5>
      </div>   


        <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
-->
        <!--formulario de usuario-->
        <div style="margin-top:5px;">
            <form action="" method="POST">

              <div class="mb-3 row">
                  <label for="id" class="col-sm-2 col-form-label">Dni:</label>
              <div class="col-sm-10">
                  <input type="text"  name="idu" class="form-control" id="idu" value="<?php echo $row['id']; ?>" placeholder="Su id aqui" disabled>
                </div>
              </div>

              <div class="mb-3 row">
                  <label for="firstname" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                  <input type="text"  name="firstname" class="form-control" id="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Su Nombre aqui" disabled>
                </div>
              </div>
              
                <div class="mb-3 row">
                    <label for="lastname" class="col-sm-2 col-form-label">Apellido:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Su apellido aqui" disabled>
                  </div>
                </div>

  <input type="hidden"  name="id" class="form-control" id="id" value="" placeholder="Su id aqui">
 
  <div class="mb-3 row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="staticEmail" name="email" value="<?php echo $row['email']; ?>" placeholder="Su email aqui" disabled>
    </div>
  </div>


  <div class="mb-3 row">
      <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
  <div class="col-sm-10">

  <input type="text" class="form-control" id="image" name="image" value="<?php echo $row['image']; ?>" placeholder="Su imagen aqui" disabled>
  
 <!-- <input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">-->
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
      
      
      
      
      
      
      
      </div>
    </div>
  </div>
</div>





</form>

</div>
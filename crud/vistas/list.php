<?php

/* Gabriel Rodriguez *

*/

echo '<h2><b>Pagina de Inicio</b></h2>';


include ('header.php');



$controlador = new controladorUsuario();
$resultado = $controlador->index();

?>

  <div class="row">
      <div class="col-12"</div>


         <div class="table-responsive-sm">
             <table class="table usuarios-tabla" >

				<thead>
					<th>rowid        </th>
					<th>id           </th>
					<th>firstname    </th>
					<th>lastname     </th>
					<!--<th>createdate   </th>
					<th>birthdate    </th>-->
					<th>email        </th>
					<th>web          </th>
					<!--<th>countryid    </th>
					<th>cityid       </th>
					<th>stateid      </th>-->
					<th>address      </th>
					<!--<th>positionid   </th>-->
					<th>phone        </th>
					<!--<th>legalid      </th>-->
					<th colspan="3">Acciones       </th>
				</thead>
				<tbody>
                <?php while($row = mysqli_fetch_array($resultado)):?>
    
                   <tr>
						  <?php echo '<td>'.$row['rowid'].'</td>';
						   echo '<td>'.$row['id'].'</td>';
						   echo '<td>'.$row['firstname'].'</td>';
						   echo '<td>'.$row['lastname'].'</td>';
						   //echo '<td>'.$row['createdate'].'</td>';
						   //echo '<td>'.$row['birthdate'].'</td>';
						   echo '<td>'.$row['email'].'</td>';
						   echo '<td>'.$row['web'].'</td>';
						   //echo '<td>'.$row['countryid'].'</td>';
						   //echo '<td>'.$row['cityid'].'</td>';
						  // echo '<td>'.$row['stateid'].'</td>';
						   echo '<td>'.$row['address'].'</td>';
						   //echo '<td>'.$row['positionid'].'</td>';
						   echo '<td>'.$row['phone'].'</td>';
						   
						   echo '<td><a href="/crud/index.php?cargar=ver&id='.$row['rowid'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                             </svg></a></td>';
						   echo '<td><a href="/crud/index.php?cargar=editar&id='.$row['rowid'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                 <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                 </svg></a></td>';
						   echo '<td><a href="/crud/index.php?cargar=eliminar&id='.$row['rowid'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                                </svg></a></td>';
						   
						   
						   //echo '<td>'.$row['legalid'].'</td>';
					
							endwhile; ?>    				
  
                  </tr>  
                </tbody>                                              
           </table>
        </div>

    </div>




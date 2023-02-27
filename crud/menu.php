<?php
echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid header">
  <!--<a class="navbar-brand" href="#">Navbar</a>-->

  <div class=" navbar-brand wpda-builder-logo_container ">
     <a href="#">
         <!--<img class="wpda-builder-logo" src="http://desweb.tech/wp-content/uploads/2022/02/DESWEB-horizontal.webp" alt="" title="DESWEB-horizontal"></a>-->
         <img class="wpda-builder-logo" src="imgs/DESWEB.webp" alt="" title="DESWEB-horizontal"></a>
  
  
  </div>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">
        <svg  style="margin-bottom: 10px;margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
      </svg>Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="readme.php">Readme</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Main Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown link
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      
      
     

    </ul>
  </div>

<div class="uppersearch">
  <form class="d-flex" role="search" action="index.php"  method="GET">
  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="search">
  <button class="btn btn-outline-success" type="submit">
  <svg width="32" height="32" class="DocSearch-Search-Icon" viewBox="0 0 20 20"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg>
 </button>
  </form>
</div>

<div class="menuicons">
    <ul class="navbar-nav">
     <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
       <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
       <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
        </svg></a>
     </li>
     <li><a href="index.php?cargar=crear"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
     <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
     <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
     </svg></a>
     </li>
    </ul> 
</div>

</div>
</nav>';

?>

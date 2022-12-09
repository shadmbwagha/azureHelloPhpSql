<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="img/svg" href="./assets/mbulalgsvg.svg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
	<title>Mbungula | welcome</title>
</head>




<body>
	<header >
    <!-- mbungula logo -->
  

  <!-- Mbungula title -->
  <h1 class="text-start text-md-center" style="padding-left: 10px; padding-top: 10px;">
      <div class="d-flex"><img  src="./assets/mbulalgsvg.svg" height="26.13px" width="34.96px" class="img img-fluid me-2"/><div class="fw-bold pt-1" style="color: #136DD9; font-size: 25px;">MBUNGULA</div></div>
  </h1>

  <!-- Search bar -->
  <div class="text-center search mt-4">
    <form action="itemSearch.php" method="POST">
      <input placeholder="search here...." name="search" type="search" required >
      <button class="btn btn-outline-primary fa fa-search " style="color: white; font-size: 20px;" type="submit" type="submit" name="submit"></button>
    </form>
  </div>
  <nav class="navbar navbar-expand-lg text-white">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-1 mb-lg-0 main-nav">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="hardware.php">Hardware</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">Agrovet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Real Estate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Transportation</a>
        </li>
        <li class="nav-item dropdown  d-md-none">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
           Clients
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formInStock.php">Good In Stock</a></li>
            <li><a class="dropdown-item" href="subscribe.html">Subscribe to newsletter</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Login</a></li>
          </ul>
        </li>
       
      </ul>

      <div class="d-flex d-none d-md-block" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
           Clients
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formInStock.php">Good in Stock</a></li>
            <li><a class="dropdown-item" href="subscribe.html">Subscribe to news letter</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Client Login</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">help</a>
          </li>
      </ul>
      </div>
    </div>
  </div>
</nav>

</header>
<style>
  body{
    background-color: white;
  
  }
  .logo-img{
    height: 33.55px;
    width: 44.88px;  
  }



  .text-black{
    color: black;
  }


  .welcome{
    margin-top: 10px;
    padding: 10px;
    padding-top: 0px;
    padding-bottom:0 ;
  }

  header{
    background-color:black;
    width: 100%;
  }
 

  @media (max-width: 600px){

    /*Header*/

    .logo-img{
      height: 26.13px;
      width: 34.96px; 
    }

  
  
    .fa-bars{
      color: white;
      font-size: 20px;
      position: absolute;
      top: -90px;
      right: 0px;
      width: 35px;
      cursor: pointer;
    }



}

</style>
<?php 
 
?>

 
 


 
 

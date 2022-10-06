<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/hardwarestyle.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	<title>Mbungula hardware| welcome</title>
</head>





<body>
	<header style="background-color: black;">
    <!-- mbungula logo -->
  <img  src="./assets/mbulalgsvg.svg" height="53.3px"; width="73.3px" class="img img-fluid logo-img"/>

  <!-- Mbungula title -->
  <h1 class="navbar-brand h1 title">
      <div class="fw-bold title text-center mbungula-text" style="color: #136DD9;">MBUNGULA <span style="color: #E8491D;">HARDWARE</span></div>
  </h1>

<!-- SEARCH BAR -->
 <div class="text-center search">
    <form action="itemSearch.php" method="POST">
      <input placeholder="search here...." name="search" type="search" required autocomplete="off" id="search-tab">
      <button class="btn btn-outline-primary fa fa-search " style="color: white; font-size: 20px;" type="submit" type="submit" name="submit"></button>
    </form>
  </div>
  <div id="searchresults"></div>


  <!-- Hardware main Nav bar  -->
  <nav class="navbar navbar-expand-lg text-white">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-1 mb-lg-0 main-nav">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">Vifaa Vya Ujenzi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">Spea za vifaa vya moto </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Mashine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Spea za mashine</a>
        </li>
        <li class="nav-item dropdown  d-md-none">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
           Clients
          </a>
          <ul class="dropdown-menu bg-primary text-white text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="#">Good In Stock</a></li>
            <li><a class="dropdown-item text-white" href="#">Subscribe to newsletter</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-white" href="#">Login</a></li>
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
            <li><a class="dropdown-item" href="#">Good in Stock</a></li>
            <li><a class="dropdown-item" href="#">Subscribe to news letter</a></li>
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
<!-- Nav bar Ends -->
</header>
<?php include('connect_db.php'); ?>

<script type="text/javascript">
  $(document).ready(function (){
    $("#search-tab").keyup(function (){

      let input = $(this).val();
      if(input != ""){
        $.ajax(
        {
          url:"response.php",
          method:"post",
          data:{input:input},

          success: function(response){
            $("#searchresults").html(response);
            $("#searchresults").css("display","block");

          }


        }

          )}

        else{
          $("#searchresults").css("display","none");
        }
    });


  });
</script>

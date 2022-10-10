<?php 
  include('header.php');
?>

<div class="body">

    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 my-3">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="buttondriveer" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="assets/excavator.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption text-white text-start">
                <h5 style="color: #E8491D;" class="fw-bold ">Construction <span class="fw-thin text-white">and</span> Reconstruction</h5>
                <p>Every tool for construction of House, Bridges, Roads and Facility</p>
              </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
              <img src="assets/consmap.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption text-white">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="assets/bolt.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption text-white text-start">
                <h5 class="fw-bold">Quality Bolts,nuts, nails</h5>
                <p>Bolt for motors, machines and cars</p>
              </div>
            </div>
        </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-md-6 p-4 ">
      <h3 class="my-4">Welcome to our store,<br>We have awesome products for you needs.</h3>
      <p>you may visit our store or order online we make fast and efficient service to our clients in affordable price and detailed important information about our products</p>
    </div>
    </div>
    <script type="text/javascript">
      var myCarousel = document.querySelector('#myCarousel')
      var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 2000,
      wrap: false
    })
    </script>

    <style type="text/css">

      body{
        background-color: white;
      }
      #carouselExampleDark{
        width: 100%;
      }

      #carouselExampleDark img{
        background-size: cover;
      }

      .line{
        height: 5px;
        width: 50px;
        background-color: #E8491D;
      }


      /*product view*/
      .product-view{
        display: grid;
        grid-template-rows: auto auto;
        grid-template-areas: "image" "text";
      }

      .product-image{
        grid-area: image;
      }

      .product-text{
        grid-area: text;
      }


      @media (max-width: 768px){

      /*product view*/
      .product-view{
        display: grid;
        grid-template-rows: ;
        grid-template-columns: 1fr 3fr;
        grid-template-areas: "image text";
      }

    }

    </style>

    <!-- coursel and intro word END -->


<!-- category on page -->
  <section id="pricing" class="bg-light mt-5 py-4">
    <div class="container-lg">
      <div class="text-center">
        <h2>Our Services</h2>
        <p class="lead text-muted">Services and products we sell and provide</p>
      </div>
    </div>
    <div class="row my-5 align-items-center justify-content-center g-5">
      <!-- col width in different size -->
      <div class="col-8 col-lg-4 col-xl-3">
        <div class="card border-0">
          <div class="card-body text-center py-4">
             <h4 class="card-title">Pembejeo za kilimo</h4>
             <p class="lead card-subtitle"></p>
             <p class="display-4 my-4 text-primary fw-bold">Agrovet</p>
             <p class="card-text mx-5 text-muted d-none d-lg-block">Dawa, mbolea, mifuko, mipira ya kumwagilizia</p>
             <a class="btn btn-outline-primary btn-lg mt-3">See More...</a>
          </div>
        </div>
      </div>

      <div class="col-9 col-lg-4">
        <div class="card border-primary border-2 ">
          <div class="card-header text-center text-primary">Mostly popular</div>
          <div class="card-body text-center py-4">
             <p class="lead card-subtitle">Vifaa vya ujenzi, mashine, spea za pikiki na mashine</p>
             <p class="display-3  my-4 text-primary fw-bold">Hardware Store</p>
             <p class="card-text mx-5 text-muted d-none d-lg-block">Vifaa Vya Ujenzi, Spea za pikiki na magari, Bettery, Mashine, Spea za mashine, Vifaa vya maji</p>
             <a class="btn btn-outline-primary btn-lg mt-3">see more..</a>
          </div>
        </div>
      </div>

      <div class="col-8 col-lg-4 col-xl-3">
        <div class="card border-0">
          <div class="card-body text-center py-4">
             <h4 class="card-title">Infrastructure construction</h4>
             <p class="lead card-subtitle">Schools, Hospital, Campus, Bridge, Road</p>
             <p class="lead card-subtitle">Projects done</p>
             <p class="display-4 my-4 text-primary fw-bold">37</p>
             <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
             <a class="btn btn-outline-primary btn-lg mt-3">See more</a>
          </div>
        </div>
      </div>
    </div>
  </section>




    <?php require('footer.html'); ?>

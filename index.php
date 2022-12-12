
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
              <img src="assets/advagro.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption text-white text-start">
                <h3 style="" class="fw-bold lead text-success">Agrovet</h3>
                <p>Agrochemicals and fertilizer wholesale and retail.High tech farming equipment</p>
              </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
              <img src="assets/home.jpeg" class="d-block w-100" alt="...">
              <div class="carousel-caption text-white text-start">
                <h4 class="fw-bold">Build a smart and beutifutul house</h4>
                <p>All decorations for homes and smart devices to make your building smart.</p>
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
             <p class="lead card-subtitle">Schools, Hospital, Campus, Bridge, Road</p><br>
             <p class="lead card-subtitle">Projects done</p>
             <p class="display-4 my-4 text-primary fw-bold">37</p>
             <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
             <a class="btn btn-outline-primary btn-lg mt-3">See more...</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- topics at glance-->
  <section id="topics">
    <div class="container-md">
      <div class="text-center">
        <h2>Welcome to our store,<br>We have awesome products for you needs.</h2>
        <p class="lead text-muted">you may visit our store or order online we make fast and efficient service to our clients in affordable price and detailed important information about our products</p>
      </div>

      <div class="row my-5 g-5 justify-content-around align-items-center"> 
        

        <div class="col-lg-6">

        <!-- Accordions -->
        <div class="accordion" id="chapters">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-controls="chapter-1" aria-expanded="true">
                OUR MISSION
              </button>
              
            </h2>
            <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#chapters">
              <div class="accordion-body">
                <p>To contribute to enhance the good living standard of people by provision of quality products and services.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-controls="chapter-1" aria-expanded="true">
                OUR VISION
              </button>
              
            </h2>
            <div id="chapter-1" class="accordion-collapse collapse " aria-labelledby="heading-1" data-bs-parent="#chapters">
              <div class="accordion-body">
                <p>To be one of professionally managed company in Africa and the world.</p> 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-controls="chapter-1" aria-expanded="true">
                OUR VISION
              </button>
              
            </h2>
            <div id="chapter-1" class="accordion-collapse collapse " aria-labelledby="heading-1" data-bs-parent="#chapters">
              <div class="accordion-body">
                <p>Hard working, creativity and innovation will bring the changes and difference to human life.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-controls="chapter-1" aria-expanded="true">
                SOCIAL RESPONSIBILITY
              </button>
              
            </h2>
            <div id="chapter-1" class="accordion-collapse collapse " aria-labelledby="heading-1" data-bs-parent="#chapters">
              <div class="accordion-body">
                <p>We also believe that "it is normal to help" and therefore, we aim to invest significant finicial resources in the non-profit sectors every year. Especially in areas of people with need of special care, culture, health care, sports and education</p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>


    </div>
  </section>
  
  <!-- Mission, Vision, value, Social Responsibility  -->
        <div class="container row text-white black-board m-2 my-4 d-none" style="background-color:black;">
          <nav>
           <ul class="nav nav-tabs nav-culture" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="mission" aria-selected="true">MISSION</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false">VISION</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value" type="button" role="tab" aria-controls="value" aria-selected="false">VALUE</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social-tab" type="button" role="tab" aria-controls="social-tab" aria-selected="false">SOCIAL RESPONSIBILITY</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">

                <!-- Mission content -->
                <div class="tab-pane fade show active" id="mission" role="tabpanel" aria-labelledby="mission-tab">To contribute to enhance the good living standard of people by provision of quality products and services.</div>

                <!-- Vision content -->
                <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">To be one of professionally managed company in Africa and the world.</div>

                <!-- Value content -->
                <div class="tab-pane fade" id="value" role="tabpanel" aria-labelledby="value-tab">Hard working, creativity and innovation will bring the changes and difference to human life.</div>

                <!-- Social responsibility -->
                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">We also believe that "it is normal to help" and therefore, we aim to invest significant finicial resources in the non-profit sectors every year. Especially in areas of people with need of special care, culture, health care, sports and education</div>
              </div>
          </nav>
        </div>
        <!-- Mission, Vision, value, Social Responsibility  Ends-->

      </div>

    <style type="text/css">
      .carousel .carousel-item{
        min-height: 300px;
      }

      .carousel-item img{
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        min-height: 300px;
      }
  
    </style>


    <?php require('footer.html'); ?>
  


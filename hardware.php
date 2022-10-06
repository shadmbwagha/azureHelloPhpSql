<?php 
  include('hardwareHeader.php');
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
      <p>Building material, motor spare parts, machinery spare parts and machines for iron working, funrniture, constuction and technician working tool kit</p>
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

    <!-- Hardware categories BEGINS HERE -->
    <div class="row text-center justify-content-center align-items-center">
      <h4 class="text-center mt-5 mb-3">Building Materials</h4>
      <div class="line"></div>
    </div>

    <div class="row text-black my-5 justify-content-center align-items-center">
        
            <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>


              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>


              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

           
         
         </div>

         <div class="row text-black my-5 justify-content-center align-items-center">
        
            <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>


              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>


              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>
         </div>


         <!-- Hardware categories BEGINS HERE -->
    <div class="row text-center justify-content-center align-items-center">
      <h4 class="text-center mt-5 mb-3">Motor Spare Parts</h4>
      <div class="line"></div>
    </div>

    <div class="row text-black my-5 justify-content-center align-items-center">
        
            <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>


              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>


              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

           
         
         </div>

         <div class="row text-black my-5 justify-content-center align-items-center">
        
            <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>


              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>

              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>


              <div class="col-md-2 col-12 bg-light my-3 mx-auto">
               <div class="product-view">
                 <div class="poduct-image"><img class="img-fluid" src="assets/saddleclamp.jpeg" width="100%"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h6 class="mb-3">Saddle Cramp inch 2" 3" 4"</h6>
                   <p class="display-7">TZS 2600/=</p>
                 </div>
               </div>
              </div>
         </div>




  </div>

<?php 
  include('footer.html'); 
?>

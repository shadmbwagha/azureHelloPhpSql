<?php 
  require('header.php');

  $sql = 'SELECT * FROM [dbo].[items] WHERE active="yes" LIMIT 4';
  $result =$conn->query($sql);
  $items = $result->fetchAll(PDO::FETCH_ASSOC);

?>


<!-- Main Body Content -->
  <div class="main-body container">



    <!-- Image slider body -->
    <section class="image-slider-box mt-2">
        <div class="image-slide-body">
          <!-- image slider start -->
          <div class="slider">
            <div class="slides">
              
              <!-- radio button start -->
              <input type="radio" name="radio-btn" id="radio1">
              <input type="radio" name="radio-btn" id="radio2">
              <input type="radio" name="radio-btn" id="radio3">
              <input type="radio" name="radio-btn" id="radio4">
              <!-- radio button end -->

              <!-- slide image start -->
                <div class="slide first">
                  <img src="xa.JPEG" alt="sorry failed to load image">
                </div>
                <div class="slide">
                  <img src="xt.jpg" alt="sorry failed to load image">
                </div>
                <div class="slide">
                  <img src="xgro.jpg" alt="sorry failed to load image">
                </div>
                <div class="slide">
                  <img src="xd.JPEG" alt="sorry failed to load image">
                </div>
              <!-- slide image end -->

              <!-- automatic navigation start -->
              <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
              </div>
              <!-- automatic navigation start -->

            </div>
            <!-- manual navigation start -->
            <div class="manual-navigation">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
              <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- manual navigation end-->
          </div>
        <!-- image slider end -->

    </div>
    <!-- Mission, Vision, value, Social Responsibility  -->
        <div class="row text-white black-board m-2 my-4 ">
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
                  <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">SOCIAL RESPONSIBILITY</button>
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
        <div class="row text-black align-items-center justify-content-center d-md-none">
           <div class="row text-black my-2 justify-content-center align-items-center">
          <?php foreach ($items as $item): 
            $img_paths = array(explode(',',$item['media_path']));
            $img_path = $img_paths[0];   
          ?>
            <div class="col-md-2 col-12 bg-light my-3 mx-auto">
              <a href="item_show_case.php?id=<?php echo $item['id'];?>">
               <div class="product-view justify-content-center align-items-center">
                 <div class="poduct-image"><img class="img-fluid" src="assets/<?php echo $img_path[0];?>" width="100%" alt="<?php echo $img_path[0];?>"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h4 class="mb-2 fw-bolder"><?php echo $item['item_name'];?></h4>
                   <h6 class="mb-2"><?php echo $item['item_options'];?></h6>
                   <p class="display-7"><?php echo $item['item_use'];?></p>
                   <h6 class="fw-bold">TZS <?php echo $item['cost'];?>/=</h6>
                 </div>
               </div>  
             </a>
            </div>
          
          <?php endforeach;?>
             
        </div>
        </div>

    </section>
    <!-- Image slider body ENDS -->







    <!-- Aside articles STARTS -->

    <aside class="articles text-white mt-2">
      <div class="col container align-items-center justify-content-center">

        <div class="row my-2">
          <!-- Card design -->
          <div class="col card m-0 p-0 me-1 rounded-0">
            <div class="card-body m-0 p-0 text-center">
              <img class="img-fluid m-0 p-0" src="assets/saddle.jpg" >
            </div>
            <div class="card-footer text-center border border-0">
              <span class="text-black text-center item-name">Building material<br>
              roof,tiles,color....</span>
            </div>
          </div>
          <div class="col card m-0 p-0 me-1 rounded-0">
            <div class="card-body m-0 p-0 text-center">
              <img class="img-fluid m-0 p-0" src="assets/mashine_screw.jpg">
            </div>
            <div class="card-footer text-center border border-0">
              <span class="text-black text-center item-name">Spares<br>
              motors,machinery</span>
            </div>
          </div>
          <div class="col card m-0 p-0 me-1 rounded-0">
            <div class="card-body m-0 p-0 text-center">
              <img class="img-fluid m-0 p-0" src="xc.jpg" >
            </div>
            <div class="card-footer text-center border border-0">
              <span class="text-black text-center item-name">Machinery<br>
              blower,Gig Saw</span>
            </div>
          </div>
        </div>


        <div class="row text-black align-items-center justify-content-center d-md-none">
           <div class="row text-black my-2 justify-content-center align-items-center">
          <?php foreach ($items as $item): 
            $img_paths = array(explode(',',$item['media_path']));
            $img_path = $img_paths[0];   
          ?>
            <div class="col-md-2 col-12 bg-light my-3 mx-auto">
              <a href="item_show_case.php?id=<?php echo $item['id'];?>">
               <div class="product-view justify-content-center align-items-center">
                 <div class="poduct-image"><img class="img-fluid" src="assets/<?php echo $img_path[0];?>" width="100%" alt="<?php echo $img_path[0];?>"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h4 class="mb-2 fw-bolder"><?php echo $item['item_name'];?></h4>
                   <h6 class="mb-2"><?php echo $item['item_options'];?></h6>
                   <p class="display-7"><?php echo $item['item_use'];?></p>
                   <h6 class="fw-bold">TZS <?php echo $item['cost'];?>/=</h6>
                 </div>
               </div>  
             </a>
            </div>
          
          <?php endforeach;?>
             
        </div>
       
        </div>

        <!-- Products addvertisement -->
        <div class="row text-white my-2 ">

          <!-- Card design -->
          <div class="col card m-0 p-0 me-1 rounded-0">
            <div class="card-body m-0 p-0 text-center">
              <img class="img-fluid m-0 p-0" src="xc.jpg" >
            </div>
            <div class="card-footer text-center border border-0">
              <span class="text-black text-center item-name">Agrovet</span>
              
            </div>
          </div>
          
          <!-- Card design -->
          <div class="col card m-0 p-0 me-1 rounded-0">
            <div class="card-body m-0 p-0 text-center">
              <img class="img-fluid m-0 p-0" src="xt.jpg">
              
            </div>
            <div class="card-footer text-center border border-0">
              <span class="text-black text-center item-name">Real Estate</span>
              
            </div>
            
            
          </div>

          <!-- Card design -->
          <div class="col card m-0 p-0 me-1 text-black  rounded-0">
            
            <div class="card-body my-3 text-center ">
              See more in our store ....
              <button class="btn btn-outline-primary">Click Here</button>
            </div>
         
          </div>
          <!-- Adds card ends -->



        </div>


         

        <div class="row black-board welcome mt-4">
          Tumia bidhaa za kisasa na zenye ubora kuongeza ubora, uzalishaji na weredi wa kazi yako.Karibu upate bidhaa bora na imara kwa bei nafuu.<br/> <span class="text-center"> “…Karibu Sana…“</span>
        </div>



      </div>
    </aside>

    <!--Aside  Artciles  Ends-->
    


  </div>

    <div class="container"> 
      <div class="row text-black my-3 justify-content-center align-items-center">
          <?php
          foreach ($items as $item): 
            $img_paths = array(explode(',',$item['media_path']));
            $img_path = $img_paths[0];   
          ?>
            <div class="col-md-2 col-12 bg-light my-3 mx-auto">
              <a href="item_show_case.php?id=<?php echo $item['id'];?>">
               <div class="product-view justify-content-center align-items-center">
                 <div class="poduct-image"><img class="img-fluid" src="assets/<?php echo $img_path[0];?>" width="100%" alt="<?php echo $img_path[0];?>"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h4 class="mb-2 fw-bolder"><?php echo $item['item_name'];?></h4>
                   <h6 class="mb-2"><?php echo $item['item_options'];?></h6>
                   <p class="display-7"><?php echo $item['item_use'];?></p>
                   <h6 class="fw-bold">TZS <?php echo $item['cost'];?>/=</h6>
                 </div>
               </div>  
             </a>
            </div>
          
          <?php endforeach;?>
             
        </div>
      </div>

  <?php 
    include('footer.html');
  ?>

  <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio'+ counter).checked = true;
        counter++;
        if (counter>4){
          counter=1;
        }
      }, 5000);       
    </script>

</body>
</html>

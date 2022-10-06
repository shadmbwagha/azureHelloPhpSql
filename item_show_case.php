<?php
  include('hardwareHeader.php');
  if(isset($_GET['id'])){
  $id =  $_GET['id'];
  $sql = "SELECT * FROM items WHERE id='$id'";
  $result = mysqli_query($conn,$sql);
  $item = mysqli_fetch_all($result,MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div>
  
</head>
<body>
  


  <section class="container sproduct my-5">
    <div class="row mt-md-5">

      <!-- col image -->
      <div class="col-lg-5 col-sm-12 col-12">
        <div class="d-md-none d-lg-none  h4 fw-bolder"><?php echo htmlspecialchars($item[0]['item_name']);?></div>
        <?php 
          $img_paths = array(explode(',',$item[0]['media_path']));
          $img_path = $img_paths[0];
          $image_name = $img_path[0];
      
        ?>
        <img src="assets/<?php echo $image_name;?>" alt="saddle clamp" class="img-fluid w-100 pb-1">
        <div class="small-img-group">
          <?php 
            for ($i=0; $i<count($img_path); $i++) {?>
              <div class="small-img-col">
                <img src="assets/<?php echo $img_path[$i];?>" width="100%" class="small-img" alt="<?php echo $img_path[$i];?>">
              </div>
              <?php
              
            }

          ?>
         
        </div>
      </div>

      <!-- coll details -->
      <div class="col-lg-6 col-sm-12 col-12">
        <h6 class="text-muted">spare parts/water</h6>
        <h3 class="py-4 fw-bolder"><?php echo $item[0]['item_name'];?></h3>
        <h2 class="">Tzsh <?php echo $item[0]['cost'];?>/=</h2>
        <h4>Available Options</h4>
        <?php 
          $options = array(explode(',', $item[0]['item_options']));
          $option = $options[0];
        ?>
        <div class="row my-3">
          <?php for($x = 1;$x<count($option);$x++): ?>
            <div class="card m-1 col-2 p-0 m-0">
              <div class="card-body">
                <span class="text-center fw-bold"><?php echo htmlspecialchars($option[$x]);?></span><br/><?php echo htmlspecialchars($option[0]);?>
              </div>
            </div>
          <?php endfor;?>   
        </div>

        <div class="row">
          <input type="number" name="" class="ms-2 " value="1">
          <button class="buy-btn">Add To Cart</button>
          <div class="row">
           <a href="buy-form.php"><button class="buy-btn my-3">Buy Now</button></a>
          </div>
          <h4 class="mt-5 mb-4">Product details</h4>
          <span><?php echo htmlspecialchars($item[0]['item_description']);?></span>
        </div>

        


      </div>


      <!-- Related product row -->
      <div class="row text-center justify-content-center align-items-center">
        <h4 class="text-center mt-5 mb-3">Related products</h4>
        <div class="line text-center"></div>
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

         <!-- Related product row -->
      <div class="row text-center justify-content-center align-items-center">
        <h4 class="text-center mt-5 mb-3">Also Bought</h4>
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

        </div>
  </section>
  <style type="text/css">
      body{
        background-color: white;
      }
     .small-img-group{
      display: flex;
      justify-content: space-between;

     }

     .small-img-col{
      flex-basis: 24%;
      cursor: pointer;
     }

     .sproduct input{
      width: 90px;
      height: 40px;
      padding-left: 10px;
      font-size: 16px;
      margin-right: 10px;
      border: 1px solid black;
     }

     .sproduct input:focus{
      outline: none;
     }

     .buy-btn{
      background-color: #E8491D;
      opacity: 1;
      transition: 0.3s all;
      border: 0;
      padding: 10px 50px;
      width: fit-content;
      color: white;
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


    a{
      color: black;
    }


    .line{
      height: 7px;
      width: 50px;
      background-color: #E8491D;
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
 </div>
<?php 
  include('footer.html');
?>
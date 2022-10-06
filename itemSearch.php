<?php 
	include('header.php'); 

	$search = $_POST['search'];

	$sql = "SELECT * FROM items WHERE item_name LIKE '%$search%' OR item_description LIKE '%$search%' OR item_use LIKE '%$search%' OR category LIKE '%$search%' OR child_category LIKE '%$search%'";

	$result = mysqli_query($conn,$sql);
	//counts row
	$count = mysqli_num_rows($result);

	echo '<div class="my-3 text-center text-muted">You have searched for <span class="fw-bold">'.$search.'</span></div>';
	
	//check wether item is available
	if($count>0){
		echo '<div class="row text-black my-4 justify-content-center align-items-center">';
		//item available
		while($row = mysqli_fetch_assoc($result)){
			$id=$row['id'];
			$item_name= $row['item_name'];
			$item_options = $row['item_options'];
			$item_use = $row['item_use'];
			$cost = $row['cost'];

			$img_paths = array(explode(',',$row['media_path']));
            $img_name = $img_paths[0];
            ?>

             <div class="col-md-2 col-12 bg-light my-3 mx-auto">
              <a href="item_show_case.php?id=<?php echo $id;?>">
               <div class="product-view justify-content-center align-items-center">
                 <div class="poduct-image ms-1"><img class="img-fluid" src="assets/<?php echo $img_name[0];?>" width="100%" alt="<?php echo $img_name[0];?>"></div>
                 <div class="product-text align-items-center justify-content-center mt-3 ms-3">
                   <h4 class="mb-2 fw-bolder"><?php echo $item_name;?></h4>
                   <h6 class="mb-2"><?php echo $item_options;?></h6>
                   <p class="display-7"><?php echo $item_use;?></p>
                   <h6 class="fw-bold">TZS <?php echo $cost;?>/=</h6>
                 </div>
               </div>  
             </a>
            </div>

		
		<?php 
	}
	
	echo '</div>';	
	}else{
		echo '<div class="text-muted text-center my-5 py-5">Sorry,No item found!<br>Try again using correct name and spelling </div>';
	}
?> 


<?= include('footer.html');?>

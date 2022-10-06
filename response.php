<?php 
	include('connect_db.php');

	if(isset($_POST['input'])){
		$search = $_POST['input'];

		echo "hi";

		$sql = "SELECT * FROM items WHERE item_name LIKE '%$search%' OR item_description LIKE '%$search%' OR item_use LIKE '%$search%' OR category LIKE '%$search%' OR child_category LIKE '%$search%'";

		$result = mysqli_query($conn,$sql);
		//counts row
		$count = mysqli_num_rows($result);

		if($count>0){
		while($row = mysqli_fetch_array($response)){

			echo '<div class="container bg-info text-white">
					<div class="my-4">
						<ol class="list-group list-group-numbered">
							<li class="list-group-item d-flex justify-content-center align-items-start">
								<div class="ms-2 me-auto">
									<div class="fw-bold">'.$row['item_name'].'</div>
								</div>
							</li>
						</ol>
					</div>
			</div>';
		}
		}
		}

	
?>
<!-- connect to database -->
<?php include('connect_db.php'); ?>



<?php

//form validation
if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$phoneNumber = $_POST['phoneNumber'];
	$email = $_POST['email'];
	$product = $_POST['product'];
	$product_desc = $_POST['product_desc'];

	$error = ['name' =>'', 'phoneNumber' =>'', 'product'=>'','product_desc'=> ''];


	// NAME validation
	if(empty($name)){
		$error['name'] = "name is required<br/>";
	} else{
		if(!preg_match('/^[a-zA-Z\s]+$/', $name))
		$error['name']= "name must be letters and space only";
	}


	// phone number validation
	if(empty($phoneNumber)){
		$error['phoneNumber']= "phone number is required";
	}else{
		if(!preg_match('/^[0-9]\d{9}$/',$phoneNumber)){
			$error['phoneNumber']= "phone number must contain numbers only i.e 0621561022";
		}
	}


	//product name
	if(empty($product)){
		$error['product']= "Please enter product name";
	}

	
	//product desc
	if(empty($product_desc)){
		$error['product_desc']= "Please write anything about a product";
	}




	// validate finishing
	if(array_filter($error)){
		//print errors
	}else{
		$name = mysqli_escape_string($conn, $_POST['name']);
		$phoneNumber = mysqli_escape_string($conn, $_POST['phoneNumber']);
		$email= mysqli_escape_string($conn, $_POST['email']);
		$product = mysqli_escape_string($conn, $_POST['product']);
		$product_desc = mysqli_escape_string($conn, $_POST['product_desc']);

		$sql = "INSERT INTO product_subscribe(name,phone_number,email,product_name,product_description) VALUES('$name', '$phoneNumber', '$email','$product','$product_desc')";


		//save to database and check if saved
		if(mysqli_query($conn, $sql)){
			//success
			?>
			<div class="text-center bg-primary m-2">
				<div class="h1 text-white">Order Successfuly!!</div>
				<p class="lead text-white">your order have been submitted successful we will keeep you in touch when is available and you may write other product out of stock </p>
			</div>
			<?php
			$product="";
			$product_desc="";
			//header('location: index.php');

		}else{
			echo "didnt submit there is error:". mysqli_error($conn);
		}

	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/formInStock.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <script type="text/javascript" src="./js/bootstrap.js"></script>
	<title>
		Mbungula Stock
	</title>
</head>


<body style="background-color:#ddd;">


<div class="row my-3 align-items-center justify-content-center " style="background-color:#ddd;">
	<!-- col width in different size -->
	<div class="col-10 col-lg-5 col-xl-4 bg-light m-0 p-0">
		<header class="text-center p-0">
			

		  <!-- Mbungula title -->
		  <h1 class="navbar-brand h1 title">
		      <div class="fw-bold title text-center mbungula-text" style="color: #136DD9;">MBUNGULA</div>
		  </h1>

		  <!-- LOGO -->
		  <img  src="./assets/mbulalgsvg.svg" height="53.3px"; width="73.3px" class="img img-fluid logo-img mb-2"/>
		</header>

		<div class="h2  text-center mt-2 fw-bold">
			<span style="color: #E8491D;">BUY A PRODUCT</span>
		</div>


		<!-- FORM for ordering when in stock -->
		<form class="p-4" action="formInStock.php" method="POST">

			<label  class="mt-1">Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($name);?>">
			<div class="text-danger"><?php echo $error['name'];?></div>


			<label for="number" class="mt-3">Phone Number</label>
			<input type="Number" name="phoneNumber" class="form-control" value="<?php echo htmlspecialchars($phoneNumber);?>">
			<div class="text-danger"><?php echo $error['phoneNumber'];?></div>

			<label for="email" class="mt-3">Email(optional)</label>
			<input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email);?>">
			<div class="text-danger"><?php echo $error['email'];?></div>
			<div class="row">
			<label class="form-label mt-3">Select Payment Method</label>
				<div class="col">
					<select class="form-select ">
						<option value="hardware">Bank</option>
						<option value="hardware">Sim networks</option>
						<option value="hardware">Credit Card</option>
					</select>
				</div>

				<div class="col">
					<select class="form-select ">
						<option value="hardware">NMB</option>
						<option value="hardware">CRDB</option>
						<option value="hardware">NBC</option>
					</select>
				</div>
			</div>
			

			<div class="row">
			<label class="form-label mt-3">Select Deliver Point</label>
				<div class="col mx-1">
					<select class="form-select ">
						<option value="hardware">Mjini</option>
						<option value="hardware">Vwawa Stend</option>
						<option value="hardware">Ichenjezya Kwa jimi</option>
						<option value="hardware">Ilembo</option>
						<option value="hardware">Mtambwe</option>
						<option value="hardware">Isansa</option>
						<option value="hardware">Ilolo</option>
					</select>
				</div>
				<div class="col">
					<select class="form-select ">
						<option value="hardware disabled">Select Transportation type: </option>
						<option value="hardware">Express : Tzsh 3000/=</option>
						<option value="hardware">Normal : Tzsh 1500/=</option>
						<option value="hardware">Later : Tzsh 500/=</option>
					</select>
				</div>
			</div>




			<label for="product" class="mt-3">Deliver in : <span class="text-success fw-bold"> 3hrs</span></label>
			<div class="row my-5">
				<label for="product" class="text-center fw-bold display-7">TOTAL : <span class="text-primary fw-bolder display-6">Tzsh 58000/=</span></label><br>
			</div>
			
			

			<div class="my-4">
				<button class="btn btn-success w-80">Generate Control Number:</button>
			</div>

			<label for="product" class="mt-3">Payment Status : <span class="text-danger fw-bold"> Not Paid</span></label>
			


			<div class="text-center mt-4">
				<button class="btn btn-primary text-center px-4" type="submit" name="submit" value="submit">SUBMIT</button>
			</div>

		</form>
	</div>


</div>


</body>
</html>
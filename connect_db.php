<?php
	
	$conn = mysqli_connect('localhost','shad','123shad','MBUNGULA_WEB');

	if(!$conn){
		echo "Connection Error".mysqli_connect_error();
	}
?>
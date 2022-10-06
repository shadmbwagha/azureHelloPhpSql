<?php
	
	// PHP Data Objects(PDO) Sample Code:
	try {
    		$conn = new PDO("sqlsrv:server = tcp:mbungula.database.windows.net,1433; Database = mbungulaweb", "shad", "#sylvester777");
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
    		print("Error connecting to SQL Server.");
    		die(print_r($e));
}
?>

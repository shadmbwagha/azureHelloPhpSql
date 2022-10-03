<?php 
//     echo "hello Azure By shad<br>";
//     $conn = mysqli_connect("mbungula.database.windows.net", "shad", "#sylvester777", "mbungulaweb");
//      if(!$conn){
//         echo "Connection Error".mysqli_connect_error();
//     }

// 	$sql = 'SELECT * FROM [dbo].[names]';
// 	$res = mysqli_query($conn,$sql);
// 	$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
// 	print_r($row);

// PHP Data Objects(PDO) Sample Code:
 try {
     $conn = new PDO("sqlsrv:server = tcp:mbungula.database.windows.net,1433; Database = mbungulaweb", "shad", "#sylvester777");
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch (PDOException $e) {
     print("Error connecting to SQL Server.");
     die(print_r($e));
 }




 $sql = 'SELECT * FROM [dbo].[names]';
 $statement = $conn->query($sql);

 // get all publishers
 $publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
 if ($publishers) {
 	// show the publishers
 foreach ($publishers as $publisher) {
 echo $publisher['first_name'] . '<br>';
 	}
 }

echo "hi";

?>

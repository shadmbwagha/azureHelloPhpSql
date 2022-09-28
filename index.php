<?php 
    echo "hello Azure By shad<br>";
//     $conn = mysqli_connect("tcp:mbungula.database.windows.net", "shad", "#sylvester777", "mbungulaweb");
//     if(!$conn){
//         echo "Connection Error".mysqli_connect_error();
//     }


// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:mbungula.database.windows.net,1433; Database = mbungulaweb", "shad", "#sylvester777");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "shad", "pwd" => "#sylvester777", "Database" => "mbungulaweb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:mbungula.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


$sql = 'SELECT id FROM [dbo].[names]';

$statement = $pdo->query($sql);

// get all publishers
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
	// show the publishers
	foreach ($publishers as $publisher) {
		echo $publisher['first_name'] . '<br>';
	}
}

?>

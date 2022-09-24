<?php echo "hello Azure By shad";?>
<?php
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

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "shad", "pwd" => "#sylvester777", "Database" => "mbungulaweb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:mbungula.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>

$stmt = $conn->query(SELECT * FROM names");
while($row = $stmt->fetch()){
  echo $row['first_name']."<br>/";
}
print_r($names);
?>


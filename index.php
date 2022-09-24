<?php echo "hello Azure By shad";?>
<?php
$conn = mysqli_connect("mbungula.database.windows.net","shad","#sylvester777","mbungulaweb");

$sql = "SELECT * FROM names";
$result = mysqli_query($conn,$sql);
$names = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($names);
?>


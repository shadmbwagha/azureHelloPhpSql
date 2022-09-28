<?php 
    echo "hello Azure By shad";
    $conn = mysqli_connect("tcp:mbungula.database.windows.net", "shad", "#sylvester777", "mbungulaweb");
    if(!$conn){
        echo "Connection Error".mysqli_connect_error();
    }
?>

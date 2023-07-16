<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "inventory";

    $conn = mysqli_connect($host, $user, $password, $db_name);
    if ($conn) {
          // echo "Connection Successfully";

    }
    else{
        echo "Sorry Some Mistakes is";
    }
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
?>

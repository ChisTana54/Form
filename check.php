<?php
    $servername = "localhost";
    $database = "test";
    $username = "root";
    $password = "";
  
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
  
    // Check connection
  
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } else {
      echo "success";
    }
    
    ?>
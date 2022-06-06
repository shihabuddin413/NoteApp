
<?php
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "RTSshihab413";
    $dbname = 'todoStore';
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      echo mysqli_connect_error();
      die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Db Connected successfully";
    ?>
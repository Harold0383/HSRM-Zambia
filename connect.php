<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "hsrm_zambia";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $databasename);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " .mysqli_connect_error());
    }
    echo "Connected Successfully";
?>
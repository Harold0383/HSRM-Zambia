<?php
//    if (isset($_POST['Submit Response'])){
//        require 'connect.php';
//        
//        $username = $_POST['fullnames'];
//        $phoneNumber = $_POST['citizen_phone'];
//        $address = $_POST['citizen_address'];
//        $dateTime = $_POST['date_time'];
//        $provinceName = $_POST['province_name'];
//        $districtName = $_POST['district_name'];
//        $townName = $_POST['town_name'];
//        
//        if (empty($username)|| empty($phoneNumber)|| empty($address)|| empty($dateTime)|| empty($provinceName) || empty($districtName) || empty($townName)){
//            header("Location: index.php?error=emptyfield=");
//            exit();
//        }
//        
//    }
require 'connect.php';
        
        $username = $_POST['fullNames'];
        $phoneNumber = $_POST['citizen_phone'];
        $address = $_POST['citizen_address'];
        $dateTime = $_POST['date_time'];
        $provinceName = $_POST['province_name'];
        $districtName = $_POST['district_name'];
        $townName = $_POST['town_name'];
        $response = $_POST['Response'];
        
    

$sql1 = "INSERT INTO province (p_name) VALUES ('$provinceName');";
   mysqli_query($conn, $sql1);
$sql2 = "INSERT INTO district (d_name) VALUES ('$districtName');";
   mysqli_query($conn, $sql2);
$sql3 = "INSERT INTO town (t_name) VALUES ('$townName');";
   mysqli_query($conn, $sql3);

$sql4 = "INSERT INTO response (citizen_name, citizen_phone, citizen_address, date_time,Response,p_idd,d_idd,t_idd) VALUES ('$username', '$phoneNumber', '$address', '$dateTime','$response',(SELECT p_id FROM province WHERE p_name ='$provinceName' ORDER BY p_id ASC LIMIT 1),(SELECT d_id FROM district WHERE d_name ='$districtName' ORDER BY d_id ASC LIMIT 1),(SELECT t_id FROM town WHERE t_name ='$townName' ORDER BY t_id ASC LIMIT 1));";
   mysqli_query($conn, $sql4);

$sql5 = "INSERT INTO assign_province (p_idd,d_idd,t_idd) VALUES ((SELECT p_id FROM province WHERE p_name ='$provinceName' ORDER BY p_id ASC LIMIT 1),(SELECT d_id FROM district WHERE d_name ='$districtName' ORDER BY d_id ASC LIMIT 1),(SELECT t_id FROM town WHERE t_name ='$townName' ORDER BY t_id ASC LIMIT 1));";
   mysqli_query($conn, $sql5);
$sql6 = "INSERT INTO updates(p_name,d_name,t_name, p_idd,d_idd,t_idd) VALUES ('$provinceName','$districtName','$townName',(SELECT p_id FROM province WHERE p_name ='$provinceName' ORDER BY p_id ASC LIMIT 1),(SELECT d_id FROM district WHERE d_name ='$districtName' ORDER BY d_id ASC LIMIT 1),(SELECT t_id FROM town WHERE t_name ='$townName' ORDER BY t_id ASC LIMIT 1));";
   mysqli_query($conn, $sql6);



header("Location:National.php?registration=success"); exit;

?>

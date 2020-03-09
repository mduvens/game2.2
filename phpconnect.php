<!-- <?php
// $servername = "localhost";
// $username = "id12798101_manel";
// $password = "douwensdb";
// $database = "id12798101_base";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Connected successfully"; 
//     } catch(PDOException $e) {    
//     echo "Connection failed: " . $e->getMessage();
//     }
?> -->

<?php

$servername = "localhost";
$username = "id12798101_manel";
$password = "douwensdb";
$database = "id12798101_base";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
?>

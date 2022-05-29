<?php
$servername = "localhost";
$username = "root";
$password = "";
$data_bd="la_relance";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$data_bd);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
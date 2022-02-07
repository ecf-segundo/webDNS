<?php
// Variables for conection
$servername = "localhost";
$username = "dns";
$password = "Senha123";
$db = "dns";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die (mysqli_error());
mysqli_select_db($conn,$db) or die(mysqli_error($conn));

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//conecção ok
//echo "Connected successfully";

?>

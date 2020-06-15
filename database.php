<?php
$servername = "localhost";
$username = "root";
$password = "";
$datbase = "cl2";
$conn = new mysqli($servername, $username, $password,$datbase);
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 

?>

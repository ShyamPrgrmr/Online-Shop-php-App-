<?php
require 'database.php';


	$name    = $_POST['name'];
	$phone  = $_POST['phone'];
	$address  = $_POST['address']; 
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	session_start();
	$shop = $_SESSION['shusername'];


	$sql="insert into cl2.delivery values('$name','$phone','$address','$user','$pass','$shop')";
	if($conn->query($sql))
	{
	echo "saved";
	}
	else
	{
	echo "Something went wrong";	
	}


?>
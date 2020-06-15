<?php
require 'database.php';


	$name    = $_POST['name'];
	$address  = $_POST['address'];
	$contact  = $_POST['con']; 
	$email  = $_POST['ema'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];



	$sql="insert into cl2.clients values('$user','$pass','$name','$address','$contact','$email')";
	if($conn->query($sql))
	{
	echo "saved";
	}
	else
	{
	echo "Something went wrong";	
	}


?>
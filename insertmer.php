<?php
require 'database.php';

$servername = "localhost";
$username = "root";
$password = "";
$datbase = "cl2";


	$shname    = $_POST['sname'];
	$mername  = $_POST['mname'];
	$contact  = $_POST['con']; 
	$email  = $_POST['ema'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];


	$sql="insert into cl2.merchants(shname,mename,contact,email,username,password) values('$shname','$mername','$contact','$email','$user','$pass')";
	if($conn->query($sql))
	{
	echo "saved";
	}
	else
	{
	echo "Something went wrong";	
	}


?>
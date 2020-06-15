<?php

require "database.php";
session_start();
$shusername = $_SESSION['shusername'];
$name = $_POST['itname'];
$cuname = $_POST['cuname'];
$price = $_POST['pri'];
$quantity = $_POST['qu'];
$address=$_POST['add'];


$yes="yes";

$sql="update cl2.order set accept='$yes' where merusername='$shusername' and itemname='$name' and custname='$cuname' and price='$price' and quantity='$quantity' and custaddress='$address'";
	
	if($conn->query($sql))
	{
	echo "Updated";
	}
	else
	{
	echo "Something went wrong";	
	}


?>
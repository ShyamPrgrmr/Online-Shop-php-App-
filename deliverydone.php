<?php

require "database.php";
session_start();
$shusername = $_SESSION['shopname'];
$name = $_POST['iname'];
$cuname = $_POST['cname'];
$quantity = $_POST['iquan'];
$address=$_POST['caddr'];


$yes="delivered";

$sql="update cl2.order set accept='$yes' where merusername='$shusername' and itemname='$name' and custname='$cuname' and quantity='$quantity' and custaddress='$address'";
	
	if($conn->query($sql))
	{
	echo "Updated";
	}
	else
	{
	echo "Something went wrong";	
	}


?>
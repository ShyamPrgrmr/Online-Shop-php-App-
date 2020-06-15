<?php
require "database.php";
session_start();
$shusername = $_SESSION['shusername'];
$name = $_POST['itname'];
$cuname = $_POST['cuname'];


$sql="delete from cl2.order where merusername='$shusername' and itemname='$name' and custname='cuname'";
	if($conn->query($sql))
	{
	echo "Deleted";
	}
	else
	{
	echo "Something went wrong";	
	}

?>
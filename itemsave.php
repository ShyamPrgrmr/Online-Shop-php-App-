<?php 
require 'database.php';

session_start();
$shusername = $_SESSION['shusername'];
$itemname = $_POST['name'];
$desc = $_POST['dis'];
$price = $_POST['pri'];

$sql="insert into cl2.itemdata values('$shusername','$itemname','$desc','$price')";
	if($conn->query($sql))
	{
	echo "saved";
	}
	else
	{
	echo "Something went wrong";	
	}
?>
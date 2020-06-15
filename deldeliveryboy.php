<?php
require "database.php";
session_start();
$shusername = $_SESSION['shusername'];
$name = $_POST['del'];

$sql="delete from cl2.delivery where merusername='$shusername' and username='$name'";
	if($conn->query($sql))
	{
	echo "Deleted";
	}
	else
	{
	echo "Something went wrong";	
	}

?>
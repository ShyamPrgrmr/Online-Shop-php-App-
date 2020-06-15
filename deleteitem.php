<?php
require "database.php";
session_start();
$shusername = $_SESSION['shusername'];
$name = $_POST['name'];

$sql="delete from cl2.itemdata where merusername='$shusername' and itemname='$name'";
	if($conn->query($sql))
	{
	echo "Deleted";
	}
	else
	{
	echo "Something went wrong";	
	}

?>
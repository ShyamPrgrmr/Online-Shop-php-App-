<?php
require "database.php";
session_start();

$clientid=$_SESSION['clientname'];
$client = $_SESSION['clname'];
$clientadd=$_SESSION['claddress'];
$clienphone=$_SESSION['clphone'];
$itemname = $_POST['name'];
$shopid = $_POST['shopid'];
$price = $_POST['price'];
$quant = $_POST['quant'];
$accept= "no";

	$sql="insert into cl2.order values('$client','$clienphone','$clientadd','$shopid','$itemname','$quant','$price','$clientid','$accept');";
	if($conn->query($sql))
	{
	echo "<p>Saved</p>";
	}
	else
	{
	echo "<p>Something went wrong<p>";	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Goorder.com</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <style type="text/css">
  	.heading{
  		font-size: 30px;
  	}
  	.input 
  	{
  		font-size: 20px;
  	}
  	label
  	{
  		font-size: 20px;
  	}
  	.con
  	{
  		border-radius: 25px;
  		border: 2px solid #73AD21;
 	 	padding: 20px; 
  	}
  	
  </style>


<?php
				  session_start();
                  $shopname = $_SESSION['shopname'];
                  
?>

</head>
<body style="padding-bottom: 10px;">


<div class="container">

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Welcome <?php echo $shopname ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <ul class="navbar-nav mr-auto">

    	<div class="form-inline">
    		<button class="btn btn-sm btn-outline-primary" style="border: none; margin:3px;  " id="myitem" type="button">My items</button>
    		<button class="btn btn-sm btn-outline-primary" style="border: none; margin:3px;  " id="myplacedorder" type="button">Accepted orders</button>
    		<button class="btn btn-sm btn-outline-primary" style="border: none; margin:3px;  " id="delivary" type="button">Delivery services</button>
  		</div>
      

      </ul>
    <form class="form-inline">
      <div class="md-form my-0">
        <button class="btn btn-sm btn-primary" onclick="signout();">Sign out</button>
      </div>
    </form>
  </div>
</nav>

</div>
<div class="container con">
	<div class="row">
		<div class="col-sm-4">
			<center class="heading">Add new item</center>
			<div class="form-group">

				<label for="itemname">Item name</label>
				<input type="text" name="itemname" id="itemname" placeholder="Item name" class="form-control">
				<br>
				<label for="itemdis">Item description</label>
				<textarea type="text" name="itemdis" id="itemdis" placeholder="Item description" class="form-control"></textarea>
				<br>
				<label for="price">Enter price</label>
				<input type="number" name="price" id="price" placeholder="item price" class="form-control">
				<br>
				<label for="photo">Select photo</label>
				
				<input type="file" class="form-control" id="photo1" accept="image/x-png,image/gif,image/jpeg">
				<br>
				<input type="file" class="form-control" id="photo2" accept="image/x-png,image/gif,image/jpeg">
				<br>
				<input type="file" class="form-control" id="photo3" accept="image/x-png,image/gif,image/jpeg">
				<br>
				<center><button class="btn btn-md btn-primary" onclick="def();">Submit</button></center>

			</div>
		</div>

		<div class="col-sm-8">
			<center class="heading">All orders</center>
			<br>
			<table class="table table-striped table-responsive">
				<thead>
				<tr>
					<th>#</th>
					<th>Customer Name</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Item name</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody id="ordertable">
					
				</tbody>
			</table>
		</div>

	</div>

	<div class="row">
		<div class="col-sm-12" id="myorere">
			<center><h2>My orders</h2></center>
			<table class="table table-striped" >
				<thead>
					<tr>
					<th>#</th>
					<th>Item Name</th>
					<th>Item dis.</th>
					<th>Price</th>
				 	<th>Action</th>
					</tr>
				</thead>
				<tbody id="itemtable">
					
				</tbody>
			</table>
		</div>
	</div>
<br>
	<div class="row">
		<div class="col-sm-12" id="orderac">
			<center><h2>All accepted orders</h2></center>
			<table class="table table-striped" >
				<thead>
					<tr>
					<th>#</th>
					<th>Customer Name</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Item name</th>
					<th>Quantity</th>
					<th>Price</th>
					</tr>
				</thead>
				<tbody id="acorder">
					
				</tbody>
			</table>
		</div>
	</div>

			<div class="row">
			<div class="col-sm-12">
				<center><h2>Delivery services</h2></center>
			</div>
		</div>

	<div class="row">

		<div class="col-sm-4" id="adddelivery">
			<center><h3>Add new delivery boy</h3></center>
			<div class="form-group">
				<label for="boyname">Username</label>
				<input type="text" name="boyname" id="boyusername" placeholder="enter name" class="form-control">
				<label for="boyname">Password</label>
				<input type="password" name="boyname" id="boypassword" placeholder="enter name" class="form-control">
				<label for="boyname">Name</label>
				<input type="text" name="boyname" id="boyname" placeholder="enter name" class="form-control">
				<label for="boyname">Phone number</label>
				<input type="text" name="boyphone" id="boyphone" placeholder="enter phone" class="form-control">
				<label for="boyname">Address</label>
				<input type="text" name="boyaddress" id="boyaddress" placeholder="enter address" class="form-control"><br>
				<center><button id="savedeliveryboy" class="btn btn-primary" onclick="savedeliveryboy();">Save</button></center>
			</div>
		</div>

		<div class="col-sm-8">
			<h3>All delivery boys</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<td>#</td>
						<td>Name</td>
						<td>Phone number</td>
						<td>Address</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody id="deliveryload">
					
				</tbody>
			</table>		
		</div>
	
	</div>
</div>



<script type="text/javascript">
	
	function savedeliveryboy()
	{
		var boy_name    = document.getElementById("boyname").value;
		var boy_phone   = document.getElementById("boyphone").value;
		var boy_address = document.getElementById("boyaddress").value;
		var boy_user    = document.getElementById("boyusername").value;
		var boy_pass    = document.getElementById("boypassword").value;

		$.ajax({
			url:'savedeliveryboy.php',
			type:'POST',
			data:{
				user:boy_user,
				pass:boy_pass,
				name:boy_name,
				phone:boy_phone,
				address:boy_address
			},
			success: function(){
				loaddeliveryboys();
			}

		});

	}

	loaddeliveryboys();

	function loaddeliveryboys(){
		$.ajax({
		url : 'loaddeliveryboys.php',
		type : 'POST',
		data :{
		},
		success: function(result)
    	{
      		$("#deliveryload").html(result);
    	}

	});
	}

	function deldeliveryboy(name){
		var n=name;

	$.ajax({
		url : 'deldeliveryboy.php',
		type : 'POST',
		data :{
			del:n
		},
		success: function(result)
    	{
    		loaddeliveryboys();
    	}

	});	

	}

	$("#myitem").click(function(){
		document.getElementById('myorere').scrollIntoView(true);
	});

	$("#myplacedorder").click(function(){
		document.getElementById('orderac').scrollIntoView(true);
	});

	
	$("#delivary").click(function(){
		document.getElementById('adddelivery').scrollIntoView(true);
	});


	function loadacor(){
		$.ajax({
		url : 'loadacorder.php',
		type : 'POST',
		data :{
		},
		success: function(result)
    	{
      		$("#acorder").html(result);
    	}

	});
	}


	 loadacor();
	function accept(exdata)
	{
		var cunamedel = exdata.substring(0,exdata.indexOf("&"));
		var itnamedel = exdata.substring(exdata.indexOf("&")+1,exdata.indexOf("@"));
		var price     = exdata.substring(exdata.indexOf("@")+1,exdata.indexOf("/"));
		var quant     = exdata.substring(exdata.indexOf("/")+1,exdata.indexOf(":"));
		var addr      =	exdata.substring(exdata.indexOf(":")+1,exdata.indexOf("*"));


		$.ajax({
		url : 'acceptorder.php',
		type : 'POST',
		data :{
			itname: itnamedel,
			cuname:  cunamedel,
			pri: price,
			qu: quant,
			add: addr
		},
		success: function(result)
    	{
				loadorder();
				 loadacor();      		
    	}

		});


	}

function loadorder()
{
	$.ajax({
		url : 'loadorder.php',
		type : 'POST',
		data :{
		},
		success: function(result)
    	{
      		$("#ordertable").html(result);
    	}

	});
}

function delorder(exdata)
{
	var cunamedel =exdata.substring(0,exdata.indexOf("&"));
	var itnamedel =exdata.substring(exdata.indexOf("&")+1,exdata.indexOf("@"));
		$.ajax({
		url : 'deleteorder.php',
		type : 'POST',
		data :{
			itname: itnamedel,
			cuname:  cunamedel

		},
		success: function(result)
    	{
				loadorder();      		
    	}

		});

}

function loaditem()
{
	$.ajax({
		url : 'loaditem.php',
		type : 'POST',
		data :{
		},
		success: function(result)
    	{
      		$("#itemtable").html(result);
    	}

	});
}

loaditem();
loadorder();	
function def(){
	var itemname = document.getElementById("itemname").value;
	var itemdis = document.getElementById("itemdis").value;
	var price = document.getElementById("price").value;

	$.ajax({
		url : 'itemsave.php',
		type : 'POST',
		data :{
			name: itemname,
			dis:itemdis,
			pri : price
		},
		success: function(result)
    	{
				loaditem();      		
    	}

	});

}


function del(){
var dele = document.getElementById("deleteitem").getAttribute("name");

$.ajax({
		url : 'deleteitem.php',
		type : 'POST',
		data :{
			name: dele
		},
		success: function(result)
    	{
				loaditem();      		
    	}

	});
}



function signout(){

$.ajax({
		url : 'signoutmer.php',
		type : 'POST',
		data :{
		},
		success: function(result)
    	{
    		 window.open("index.php","_self",false);    		
    	}

	});
}





</script>


</body>
</html>
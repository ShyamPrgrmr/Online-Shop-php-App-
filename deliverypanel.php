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
</head>


<?php
				  session_start();
                  $shopname = $_SESSION['deliname'];
                  
?>
<body>
	<div class="container">

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Welcome <?php echo $shopname;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <ul class="navbar-nav mr-auto">

      </ul>
    <form class="form-inline">
      <div class="md-form my-0">
        <button class="btn btn-sm btn-primary" onclick="signout();">Sign out</button>
      </div>
    </form>
  </div>
</nav>

</div>
<div class="container">
	<div class="row">
		<div clas="col-sm-12">
			<center><h2>All items to deliver</h2><br>
			<table class="table table-striped">
				<thead>
					<tr>
						<td>#</td>
						<td>Item name</td>
						<td>Item quantity</td>
						<td>Customer name</td>
						<td>Customer phone</td>
						<td>Customer address</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody id="order">
					
				</tbody>
			</table>
			</center>

		</div>
	</div>		
</div>

</body>
</html>

<script type="text/javascript">

	function deliveredyes(exdata)
	{
		var cust_name=exdata.substring(0,exdata.indexOf("&"));
		var item_name=exdata.substring(exdata.indexOf("&")+1,exdata.indexOf("/"));
		var item_quantity=exdata.substring(exdata.indexOf("/")+1,exdata.indexOf(":"));
		var cust_address=exdata.substring(exdata.indexOf(":")+1,exdata.indexOf("*"));

		alert(cust_name+cust_address+item_name+item_quantity+cust_address);

		$.ajax({
			url:'deliverydone.php',
			type:'POST',
			data:{
				cname:cust_name,
				iname:item_name,
				iquan:item_quantity,
				caddr:cust_address
			},
			success: function(result){
				loadorder();
			}

		});

	}

	function signout(){

	}

	loadorder();

	function loadorder()
	{
		$.ajax({
			url:'loaddeliveryorderpanel.php',
			type:'POST',
			data:{},
			success: function(result){
				$("#order").html(result);
			}

		});

	}

</script>
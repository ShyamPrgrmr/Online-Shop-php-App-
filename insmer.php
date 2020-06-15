<!DOCTYPE html>
<html>
<head>
	<title>Goorder</title>
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
<body>
<div class="container">
	<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8 form-group">
		<center><h2>Merchant sign up</h2></center>
		<label for="username">Enter username</label>
		<input type="text" name="user" id="username" class="form-control">
		<label for="password">Enter password</label>
		<input type="password" name="user" id="password" class="form-control">
		<label for="merchant">Enter shop owner name</label>
		<input type="text" name="mername" id="mername" class="form-control">
		<label for="shopname">Enter shop name</label>
		<input type="text" name="shopname" id="shopname" class="form-control">
		<label for="merchant">Enter email</label>
		<input type="text" name="email" id="email" class="form-control">
		<label for="merchant">Enter contact</label>
		<input type="text" name="contact" id="contact" class="form-control">
		<br>
		<center><button class="btn btn-primary" onclick="def();">Submit</button></center>
	</div>
	<div class="col-sm-2"></div>
	</div>
</div>
</body>
<script type="text/javascript">
	

function def()
{

	var shopname = document.getElementById("shopname").value;
	var mername=document.getElementById("mername").value;
	var email = document.getElementById("email").value;
	var contact =document.getElementById("contact").value;
	var use = document.getElementById("username").value;
	var pas=document.getElementById("password").value;

	$.ajax({ 
          url: 'insertmer.php',
          type: 'POST',
          data: {
          sname : shopname,
           mname : mername,
          ema : email,
          con :contact,
          user:use,
          pass:pas  
    },
    success: function(result)
    {
      
    }
});
	alert("Saved successfully");
}

</script>

</html>
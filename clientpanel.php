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
  	
  </style>
</head>


<?php
	session_start();
    $clientname = $_SESSION['clientname'];
?>


<body>
<div class="container">
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Welcome <?php echo $clientname; ?></a>
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
		<div class="col-sm-12">
			<div class="form-group">
			<input id="search" name="search" class="form-control" placeholder="Search item you want" style="margin-top: 10px;">
			<br>
    </div>

  </div>
      <table class="table table-striped">
          <thead>
            <td>#</td>
            <td>Merchant name</td>
            <td>Item name</td>
            <td>Item des.</td>
            <td>Item price</td>
            <td>Action</td>
          </thead>
          <tbody id="merchant">
            
          </tbody>

      </table>


      </div> 
		</div>
		</div>
	</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2"></div>
    
    <div class="col-sm-8" id="messages">
      
    </div>

    <div class="col-sm-2"></div>
  </div>
  </div>
</div>



</body>
<script type="text/javascript">
  var item_price=0;
  var item_name="";  
  var shop_id="";
  var shop_name=""; 
  
  function placeorder(){
    var item_quantity = document.getElementById("orquantity").value;
    var pri=document.getElementById("orprice").value;
      $.ajax({
        url:'placeorder.php',
        type:'POST',
        data:{
          name :item_name,
          shopid:shop_id,
          price:pri,
          quant:item_quantity
        },
        success: function(){
          alert("Order placed");
        }

      });
  }




  var k=0
   
   function ordernow(name){

        item_name = name.substring(0,name.indexOf("!"));
        item_price = name.substring(name.indexOf("!")+1,name.indexOf(">"));
        shop_id= name.substring(name.indexOf(">")+1,name.indexOf("@"));
        shop_name   = name.substring(name.indexOf("@")+1,name.indexOf("/")); 

        $("#messages").html("<center><h2>Order now</h2></center><div class='form-group'><label for='itemname'>Item name</label><input type='text' disabled id='oritemname' value='"+item_name+"' class='form-control'><label for='shopname'>Shop name</label><input disabled type='text' value='"+shop_name+"' id='orshopname' class='form-control'><label for='quantity'>Enter quantity</label><input type='text' id='orquantity' onfocusout='prizedefine();' value='1' class='form-control'><label for='Price'>Price</label><input type='text' disabled id='orprice' value='"+item_price+"' class='form-control'><div class='radio'><label style='margin:4px'><input type='radio' name='optradio' checked>Cash on delivery</label><label style='margin:4px' ><input type='radio' disabled name='optradio'>Paytm</label></div><br><center><button type='submit' id='myoreder' class='btn btn-primary' onclick='placeorder();'>Place Order</button></center></div>");

        document.getElementById('messages').scrollIntoView(true);
      k=0;
    }

    
    function prizedefine()
    {
      
      var pr = parseInt(document.getElementById("orquantity").value); 
      var acpr = parseInt(item_price);
      document.getElementById("orprice").value = pr*acpr; 
      
    }



  $(document).ready(function(){
  var i=0;
  $("#search").keydown(function(){
    i++;
    if(i>1)
    {
    var se = document.getElementById("search").value;
    $.ajax({
      url:'search.php',
      type:'POST',
      data:{dat:se},
      success: function(result)
      {
        $("#merchant").html(result);       
      }  
    });
  }
  
  });
});




function signout(){

$.ajax({
    url : 'signoutclient.php',
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
</html>



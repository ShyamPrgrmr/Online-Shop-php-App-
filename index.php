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
    .pl
    {
      border-radius: 25px;
      border: 2px solid #73AD21;
      padding: 20px;

    }  
  </style>

</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Goorder.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline">
      <div class="md-form my-0">
      
      </div>
    </form>
  </div>
</nav>
</div>

<div class="container pl ">
  <div class="row">
    <div class="col-sm-3 ">
      <center><h2>Login as merchant</h2></center>
      <div class="form-group">
        <label for="username">Enter username</label>
        <input type="text" name="merusername" id="merusername" class="form-control">
        <label for="password">Enter password</label>
        <input type="password" name="merpassword" id="merpassword" class="form-control">
        <br>
        <center><button class="btn btn-primary" onclick="mersign();">Sign in</button></center>
        <center><a href="insmer.php">Sign up! create new merchant account</a></center>
      </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
      <center><h2>Login as Delivery boy</h2></center>
      <div class="form-group">
        <label for="username">Enter username</label>
        <input type="text" name="username" id="delusername" class="form-control">
        <label for="password">Enter password</label>
        <input type="password" name="password" id="delpassword" class="form-control">
        <br>
        <center><button class="btn btn-primary" onclick="delsign();">Sign in</button></center>
      </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3">

      <center><h2>Login as customer</h2></center>
      <div class="form-group">
        <label for="username">Enter username</label>
        <input type="text" name="cuusername" id="cuusername" class="form-control">
        <label for="password">Enter password</label>
        <input type="password" name="cupassword" id="cupassword" class="form-control">
        <br>
        <center><button class="btn btn-primary" onclick="clisign();">Sign in</button></center>
        <center><a href="clientreg.php">Sign up! create new customer account</a></center>
      </div>
    </div>
  </div>
</div>
<div id="allresult">
</div>
</body>

<script >

  function delsign()
  {

   var use = document.getElementById("delusername").value;
    var pas = document.getElementById("delpassword").value;
    
    $.ajax({ 
          url: 'logindeli.php',
          type: 'POST',
          data: {
          usr : use,
          pwd : pas
          },
    success: function(result)
    {
      $("#allresult").html(result);
         var check = document.getElementById("msg2").value;
          if(check=="true")
          {
            window.open("deliverypanel.php","_self",false);
          }
          else
          {
            alert("Please check username or password");
          }
    }
      });

}


  function mersign()
  {
    var use = document.getElementById("merusername").value;
    var pas = document.getElementById("merpassword").value;
    
    $.ajax({ 
          url: 'loginmer.php',
          type: 'POST',
          data: {
          usr : use,
          pwd : pas
          },
    success: function(result)
    {
      $("#allresult").html(result);
         var check = document.getElementById("msg").value;
          if(check=="true")
          {
            window.open("merchantpanel.php","_self",false);
          }
          else
          {
            alert("Please check username or password");
          }
    }
});

}



  function clisign()
  {
    var use = document.getElementById("cuusername").value;
    var pas = document.getElementById("cupassword").value;
    
    $.ajax({ 
          url: 'clilogin.php',
          type: 'POST',
          data: {
          usr : use,
          pwd : pas
          },
    success: function(result)
    {
      $("#allresult").html(result);
         var check = document.getElementById("msg1").value;
          if(check=="true")
          {
            window.open("clientpanel.php","_self",false);
          }
          else
          {
            alert("Please check username or password");
          }
    }
});
}
</script>

</html>
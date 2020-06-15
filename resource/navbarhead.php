<html>



<head>	
  
</head>

<style type="text/css">
  
</style>

<body >
 	<nav class="navbar navbar-default navbar-fixed-top">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Saloon Management</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <div class="navbar-form navbar-right">
              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#SignOut">Sign Up</button>
            	<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#SignIn">Sign In</button>
          </div>
 
        </div>
    </nav>

   


<div class="modal fade" id="SignIn" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign In</h4>
        </div>


        <div class="modal-body">
          <div class="form-group">
          <label for="usr">Name:</label>
          <input type="text" class="form-control" id="cusr" title="Enter Username">
      </div>
      <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="cpwd" title="Enter Password">
      </div>


        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Sign in</button>
        </div>
      </div>
    </div>
    </div>




    <div class="modal fade" id="SignOut" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create New User</h4>
        </div>


        <div class="modal-body">
          <div class="form-group">
          
          <label for="sid">Shop Id:</label>
          <input type="text" class="form-control" id="sid" name="sid" disabled="true" title="Shop id" required>
          
          <label for="shop">Shop Name:</label>
          <input type="text" class="form-control" id="shop" title="Enter shop name" required> 

          <label for="mobile">Mobile Number:</label>
          <input type="number" class="form-control" name="mobile"  id="mobile" title="Enter mobile number" pattern="^[0-9]*$" required >

          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

          <label for="pwd">Retype Password:</label>
          <input type="password" class="form-control" id="rpwd" title="Retype correct password" required>

      </div>

        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="saveoperation();"  id="savebtn">Save
          </button>
        </div>
      </div>
    </div>
    </div>
<br>


</body>

</html>

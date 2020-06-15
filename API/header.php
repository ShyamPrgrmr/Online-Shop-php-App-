<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A platform where you can buy anything">
    <title>Goorder.com</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
</head>



<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Goorder.com</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>
                                        Saleem Khan
                                    </strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Order dilivered</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Abhi Mehta</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Customer signed on order</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Shivam Rathod</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterdy</em>
                                    </span>
                                </div>
                                <div>Complaint about late delivery..</div>
                            </a>
                        </li>
                         <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                </ul>     
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="loginpage.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                   
                </li>
               
            </ul>
          

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a onclick="dash();" href="#"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                            <script type="text/javascript">
                                        function dash()
                                            {
                                            $.ajax({
                                            url: 'API/dashboard.php',
                                            type: 'POST',
                                            data: { },                           
                                            success: function(result){
                                            $('#page-wrapper').html(result);
                                            }
                                            });
                                        }
                                    </script>
                        </li>
                        
                        <li>
                            <a href="#" onclick="or();"><i class="fa fa-table fa-fw"></i>Order list</a>
                        
                                        
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  href="#" onclick="Charts();">Graphs</a>
                                    <script type="text/javascript">
                                        function Charts()
                                            {
                                            $.ajax({
                                            url: 'API/charts.php',
                                            type: 'POST',
                                            data: { },                           
                                            success: function(result){
                                            $('#page-wrapper').html(result);
                                            }
                                            });
                                        }
                                    </script>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                  
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Actions</h1>
                </div>
                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Orders
                        </div>
                        <div class="panel-body">
                            <p>A complete list of orders and related actions</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary" onclick="or();">Click!</button>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Todays Activity
                        </div>
                        <div class="panel-body">
                            <p>A complete information about todays activity.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary">Click!</button>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Monthly Activity
                        </div>
                        <div class="panel-body">
                            <p>A complete information about monthly activity.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary">Click!</button>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Customers List
                        </div>
                        <div class="panel-body">
                            <p>Shows list about all happy customers.</p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary">Click!</button>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Manage product list
                        </div>
                        <div class="panel-body">
                            <p>
                            You can manage your online items to sell.
                            </p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary">Click!</button>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Other Actions
                        </div>
                        <div class="panel-body">
                            <p>Some other actions</p>
                        </div>
                        <div class="panel-footer">
                           <button class="btn btn-primary">Click!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

<script type="text/javascript">
                                        function or()
                                            {
                                            $.ajax({
                                            url: 'API/orderlist.php',
                                            type: 'POST',
                                            data: { },                           
                                            success: function(result){
                                            $('#page-wrapper').html(result);
                                            }
                                            });
                                        }
                                    </script>
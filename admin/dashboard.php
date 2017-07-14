<?php
require_once('valid.php');
if(empty($db_value)){
    $_SESSION['error'] = "Please login first";
    header("location:index.php");
}
?>
<!doctype php>
<php lang="en">
<head>
	<meta charset="utf-8" />

	<title>dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

    <div class="container-fluid" style="background: rgba(203, 203, 210, 0.15); height: 100vh; padding:  0!important;">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                           <a href="">
                                <img src="assets/img/<?php echo $db_value['media'];?> " width="30px" height="30px" style="border-radius: 100%; border: 1px solid #fff; margin-top: -5px">
                            </a>

                        </li>
                        <li>
                            <a href="#">
                            <?php echo $db_value['user']?>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
            <div class="row">
             <a href="usertable.php">
                <div class="col-md-6 col-md-offset-3">
                <div class="card ">
                            <div class="header">
                                <h4 class="title">User Table</h4>
                                </div>
                            <div class="content">
                            </div>
                        </div>
                    
                </div>
                </a>
             <a href="Newstable.php">
                  <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">News Table</h4>
                                <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="content">
                            
                            </div>
                        </div>
                    </div>
                    </a>
             <a href="Companytable.php">
                      <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Company Table</h4>
                                <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="content">
                            
                            </div>
                        </div>
                    </div>
                    </a>
             <a href="Categorytable.php">
                      <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Category Table</h4>
                                <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="content">
                            
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="sectiontable.php">
                      <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Section Table</h4>
                                <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="content">
                            
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>

    </div>
</div>

 <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

</body>

   


</php>

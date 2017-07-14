<?php
require_once('valid.php');
if(empty($db_value)){
    $_SESSION['error'] = "Please login first";
    header("location:index.php");

}

?>
<?php
 $id = $_GET['id'];
require_once('connection.php');
$dbcon = new Connection();
$dbcon->connect();
$result = $dbcon::$con->query("SELECT * FROM news_table WHERE id ={$id}");
$data = $result->fetch(PDO::FETCH_ASSOC);
?>
<!doctype php>
<php lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title></title>

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

    <div class="wrapper">
        <div class="sidebar">

            


            <div class="sidebar-wrapper" style="background-image: url('assets/img/sidebar-5.jpg');
            background-repeat: no-repeat; background-position: center; background-size: cover;">
            <div style="background: rgba(147,104,233,0.68); height: 100vh">
                <div class="logo">
                    <a href="#" class="simple-text">
                        NEWSMAG
                    </a>
                </div>

                <ul class="nav">
                   <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="usertable.php">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li>
                    <a href="Newstable.php">
                        <i class="pe-7s-note2"></i>
                        <p>News</p>
                    </a>
                </li>
                <li>
                    <a href="Companytable.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Company</p>
                    </a>
                </li>
                <li class="active">
                    <a href="Categorytable.php">
                        <i class="pe-7s-science"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li>
                    <a href="sectiontable.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>section</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Table List</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                       <a href="">
                         <img src="assets/img/<?php echo $db_value['media'];?>" width="30px" height="30px" style="border-radius: 100%; border: 1px solid #fff; margin-top: -5px">
                    </a>
                </li>
                <li>
                            <a href="#">
                                <?php
        echo ucfirst($db_value['user']);
    ?>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Category</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="function.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                    <select class="form-control" name="categoryname">
                        <option value="politics" <?php if($data['categoryname'] == 'politics'){ ?> selected <?php }?> >Politics</option>
                        <option value="sports" <?php if($data['categoryname'] == 'sports'){ ?> selected <?php }?> >Sports</option>
                        <option value="litrature" <?php if($data['categoryname'] == 'litrature'){ ?> selected <?php }?> >Litrature</option>
                        <option value="unique" <?php if($data['categoryname'] == 'unique'){ ?> selected <?php }?> >Litrature</option>
                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="ckeditor" class="form-control" rows="10"><?php echo $data['description']; ?></textarea>
                                    
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success" name="news_edit" value="edit">Update category</button>
                            <div class="clearfix"></div>
                        </form>
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
<script src="ckeditor/ckeditor.js"></script>
 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

</body>



</php>

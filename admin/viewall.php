<?php
$id = $_GET['id'];
require_once('connection.php');
$objs = new Connection();
$objs->connect();
$result = $objs::$con->query('SHOW FULL TABLES IN news WHERE `category=`category`');
$data = $result->fetch(PDO::FETCH_ASSOC);
if($result['category']=='sport'){
	$data;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> News </title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<h1 class="text-center"><?php echo $data['title']; ?></h1>
			<span>By <?php echo ucfirst($data['user']); ?></span>

			
			<a href="../frontend/index.php" class="btn btn-info"> Go back</a>

		</div>
	</div>
			<div class="row">
  <div class="col-md-12">
    <div class="thumbnail">
      
        <img src="../admin/assets/img/<?php echo $data['media'];?>" class="img-thumbnail" alt="Cinque Terre" width="700" height="700">
        <div class="caption">
          <p>
				<?php echo $data['description']; ?>


			</p>
        </div>
      
    </div>
  </div>
</div>
</div>
</body>
</html>
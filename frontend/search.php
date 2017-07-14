<?php
  require_once('../admin/connection.php');
  $frontend_part = new Connection();
  $frontend_part->connect();
  ?>
<!DOCTYPE html>
<html>
<title>NEWSMAG</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-teal">
<h1 style="text-align:center;">SEARCH RESULT</h1>
</div>

<div class="w3-content">
<div class="row">
            <?php
            $text = $_GET['searchText'];
            $search = $frontend_part::$con->query("SELECT * FROM news WHERE title LIKE '%$text%' ORDER BY `id` DESC ");
            while($searchdata =$search->fetch(PDO::FETCH_ASSOC)){
                ?>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="../admin/assets/img/<?php echo $searchdata['media'];?>" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2><?php echo $searchdata['title'];?></h2>
  <p><?php echo $searchdata['description']; ?></p>
</div>

</div>
<?php
}?>
</div>
</body>
</html>

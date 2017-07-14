
<?php

  if(isset($_COOKIE['username'])){
    $_SESSION['username'] = $_COOKIE['username'];
    header('location:dashboard.php');
  }
?>
<!-- Form Mixin-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
</div>
<div id="container">
  <h1>Log In</h1>

  <form action="loginvalidation.php" method="post">
<?php
  error_reporting(0);
   session_start();
 if(isset($_SESSION['error']))
  
 {
  ?>
   
   <h3 style="padding:5px; text-align:center;  font-family: 'Open Sans Condensed', sans-serif; font-size: 12px; color:#fff">
    <?php 
    
    echo $_SESSION['error']; 
      session_destroy();
      ?>
    </h3>

      <?php
       }
      
    ?>
    <input type="email" name="Name" placeholder="E-mail" required>
    <input type="password" name="mypsw" placeholder="Password" id="myPassword" onclick="mouseoverPass();" onmouseout="mouseoutPass();" required>
    <input type="submit" value="log in" class="login">
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" name="checkbox-remember" value="checked" />
      <span id="remember">Remember me</span>
      <span id="forgotten">Forgotten password</span>
    </div>
</form>
</div>

<!-- Forgotten Password Container -->
<div id="forgotten-container">
   <h1>Forgotten</h1>

  <form>
    <input type="email" name="email" placeholder="E-mail">
    <a href="#" class="orange-btn">Get new password</a>
</form>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
  function mouseoverPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "password";
}
</script>
<script type="text/javascript">
  // $('#login-button').click(function(){
  // $('#login-button').fadeOut("slow",function(){
    $("#container").fadeIn();
    TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
    TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
//   });
// });

/* Forgotten Password */
$('#forgotten').click(function(){
  $("#container").fadeOut(function(){
    $("#forgotten-container").fadeIn();
  });
});
</script>
</body>
</html>
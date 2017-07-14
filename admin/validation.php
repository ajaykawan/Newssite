<?php

  // require_once('connection.php');
  // error_reporting(0);
  // $validation = new Connection();
  // $validation->connect();

//   $nameError;
//   $pswError;
//   $numberError;
//   $emailError;
//   if(isset($_POST['user']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['image']) ){
//   if($_POST['set'] == 'add'){
//     if (!isset($_POST['user'])) {
//       $nameError = "Please enter your full name.";
//     } else if (strlen($_POST['user']) < 3) {
//       $nameError = "Name must have atleat 3 characters.";
//     } else if (!preg_match('/^[a-zA-Z0-9]+[.-_]*[a-zA-Z0-9]{5,15}$/',$_POST['user'])) {
//       $nameError = "Name must contain only letters or numbers at the beginning and end of the string and must have a length between 5-15 characters";
//     }

//     if (empty($_POST['password'])){
//       $pswError = "Please enter password.";
//     }else if (strlen($_POST['password']) <= 8) {
//       $pswError = "Name must have atleat 8 characters.";
//     }else if ((!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $_POST['password']))) {
//       $pswError = "must contain at least one lowercase char,one uppercase char,one digit and one special sign of @#-_$%^&+=§!?";
//     }

//     if (empty($_POST['number'])) {
//       $numberError = "Please enter your full name.";
//     } else if (strlen($_POST['number']) <= 10) {
//       $numberError = "Name must have atleat 10 characters.";
//     } 

// //email validation
//     if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//       $emailError = 'Please enter a valid email address';
//     } else {
//       $stmt ="SELECT * FROM `myuser` WHERE `email` ='".$_POST['email']."'";
//       $query = $validation::$con->query($stmt);
//       $rows = $query->fetch(PDO::FETCH_ASSOC);

//       if(!empty($rows['email'])){
//         $emailError = 'Email provided is already in use.';
//       }

//     }

//     if(empty($_FILES['image'])){
//       $imageError = 'plz select the image';

//     }else if (($_FILES["image"]["size"] > 500000)){
//       $imageError = "Sorry, your file is too large.";
//     }
    
//   }
    

// }
//   (isset($_POST['set']))
// {
//    $uname = trim($_POST['user']);
//    $umail = trim($_POST['email']);
//    $upass = trim($_POST['password']); 
//    $unum = trim($_POST['number']);
//    $uimg = trim($_POST['image']);
 
//    if($uname=="") {
//       $error[] = "provide username !"; 
//    }
//    else if($umail=="") {
//       $error[] = "provide email id !"; 
//    }
//    else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
//       $error[] = 'Please enter a valid email address !';
//    }
//    else if((!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $upass))) {
//       $error[] = "must contain at least one lowercase char,one uppercase char,one digit and one special sign of @#-_$%^&+=§!?";
//    }
//   else if($uimg==""){
//       $error[] = "provide email image !"; 
      
//       if (($_FILES["image"]["size"] > 500000)){
//       $error[]= "Sorry, your file is too large.";
//     }
//    }
//    else
//    {
//       try
//       {
//          $stmt = $validation::$con->prepare("SELECT user_name,user_email FROM users WHERE user_name=:uname OR user_email=:umail");
//          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
//          $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
//          if($row['user_name']==$uname) {
//             $error[] = "sorry username already taken !";
//          }
//          else if($row['user_email']==$umail) {
//             $error[] = "sorry email id already taken !";
//          }
//          else
//          {
//             if($user->register($fname,$lname,$uname,$umail,$upass)) 
//             {
//                 $user->redirect('sign-up.php?joined');
//             }
//          }
//      }
//      catch(PDOException $e)
//      {
//         echo $e->getMessage();
//      }
//   } 
// }
  ?>

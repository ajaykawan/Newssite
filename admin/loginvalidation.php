<?php 
require_once('connection.php');

$obj = new Connection();
$obj->connect();

	session_start();

	if(isset($_POST['mypsw']) && isset($_POST['Name'])){ 
		// $_SESSION['pass'] = $_POST['mypass'];

		
		//Retrieving data from database
		$sql = "SELECT * FROM  `myuser` WHERE `email` = '".$_POST['Name']."' AND password = '".sha1($_POST['mypsw'])."'";
		$query = $obj::$con->query($sql);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		/*$query = $obj::$con->prepare($sql);
		$a = $query->execute(array(":email"=>$_POST['Name'],":password"=>hash("SHA512",$_POST["MyPass"])));

			*/
		if($data)
		{
			$_SESSION['msg'] = 'success';
			$_SESSION['username'] = $data['email'];
			$_SESSION['password'] = $data['password'];
		
			if($_POST['checkbox-remember'] == 'checked')	
					{
						setcookie('username',$data['email'],time()+500);
						header('location:dashboard.php'); 
					}
			header('location:dashboard.php');	
		}
		else{
			header("location:index.php");
		    	$_SESSION['error'] = "Invalid Username or Password";
		}

		
	}
	
?>

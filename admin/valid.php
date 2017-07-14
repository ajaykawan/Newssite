<?php
require_once('connection.php');
session_start();


if(isset($_COOKIE['username'])){
	$userPass = $_COOKIE['username'];
	// $userPsw = $_COOKIE['password'];
}else{
	$userPass = $_SESSION['username'];
}
$objs = new Connection();
$objs->connect();
 
//Retrieving data from mysql_database(link_identifier)
			$sql = "SELECT * FROM  `myuser` WHERE `email` = '".$userPass."'";
			$query = $objs::$con->query($sql);
			$db_value = $query->fetch(PDO::FETCH_ASSOC);

?>
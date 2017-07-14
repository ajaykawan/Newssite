<?php
    session_start();
    require_once('Config.php');
    $Config = new Config();
    $Config->connect();
    $mySqlQuery = "SELECT * FROM `myuser` WHERE `username` = '".$_SESSION['username']."' AND `password` = '".$_SESSION['password']."'";
    $queryMe = $Config::$con->query($mySqlQuery);
    $db_session = $queryMe->fetch(PDO::FETCH_ASSOC);
?>
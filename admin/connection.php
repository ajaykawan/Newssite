<?php
class Connection{
	static $dbHost ='localhost';
	static $dbName ='user';
	static $dbusername ='root';
	static $dbpassword ='';
	static $con;

	static function connect(){
    try{
    	self::$con = new PDO("mysql:dbHost=".self::$dbHost.";dbname=".self::$dbName,self::$dbusername,self::$dbpassword);
    }catch(PDOException $e){
    	die($e->getMessage());
    }
	
	}
}
?>
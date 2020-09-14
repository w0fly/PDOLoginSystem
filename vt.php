<?php
	
	error_reporting(0);

	try {
	$db=new PDO("mysql:host=localhost;dbname=instaportfoy;charset=utf8",'root','');
	//$db=new PDO("mysql:host=localhost;dbname=villa;charset=utf8",'root','12345678');
	}
	catch (PDOExpception $e) {
		echo $e->getMessage();
	}
?>

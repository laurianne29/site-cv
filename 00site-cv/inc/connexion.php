<?php 

try{
	$bdd = new PDO('mysql:host=localhost;dbname=site-cv','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
}
catch(Excepetion $e){
	die('ERROR : ') . $e -> getMessage();
}



 ?>
<?php
	//Arquivo para conexão ao Banco de Dados	
	$driver = 'mysql';
	$host = 'localhost';
	$dbname = 'tp1';
	$user = 'root';
	$password = '';


	$db = new PDO ("$driver:host=$host;dbname=$dbname",$user,$password);
?>
<?php
	//Arquivo para conexão ao Banco de Dados	
	$driver = 'sqlserver';
	$host = 'hackathoncwb.database.windows.net';
	$dbname = 'hackathoncwb';
	$user = 'eduguedes';
	$password = '!1cderfv';


	$db = new PDO ("$driver:host=$host;dbname=$dbname",$user,$password);
?>
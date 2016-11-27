<?php
	//Arquivo para conexão ao Banco de Dados
	$driver = 'sqlsrv';
	$host = 'hackathoncwb.database.windows.net';
	$dbname = 'hackathoncwb';
	$user = 'eduguedes';
	$password = '!1cderfv';


	$db = new PDO ("$driver:Server=$host;Database=$dbname",$user,$password);
?>
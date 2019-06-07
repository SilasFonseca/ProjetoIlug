<?php

	//Database connection by using PHP PDO
	$username = 'root';
	$password = 'aluno';
	$database = 'mysql:host=localhost;dbname=ilug'
	$connection = new PDO($database, $username, $password ); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>

<?php
	$username = 'root';
	$password = 'aluno';
	$connection = new PDO('mysql:host=localhost;dbname=ilug', $username, $password ); 

	$nome = $_POST ['nome'];
	$email = $_POST ['email'];
	$senha = $_POST ['senha'];

	$query = ("insert into usuario(nome,email,senha) values('$nome','$email','$senha')");

	$user = $connection->query($query)->fetch();

	//var_dump($user);
	// echo $stmt;

	if ($user != 0) {
		echo "<h1>Conectado</h1>";
	} else {
	}

	exit;
  ?>
?>

</body>
</html>
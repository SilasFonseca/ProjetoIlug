<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>

<?php
session_start();

	$username = 'root';
	$password = 'aluno';
	$connection = new PDO('mysql:host=localhost;dbname=ilug', $username, $password ); 

	$nome = $_POST ['nome'];
	$email = $_POST ['email'];
	$senha = $_POST ['senha'];


	$sql = ("insert into usuario(nome,email,senha) values('$nome','$email','$senha')");

	$user = $connection->query($sql)->fetch();

	//var_dump($user);
	// echo $stmt;

	/*if ($user != 0) {
		echo "<h1>Conectado</h1>";
		$_SESSION['status_cadastrado'] == true;
		header("Location:login.php");
	}
	else{
		header("Location:register.php");
	}
	exit;*/
	
	if($user != 0):
   		$_SESSION['mensagem'] = "Ocorreu um erro durante o registo, por favor tente novamente";
   		header("location: register.php");
   exit();
	else:
	   $_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
	   header("location: register.php");
   exit();
endif;
?>

</body>
</html>
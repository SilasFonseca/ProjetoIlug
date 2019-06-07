  <?php	  
//PHP PDO
//Database connection by using PHP PDO
	$username = 'root';
	$password = 'aluno';
	$connection = new PDO('mysql:host=localhost;dbname=ilug', $username, $password ); 

  	if(empty($_POST['email']) || empty($_POST['subject'])) {
		header('Location:login.php');
		exit();
	}

	$email = $_POST['email'];
	$senha = $_POST['subject'];

	// echo "select id, usuario from usuario where EMAIL = $email and SENHA =$senha;";

	 $query = "select id, nome from usuario where email = '$email' and senha = '$senha';";
	// echo $query;

	$user = $connection->query($query)->fetch();

	//var_dump($user);
	// echo $stmt;

	if ($user != 0) {
		echo "<h1>Conectado</h1>";

		session_start();

		$_SESSION["usuario"] = $_POST["email"];

		header("Location:indexLogado.php");
	} else {
		header("Location:login.php");
	}

	exit;
  ?>
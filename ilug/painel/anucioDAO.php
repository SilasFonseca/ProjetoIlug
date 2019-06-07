<?php
//PHP PDO
//Database connection by using PHP PDO
	$username = 'root';
	$password = 'aluno';
	
	$connection = new PDO('mysql:host=localhost;dbname=ilug', $username, $password ); 


if(isset($_POST["action"])) 
{
 //For Load All Data
 if($_POST["action"] == "Load") 
 {
  $statement = $connection->prepare("SELECT * FROM imoveis ORDER BY id DESC");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = '';
  $output .= '
   <table class="table table-bordered">
    <tr>
     <th width="40%">Codigo</th>
     <th width="40%">Título</th>
	 <th width="40%">Descrição</th>
     <th width="10%">Ações</th>
     
    </tr>
  ';
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    $output .= '
    <tr>
     <td>'.$row["ID"].'</td>
     <td>'.$row["TITULO"].'</td>
	 <td>'.$row["DESCRICAO"].'</td>
     <td><button type="button" id="'.$row["ID"].'" class="btn btn-warning btn-xs update">Editar</button>
     <button type="button" id="'.$row["ID"].'" class="btn btn-danger btn-xs delete">Excluir</button></td>
    </tr>
    ';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td align="center">dados não encontrados</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 //This code for Create new Records
 if($_POST["action"] == "create")
 {
  $statement = $connection->prepare("
   INSERT INTO imoveis (TITULO, DESCRICAO, PRECO, LOCALIZACAO,  USER_ID) 
   VALUES (:TITULO, :DESCRICAO, :PRECO, :LOCALIZACAO,  :USER_ID )
  ");
  $result = $statement->execute(
   array(
    ':TITULO' => $_POST["TITULO"],
	':DESCRICAO' => $_POST["DESCRICAO"],
	':PRECO' => $_POST["PRECO"],
	':LOCALIZACAO' => $_POST["LOCALIZACAO"],
	':USER_ID' => 1
    
    
   )
  );
  if(!empty($result))
  {
   echo 'Dados inseridos com sucesso!';
  }
 }

 //This Code is for fetch single customer data for display on Modal
 if($_POST["action"] == "Select")
 {
  $output = array();
  $statement = $connection->prepare(
   "SELECT * FROM imoveis
   WHERE ID = '".$_POST["ID"]."' 
   LIMIT 1"
  );
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output["TITULO"] = $row["TITULO"];
   $output["DESCRICAO"] = $row["DESCRICAO"];
   $output["PRECO"] = $row["PRECO"];
   $output["LOCALIZACAO"] = $row["LOCALIZACAO"];
  }
  echo json_encode($output);
 }

 if($_POST["action"] == "Update")
 {
  $statement = $connection->prepare(
   "UPDATE imoveis 
   SET TITULO = :TITULO, DESCRICAO = :DESCRICAO, PRECO = :PRECO, LOCALIZACAO = :LOCALIZACAO 
   WHERE id = :id" );
  $result = $statement->execute(
   array(
    ':TITULO' => $_POST["TITULO"],
    ':DESCRICAO' => $_POST["DESCRICAO"],
	':PRECO' => $_POST["PRECO"],
	':LOCALIZACAO' => $_POST["LOCALIZACAO"],
    ':ID'   => $_POST["ID"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }

 if($_POST["action"] == "Delete")
 {
  $statement = $connection->prepare(
   "DELETE FROM imoveis WHERE ID = :ID"
  );
  $result = $statement->execute(
   array(
    ':ID' => $_POST["ID"]
   )
  );
  if(!empty($result))
  {
   echo 'Dados excluidos com sucesso';
  }
 }

}

?>
 
<?php

$operacao = $_GET['operacao'];

echo "<script>console.log('Operação: ' + " . $operacao . ");</script>";


$aluno_id = null;
$cd_nome_completo = null;
$cd_matricula = null;
$cd_periodo = null;


switch ($operacao) {
 	case 1: //Novo registro

 	break;

 	case 2: //Editar registro
 	require_once("conexao.php");
 	if (!$conn->connect_error){

 		$id = $_GET['id'];
 		echo "<script>console.log('Id: ' + " . $id . ");</script>";
 		
 		$sql = "SELECT aluno_id, matricula, nome,  periodo FROM aluno WHERE aluno_id = " . $id;
 		$result = mysqli_query($conn,$sql);
 		//if ($result->num_rows > 0) {
 		while($row = $result->fetch_assoc()) {
            $aluno_id = $row["aluno_id"];
            $cd_matricula = $row["matricula"];
 			$cd_nome_completo = $row["nome"];
 			$cd_periodo = $row["periodo"]; 
 		}
 	}
 	break;

 } 



 ?>
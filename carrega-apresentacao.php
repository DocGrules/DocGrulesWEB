<?php

$operacao = $_GET['operacao'];

echo "<script>console.log('Operação: ' + " . $operacao . ");</script>";


$apresentacao_id = null;
$cd_data = null;
$cd_resumo = null;
$cd_titulo = null;


switch ($operacao) {
 	case 1: //Novo registro

 	break;

 	case 2: //Editar registro
 	require_once("conexao.php");
 	if (!$conn->connect_error){

 		$id = $_GET['id'];
 		echo "<script>console.log('Id: ' + " . $id . ");</script>";
 		
 		$sql = "SELECT apresentacao_id, datahora, resumo, titulo FROM apresentacao WHERE apresentacao_id = " . $id;
 		$result = mysqli_query($conn,$sql);
 		//if ($result->num_rows > 0) {
 		while($row = $result->fetch_assoc()) {
            $apresentacao_id = $row["apresentacao_id"];
            $cd_data = $row["datahora"];
            $cd_resumo = $row["resumo"];
            $cd_titulo = $row["titulo"];
 		}
 	}
 	break;

 } 
 
 ?>
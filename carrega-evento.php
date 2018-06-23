<?php

$operacao = $_GET['operacao'];

echo "<script>console.log('Operação: ' + " . $operacao . ");</script>";


$evento_id = null;
$cd_semestre = null;
$cd_tema = null;


switch ($operacao) {
 	case 1: //Novo registro

 	break;

 	case 2: //Editar registro
 	require_once("conexao.php");
 	if (!$conn->connect_error){

 		$id = $_GET['id'];
 		echo "<script>console.log('Id: ' + " . $id . ");</script>";
 		
 		$sql = "SELECT evento_id, semestre, tema FROM evento WHERE evento_id = " . $id;
 		$result = mysqli_query($conn,$sql);
 		//if ($result->num_rows > 0) {
 		while($row = $result->fetch_assoc()) {
            $evento_id = $row["evento_id"];
            $cd_semestre = $row["semestre"];
 			$cd_tema = $row["tema"];
 		}
 	}
 	break;

 } 



 ?>
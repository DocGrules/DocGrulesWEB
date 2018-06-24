<?php
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT aluno_id, nome FROM aluno";
	$alunos = mysqli_query($conn,$sql);
}
?>
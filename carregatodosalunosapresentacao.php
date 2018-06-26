<?php
require_once("conexao.php");
$apresentacao_id = $_POST['id'];
if (!$conn->connect_error && $apresentacao_id != null){
	$sql = "SELECT aluno_id, nome FROM aluno WHERE aluno_id IN (SELECT aluno_id FROM alunos_apresentacao WHERE apresentacao_id = " . $id . ")";
	$alunos = mysqli_query($conn,$sql);
}
?>
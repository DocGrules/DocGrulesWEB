<?php
require_once("conexao.php");


$cd_matricula = $_POST['txtmatricula'];
$cd_nome_completo = $_POST['txtnome_completo'];
$cd_periodo = $_POST['txtperiodo'];

$aluno_id = null;
$aluno_id = $_POST['txtaluno_id'];

echo "<script>console.log('aluno_id = $aluno_id');</script>";


if($aluno_id == null){
    $sql = "INSERT INTO aluno (`matricula`, `nome`, `periodo`) VALUES ('$cd_matricula','$cd_nome_completo','$cd_periodo')";
	$operacao = 'Cadastrado';
}
else{
	$sql = "UPDATE aluno SET `matricula`='$cd_matricula',`nome`='$cd_nome_completo',`periodo`='$cd_periodo' WHERE `aluno`.`aluno_id` =" . $aluno_id . ";";
	echo "<script>console.log('$sql');</script>";
	$operacao = 'Atualizado';
}

$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'alunos.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'alunos.php';</script>";
}

?>
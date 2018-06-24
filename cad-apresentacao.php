<?php
require_once("conexao.php");


$cd_titulo = $_POST['txttitulo'];
$cd_resumo = $_POST['txtresumo'];
$cd_data = $_POST['txtdata'];


$apresentacao_id = null;
$apresentacao_id = $_POST['txtapresentacao_id'];

echo "<script>console.log('apresentacao_id = $apresentacao_id');</script>";


if($apresentacao_id == null){
    $sql = "INSERT INTO apresentacao (`datahora`, `resumo`, `titulo`) VALUES ('$cd_data','$cd_resumo', '$cd_titulo')";
	$operacao = 'Cadastrado';
}
else{
	$sql = "UPDATE apresentacao SET `datahora`='$cd_data',`resumo`='$cd_resumo', `titulo`='$cd_titulo' 
    WHERE `apresentacao`.`apresentacao_id` =" . $apresentacao_id . ";";
	echo "<script>console.log('$sql');</script>";
	$operacao = 'Atualizado';
}

$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'apresentacao.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'apresentacao.php';</script>";
}

?>
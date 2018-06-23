<?php
require_once("conexao.php");


$cd_tema = $_POST['txttema'];
$cd_semestre = $_POST['txtsemestre'];


$evento_id = null;
$evento_id = $_POST['txtevento_id'];

echo "<script>console.log('evento_id = $evento_id');</script>";


if($evento_id == null){
    $sql = "INSERT INTO evento (`semestre`, `tema`) VALUES ('$cd_semestre','$cd_tema')";
	$operacao = 'Cadastrado';
}
else{
	$sql = "UPDATE evento SET `semestre`='$cd_semestre',`tema`='$cd_tema' WHERE `evento`.`evento_id` =" . $evento_id . ";";
	echo "<script>console.log('$sql');</script>";
	$operacao = 'Atualizado';
}

$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'evento.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'evento.php';</script>";
}

?>
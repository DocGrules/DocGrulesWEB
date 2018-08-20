<?php
require_once('verificasessao.php');

?>

<?php include('head.php'); ?>

    <div class="page-header" align="center">
        <img src="img/logo.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Apresentação</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
    <div class="container" align="center">
	

<?php

echo "<table class='table'  style='margin-left: 50px; margin-right: 50px; width: 80%;'>";
echo "	<thead class='thead-dark'>";
echo "		<tr>";
echo "			<th>Titulo</th>";
echo "			<th>Data</th>";
echo "			<th>Resumo</th>";
echo "			<th style='width: 15px'></th>";
echo "			<th style='width: 15px'> <a href='cadastro-apresentacao.php?operacao=1' style='text-decoration: none; color: white;'> <button class='btn btn-success'> Nova Apresentação </button> </a> </th>";
echo "		</tr>";
echo "	</thead>";
echo "<tbody>";
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT apresentacao_id, datahora, resumo, titulo FROM apresentacao";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["titulo"]. " </td><td>" . $row["datahora"]. " </td><td>" . $row["resumo"]. " </td>
			<td style='text-align: right;'>
			<a href='cadastro-apresentacao.php?operacao=2&id=" .  $row["apresentacao_id"] . "'><i class='fas fa-edit'></i></a>
			</td>
			<td style='text-align: right;'>
			<a href='delete-apresentacao.php?id=" .  $row["apresentacao_id"] . "'><i style='color: red;' class='fas fa-trash'></i></a>
			</td>
			</tr>
			<td style='text-align: left;'>
			<a href='todosalunos.php?id=" .  $row["apresentacao_id"] . "'><i style='color: green;' class='fas fa-plus'></i></a>
			</td>
			</tr>";
		}
	} else {
		echo "<tr><td> -- </td><td>Sem dados para apresentar...</td><td> --- </td></tr>";
	}
	
}
$conn->close();
echo "	</tbody>";
echo "</table>";
?>

</div>
</div>

<?php include('footer.php'); ?>
<?php
require_once('verificasessao.php');

?>

<?php include('head.php'); ?>

    <div class="page-header" align="center">
        <img src="img/logo-doctum.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Aluno</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
    <div class="container" align="center">
	

<?php

echo "<table class='table'  style='margin-left: 50px; margin-right: 50px; width: 80%;'>";
echo "	<thead class='thead-dark'>";
echo "		<tr>";
echo "			<th style='width: 20px'>ID</th>";
echo "			<th>Nome</th>";
echo "			<th style='width: 15px'></th>";
echo "			<th style='width: 15px'> <a href='cadastro-aluno.php?operacao=1' style='text-decoration: none; color: white;'> <button class='btn btn-success'> Novo Aluno </button> </a> </th>";
echo "		</tr>";
echo "	</thead>";
echo "<tbody>";
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT aluno_id, nome FROM aluno";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["aluno_id"]. "</td><td>" . $row["nome"]. " </td>
			<td style='text-align: right;'>
			<a href='cadastro-aluno.php?operacao=2&id=" .  $row["aluno_id"] . "'><i class='fas fa-edit'></i></a>
			</td>
			<td style='text-align: right;'>
			<a href='delete-aluno.php?id=" .  $row["aluno_id"] . "'><i style='color: red;' class='fas fa-trash'></i></a>
			</td>
			</tr>";
		}
	} else {
		echo "<tr><td> -- </td><td>Sem dados para apresentar...</td></tr>";
	}
}
$conn->close();
echo "	</tbody>";
echo "</table>";
?>

</div>
</div>

<?php include('footer.php'); ?>
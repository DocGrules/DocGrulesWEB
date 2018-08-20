<?php
require_once('verificasessao.php');
//require_once('aluno-apresentacao.php');
?>

<?php include('head.php'); ?>

    <div class="page-header" align="center">
        <img src="img/logo.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Todos alunos</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
    <div class="container" align="center">




<form method="post" action="aluno-apresentacao.php">	

<?php

echo "<table class='table'  style='margin-left: 50px; margin-right: 50px; width: 80%;'>";
echo "	<thead class='thead-dark'>";
echo "		<tr>";
echo "			<th style='width: 20px'>ID</th>";
echo "			<th>Nome</th>";
echo "			<th>Matricula</th>";
echo "			<th>Periodo</th>";
echo "			<th style='width: 15px'></th>";

echo "		</tr>";
echo "	</thead>";
echo "<tbody>";
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT aluno_id, nome, matricula, periodo FROM aluno";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["aluno_id"]. "</td><td>" . $row["nome"]. " </td><td>" . $row["matricula"]. " </td><td>" . $row["periodo"]. " </td>
			<td style='text-align: right;'>
			<a href='cadastro-aluno.php?operacao=2&id=" .  $row["aluno_id"] . "'><input class='form-check-input' type='checkbox'>
			</td>
			</tr>";
			/* Estava depois do </td> --- <td style='text-align: right;'>
			<a href='delete-aluno.php?id=" .  $row["aluno_id"] . "'><i style='color: red;' class='fas fa-trash'></i></a>
			</td>*/
		}
	} else {
		echo "<tr><td> -- </td><td>Sem dados para apresentar...</td><td>---</td><td>---</td></tr>";
	}
}


$conn->close();
echo "	</tbody>";
echo "</table>";
?>

			<div class="form-group" align="center">
				<button type="submit" class="btn btn-lg btn-success"> 
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					Adicionar Alunos
				</button>

				<a href="apresentacao.php"> Cancelar
				</a>
			</div>

</div>
</div>
</form>

<?php include('footer.php'); ?>
<?php
require_once('verificasessao.php');

?>

<?php include('head.php'); ?>

    <div class="page-header" align="center">
        <img src="img/logo.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Evento</h1>
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
echo "			<th>Semestre</th>";
echo "			<th style='width: 15px'></th>";
echo "			<th style='width: 15px'> <a href='cadastro-evento.php?operacao=1' style='text-decoration: none; color: white;'> <button class='btn btn-success'> Novo Evento </button> </a> </th>";
echo "		</tr>";
echo "	</thead>";
echo "<tbody>";

	/* -- TENTANDO APLICAR O SOAP --
		$soapclient = new SoapClient('192.168.0.7:8080/grules-soap-sever/EventoWebService?wsdl');
		$response = $soapclient->loadAllEvento();
		
		//var_dump($response);



		 echo "<script>console.log('$response');</script>";*/
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT evento_id, tema, semestre FROM evento";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["evento_id"]. "</td><td>" . $row["tema"]. " </td><td>" . $row["semestre"]. " </td>
			<td style='text-align: right;'>
			<a href='cadastro-evento.php?operacao=2&id=" .  $row["evento_id"] . "'><i class='fas fa-edit'></i></a>
			</td>
			<td style='text-align: right;'>
			<a href='delete-evento.php?id=" .  $row["evento_id"] . "'><i style='color: red;' class='fas fa-trash'></i></a>
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
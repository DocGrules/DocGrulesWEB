<?php
require_once("conexao.php");
if (!$conn->connect_error){
	$sql = "SELECT evento_id, tema FROM evento";
	$eventos = mysqli_query($conn,$sql);
}
?>
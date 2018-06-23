<?php
	$conn = new mysqli("localhost", "root", "", "bd_biblio");

	if ($conn->connect_error){
		echo "<script type='text/javascript'>window.location.href = 'index.php'; alert('Não conectado.');</script>";
	}
?>
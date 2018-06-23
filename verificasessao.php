<?php
session_start();
if(!isset($_SESSION['nomeusu'])==true){
	session_unset($_SESSION['nomeusu']);
	header("Location:index.php");
}
?>
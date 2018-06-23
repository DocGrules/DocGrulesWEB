<?php
require_once("conexao.php");
$nm_livro = $_POST['txtnomelivro'];
$isbn = $_POST['txtisbn'];
$cd_categoria = $_POST['cd_categoria'];
$cd_editora = $_POST['cd_editora'];
//$cd_autor = $_POST['cd_autor'];
$nr_paginas = $_POST['txtnumpaginas'];

$cd_livro = null;
$cd_livro = $_POST['txtcdlivro'];

echo "<script>console.log('cd_livro=$cd_livro');</script>";

if ($cd_livro == null){
	$sql = "INSERT INTO tb_livro (nm_livro,       cd_categoria,    cd_editora,   nr_paginas,  isbn_livro) VALUES ('$nm_livro', '$cd_categoria', '$cd_editora', '$nr_paginas', '$isbn')";
	$operacao = 'Cadastrado';
}else{
	$sql = "UPDATE tb_livro SET `nm_livro` = '" . $nm_livro . "', `cd_categoria` = " . $cd_categoria . ",	`cd_editora` = " . $cd_editora . ", `nr_paginas` = " . $nr_paginas . ", `isbn_livro` = '" . $isbn . "' WHERE `tb_livro`.`cd_livro` =" . $cd_livro . ";";
	echo "<script>console.log('$sql');</script>";
	$operacao = 'Atualizado';
}

//echo $nm_livro . "<br/>";
//echo $isbn . "<br/>";
//echo $cd_categoria . "<br/>";
//echo $cd_editora . "<br/>";
//echo $nr_paginas . "<br/>";

$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'livros.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'livros.php';</script>";
}

?>
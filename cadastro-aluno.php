<?php
require_once('verificasessao.php');
$title = 'Cadastrar Aluno';
$currentPage = 'cadastro-aluno';
include('carrega-aluno.php');
?>

<?php include('head.php'); ?>


    <div class="page-header" align="center">
        <img src="img/logo-doctum.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Alunos</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
	

<div class="container">
	<div class="row">
		<h1> Cadastre-se</h1>
		<hr>
	</div>

	<form method="post" action="cad-aluno.php">

	<div class="row">
	<div class="col-md-9">
		<input input type="hidden" name="txtaluno_id" <?php echo "value=". $aluno_id . "" ?>>
			
			<div class="form-group">
				<label for="nome_completo">* Digite seu nome completo:</label>
				<input type="text" class="form-control" name="txtnome_completo" required="true" <?php if (!$cd_nome_completo == null) { echo "value='". $cd_nome_completo ."'";}; ?>>
				
			</div>
 
			<div class="form-group">
				<label for="matricula">* Matrícula:</label>
				<input type="text" class="form-control" name="txtmatricula" required="true" <?php if (!$cd_matricula == null) { echo "value='". $cd_matricula ."'";}; ?>>
				
            </div>
            
            <div class="form-group">
				<label for="periodo">* Periodo:</label>
				<input type="text" class="form-control" name="txtperiodo" required="true" <?php if (!$cd_periodo == null) { echo "value='". $cd_periodo ."'";}; ?>>
				
			</div>
 
 
			<div class="form-group" align="center">
				<button type="submit" class="btn btn-lg btn-success"> 
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					Enviar dados
				</button>

				<a href="alunos.php"> Cancelar
				</a>
			</div>
	
		</div>
	</div>
	</form>
</div>
</div>

<?php include('footer.php'); ?>
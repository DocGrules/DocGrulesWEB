<?php
require_once('verificasessao.php');
$title = 'Cadastrar Eventos';
$currentPage = 'cadastro-evento';
include('carrega-evento.php');
?>

<?php include('head.php'); ?>

    <div class="page-header" align="center">
        <img src="img/logo-doctum.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Evento</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
	

<div class="container">
	<div class="row">
		<h1> Cadastre-se</h1>
		<hr>
	</div>

	<form method="post" action="cad-evento.php">

	<div class="row">
	<div class="col-md-9">
		<input input type="hidden" name="txtevento_id" <?php echo "value=". $evento_id . "" ?>>
			
			<div class="form-group">
				<label for="tema">* Digite o tema do GRULES:</label>
				<input type="text" class="form-control" name="txttema" required="true" <?php if (!$cd_tema == null) { echo "value='". $cd_tema ."'";}; ?>>
				
			</div>
 
			<div class="form-group">
				<label for="semestre">* Semestre:</label>
				<input type="text" class="form-control" name="txtsemestre" required="true" <?php if (!$cd_semestre == null) { echo "value='". $cd_semestre ."'";}; ?>>
				
            </div>
 
 
			<div class="form-group" align="center">
				<button type="submit" class="btn btn-lg btn-success"> 
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					Enviar dados
				</button>

				<a href="evento.php"> Cancelar
				</a>
			</div>
	
		</div>
	</div>
	</form>
</div>
</div>

<?php include('footer.php'); ?>
<?php
require_once('verificasessao.php');
$title = 'Cadastrar Apresentação';
$currentPage = 'cadastro-apresentacao';
require_once('carrega-apresentacao.php');
?>

<?php include('head.php'); ?>

    <div class="page-header" align="center">
        <img src="img/logo-doctum.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Apresentação</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
	

<div class="container">
	

	<form method="post" action="cad-apresentacao.php">

	<div class="row">
	<div class="col-md-9">
		<input input type="hidden" name="txtapresentacao_id" <?php echo "value=". $apresentacao_id . "" ?>>
			
			<div class="form-group">
				<label for="tema">* Digite o titulo da apresentação:</label>
				<input type="text" class="form-control" name="txttitulo" required="true" <?php if (!$cd_titulo == null) { echo "value='". $cd_titulo ."'";}; ?>>
				
			</div>
 
			<div class="form-group">
				<label for="semestre">* Resumo da apresentação:</label>
				<input type="text" class="form-control" name="txtresumo" required="true" <?php if (!$cd_resumo == null) { echo "value='". $cd_resumo ."'";}; ?>>
				
            </div>

            <div class="form-group">
				<label for="semestre">* Data da apresentação:</label>
				<input type="date" class="form-control" name="txtdata" required="true" <?php if (!$cd_data == null) { echo "value='". $cd_data ."'";}; ?>>
				
            </div>

            <div class="row">
				<div class="col-sm-6">
				<label>Evento</label><br/>
				<select required="true" class="form-control" name="evento_id">
					<option value="null"> - Selecione um Evento - </option>
					
					<?php
					require_once('carregatodoseventos.php');
					if ($eventos->num_rows > 0) {
						while($rowcat = $eventos->fetch_assoc()) {

							if ($rowcat["evento_id"] == $evento_id){
								echo '<option value="' . $rowcat["evento_id"] . '" selected="true">' . $rowcat["tema"] . '</option>';
							}else{
								echo '<option value="' . $rowcat["evento_id"] . '">' . $rowcat["tema"] . '</option>';
							}
		
						}
					} 
					?>
				</select>
				</div>
			
				<!--<div class="col-sm-6">
				<label>Alunos</label><br/>
				<a href="todosalunos.php">Selecione os alunos</a>
				<select required="true" class="form-control" name="alunos_id" multiple="mltiple">
					<option value="null"> - Selecione os alunos da apresentação - </option> -->
					<?php
					/*
					require_once('carregatodosalunosapresentacao.php');
					if ($alunos->num_rows > 0) {
						while($rowedi = $alunos->fetch_assoc()) {

							if ($rowedi["aluno_id"] == $aluno_id){
								echo '<option value="' . $rowedi["aluno_id"] . '" selected="true">' . $rowedi["nome"] . '</option>';
							}else{
								echo '<option value="' . $rowedi["aluno_id"] . '">' . $rowedi["nome"] . '</option>';
							}

						}
					}
					*/
					?>
				</select>
				</div>
				
		</div>

		<br></br>
	
		</div>
	</div>
	<div class="form-group" align="center">
				<button type="submit" class="btn btn-lg btn-success"> 
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					Enviar dados
				</button>

				<a href="apresentacao.php"> Cancelar
				</a>
			</div>
	</form>
</div>
</div>

<?php include('footer.php'); ?>
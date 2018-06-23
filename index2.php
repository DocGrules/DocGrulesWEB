
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site GRULES 2018 &copy </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="print.css" type="text/css" media="print">
        <link href="css/font.css" rel="stylesheet">
        <link rel="stylesheet" href="lib\css\fontawesome-all.css" >

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="lib/css/login_biblio.css">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="img/logo-doctum.png">

</head>
<body background="img/5912.jpg" background-repeat="no repeat" class="img-responsive" class="bg_login">
	<section class="login">
		<div class="imagem_login">
			<img class="img_login" src="imagens/sisbiblio_transp.png" alt="SisBiblio" title="Logomarca Sistema Bibliotecário">
		</div>

		<form action="verificalogin.php" method="POST" class="form_login">
			<input type="email" name="txtusuario" placeholder="Digite aqui seu email" required="true">
			<input type="password" name="txtsenha" placeholder="Digite aqui sua senha" required="true">
			<button type="button" class="btn btn-primary">Acessar</button>
			<a class="senha" href="">Recuperar senha?</a>
		</form>
	</section>

</body>
</html>
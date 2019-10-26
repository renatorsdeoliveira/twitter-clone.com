<?php 

	// tratando o erro para que não seja mostrando quando não tiver na url
	$erro_usuario = isset($_GET['usuario_erro']) ? $_GET['usuario_erro'] : 0;
	$erro_email = isset($_GET['email_erro']) ? $_GET['email_erro'] : 0;


?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		<style>
			.erro{
				border: 1px solid #ff0000;
			}
		</style>
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Inscreva-se já.</h3>
	    		<br />
				<form method="post" action="models/registros.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text"  class="form-control <?= $erro_usuario == 1 ? 'erro' : 0; ?>" id="usuario" name="usuario" placeholder="Usuário" required="requiored" >
						<?php
							if($erro_usuario == 1){
								echo '<font color="#ff0000" >Usuário já existe</font>';
							}
						?>
					</div>

					<div class="form-group">
						<input type="email" class="form-control <?= $erro_email == 1 ? 'erro' : 0; ?> " id="email" name="email" placeholder="Email" required="requiored">
						<?php
							if($erro_email == 1){
								echo '<font color="#ff0000" >E-mail já existe</font>';
							}
						?>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
	
	</body>
</html>
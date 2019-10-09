<?php 

	// tratando o erro para que não seja mostrando quando não tiver na url
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Twitter clone</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script>
			// $(document).ready(function(){
			// 	$('#btn_login').click(function(){
			// 		alert("passou")
			// 	});
			// });
		</script>
	</head>

	<body>

	    <nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="http://localhost/twitter-clone.com/">
						<img src="imagens/icone_twitter.png" />
					</a> 
				</div>
	        
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="inscrevase.php">Inscrever-se</a></li>
						<li class="<?= $erro == 1 ? 'show' : '' ;?>">
							<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="<?= $erro == 1 ? 'true' : 'false' ; ?>">Entrar</a>
							<ul class="dropdown-menu <?= $erro == 1 ? 'show' : ''; ?>" aria-labelledby="entrar">
								<div class="col-md-12">
									<p>Você possui uma conta?</h3>
									<br />
									<form method="post" action="models/validar.php" id="formLogin">
										<div class="form-group">
											<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
										</div>
										
										<div class="form-group">
											<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
										</div>
										
										<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

										<br /><br />

										<?php if($erro == 1){
											echo '<font color="#ff0000" >Usuario ou senha não encontrados</font>';
											};?>
										
									</form>
								</div>
							</ul>
						</li>
					</ul>
				</div>
	      	</div>
	    </nav>


	    <div class="container">
	      <div class="jumbotron">
	        <h1>Bem vindo ao twitter clone</h1>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>
	      <div class="clearfix"></div>
		</div>
	
		<script src="javascript/script.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
	
	</body>
</html>
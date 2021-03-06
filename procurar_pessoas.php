<?php session_start();
	if(!isset($_SESSION['usuario'])){
		header('Location: http://localhost/twitter-clone.com/index.php?erro=1');
	}
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
		<script>
			let urlPagina = ''; // variavel para pegar o url da página
		</script>
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
	            <li><a href="http://localhost/twitter-clone.com/home.php">Home</a></li>
	            <li><a href="http://localhost/twitter-clone.com/sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


		<div class="container">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><?= $_SESSION['usuario'] ?></h4>
						<hr />
						<div class="col-md-6">
							TWEETS <br /> 1
						</div>
						<div class="col-md-6">
							SEGUIDORES <br /> 1
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="" method="post" id="form_procurar_pessoas" class="input-group">
								<input type="text" id="nome_pessoa" name="nome_pessoa" class="form-control" placeholder="Quem você está procurando?" maxlength="140" />
								<span class="input-group-btn">
									<button class="btn btn-default" id="btn_procurar_pessoas" type="button">Procurar</button>
								</span>
						</form>
					</div>
				</div>

				<div id='pessoas' class="list-group"></div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><a href="#"></a></h4>
					</div>
				</div>
			</div>
		</div>


	    </div>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
		<script src="javascript/script.js?<?php echo date('His')?>"></script>
	
	</body>
</html>
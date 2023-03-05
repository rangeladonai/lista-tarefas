<?php ?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>
		<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="/">Tarefas pendentes</a></li>
						<li class="list-group-item active"><a href="/tarefas/nova">Nova tarefa</a></li>
						<li class="list-group-item"><a href="/tarefas">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova tarefa</h4>
								<hr />

								<form action="INSERIR TAREFA" method="post">
									<div class="form-group">
										<label>Titulo</label>
										<input type="text" class="form-control" name="titulo" placeholder="Exemplo: Lavar o carro" required>
										<br>
										<label>Descrição da tarefa:</label>
										<input type="text" class="form-control" name="desc" placeholder="Exemplo: Usar balde com agua, detergente & esponja" required>
									</div>
									<button class="btn btn-success" type="submit" id="btn-cadastrar">Cadastrar</button>
								</form>
								<h4 id="salvo">Salvo com sucesso!</h4>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<script>
	$('#salvo').hide();
</script>
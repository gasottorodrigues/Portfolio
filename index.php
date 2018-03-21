<!DOCTYPE html>

<html lang='pt-br'>
	
	<head>
		<meta charset="UTF-8"/>
		<title>portifolio - cadastro de atividade</title>
		<link rel="stylesheet" href="_css/interface.css"/>
		<link rel="stylesheet" href="_css/form.css"/>
	</head>
	
	<body>

		<header class="cabecalho">
			<h1>WEBSOTTO</h1>
			<nav>
					<div id="guardar">
						<a href="index.php"><img src="_img/saveiconsel.png"></a>
					</div>

					<div id="listar">
						<a href="list-portfolio.php"><img src="_img/listicon.png"></a>
					</div>
			</nav>
		</header>
			
		<div class="subtitle">
			<h1>MEU PORTFÓLIO</h1>
		</div>

		<div class="main-container">
			<div class="form-container">
				<h2>Formulário de registro de atividade</h2>
				
				<form action="database.php" method="post" enctype="multipart/form-data">
					<p>
						<label><span>*</span> Nome:</label>
						<input type="text" name="nome" required="required"/>
					</p>
					<p>
						<label><span>*</span> Link:</label>
						<input type="text" name="link" requried="required"/>
					</p>
					<p>
						<label><span>*</span> Descrição (máximo 200 caracteres):</label>
						<textarea maxlength="200" name="desc" required></textarea>
					</p>
					<p>
						<label><span>*</span> Data:</label>
						<input type="date" name="data" required="required"/>
					</p>
					
					<p>
						<label id="uploader" for="arquivo"> Escolher arquivo Arquivo RAR </label>
						<input type="file" name="uploadZip" required id="arquivo"/>
					</p>
					<input type="submit" value="Registrar Atividade"/>
				</form>
			</div>
		</div>
	</body>
	
</html>
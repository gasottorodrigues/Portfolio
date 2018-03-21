<!DOCTYPE html>

<html lang='pt-br'>

	<head>
		<meta charset="UTF-8"/>
		<title>portifolio - cadastro de atividade</title>
		<link rel="stylesheet" href="_css/interface.css"/>
		<link rel="stylesheet" href="_css/table.css"/>
	</head>
	
	
	<body>
		<header class="cabecalho">
			<h1>WEBSOTTO</h1>
			<nav>
					<div id="guardar">
						<a href="index.php"><img src="_img/saveicon.png"></a>
					</div>

					<div id="listar">
						<a href="list-portfolio.php"><img src="_img/listiconsel.png"></a>
					</div>
			</nav>
		</header>
			
		<div class="subtitle">
			<h1>MEU PORTFÓLIO</h1>
		</div>
			
		<div class="arquivos">
					<?php
						if(file_exists("_db/ptfdatas.xml")){

							$r = array( rand(50,255), rand(50,255), rand(50,255) );
							$xml = simplexml_load_file("_db/ptfdatas.xml");
						
							foreach($xml->children() as $ptf){
								echo"<div>";
									echo"<h2 style=\"background-color:rgb(".$r[0].",".$r[1].",".$r[2].");\"><img src=\"_img/foldericon.png\"/></h2>";
										echo"<section>";
											echo"<h3><a href=\"$ptf->url\">$ptf->nome</a></h3>";
											echo"<p class=\"data\">$ptf->data</p>";
											if(isset($ptf->desc)){
												echo"<p class=\"desc\">$ptf->desc</p>";
											}
											echo"<p><a href='$ptf->arquivo' download>Clique aqui para baixar</a></p>";
										echo"</section>";
								echo"</div>";

								$r[0] -= 25;
								$r[1] -= 25;
								$r[2] -= 25;
							}
							
							
						}else{
							header("Location:index.php");
						}
					?>
		</div>
	</body>
	
</html>
<?php

	$nome	= $_POST["nome"];
	$link	= $_POST["link"];
	$desc	= $_POST["desc"];
	$data	= $_POST["data"];
	
		if(isset($_FILES["uploadZip"])){
			date_default_timezone_set("Brazil/East");
			
			$ext = strtolower(substr($_FILES['uploadZip']['name'],-4));
			$novoNome = date("Y.m.d-H.i.s"). $ext;
			$pasta = '_uploads/';
			$arquivo = $pasta.$novoNome;
			
			move_uploaded_file($_FILES['uploadZip']['tmp_name'], $arquivo);
		}else{
			header("Location:index.php");
		}
		
		
		
		if(!file_exists("_db/ptfdatas.xml")){
			$xml = 
"<?xml version = '1.0' encoding = 'utf-8' ?>

	<portifolio>
		<atividade>
			<nome>$nome</nome>
			<url>$link</url>
			<data>$data</data>
			<desc>$desc</desc>
			<arquivo>$arquivo</arquivo>
		</atividade>	
	</portifolio>
";

		file_put_contents("_db/ptfdatas.xml", $xml);
		}else{
			$xml = simplexml_load_file("_db/ptfdatas.xml");
			
			
			$att
			= $xml->addChild("atividade");
			
			$att->addChild("nome", $nome);
			$att->addChild("url", $link);
			$att->addChild("data", $data);
			$att->addChild("desc", $desc);
			$att->addChild("arquivo", $arquivo);
			
			file_put_contents("_db/ptfdatas.xml", $xml->asXML());
		}
	header("Location:list-portfolio.php");

	
?>
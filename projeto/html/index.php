<?php
	require("config/config.php");
	require("config/crud.php");
?>

<html>
<head>
<meta charset="utf-8">
<title>mjailton</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="conteudo">	
	<div class="base-central">	

	<?php include "cabecalho.php" ?>
	
	<?php include "menu.php" ?>

	<?php
			@$link = $_GET["link"]; // variavel recebe "link" do array GET
			$pag[1] = "home.php"; // esses sao os links das paginas
			$pag[2] = "frm/frm_cliente.php"; 
			$pag[3] = "lst/lst_cliente.php";
			
			if(!empty($link)){ //nao se  tiver vazio ele cria a pagina , se nao abre o "home"
				if(file_exists($pag[$link]))
					include $pag[$link];
				
				else
					include "home.php";
			} else
				include "home.php";
		
	?>
		
	<?php include "rodape.php" ?>

	</div>	
</div>		
</body>
</html>
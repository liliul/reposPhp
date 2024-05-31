<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Como carregar páginas dentro de outra utilizando o PHP</title>
	<style type="text/css"> 
	*{margin: 0; padding: 0; }
	.contener{font-family: verdana; font-size: 15pt; color: #000; background-color: #ddd; z-index: 10;}
	.contener{width: 100%; height: 56px; border: 1px solid #000; margin-bottom: 50px;}
	.barra-fixa{top:0; position: fixed; margin-bottom: 40px; }
	a{padding: 10px; margin: 20px; margin-top: 10px; }
	ul{background-color: rgba(2, 255, 0, 0.2); cursor: pointer; transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1);}

	</style>
</head>
<body>
	<div class="contener">
		<div class="barra-fixa">
			<ul>
				<a href="index.php?p=pagina1.php" title="todas as temporada de naruto">Temporadas</a>
				<a href="index.php?p=pagina2.php">Temas de naruto</a>
				<br>
			</ul>
		</div>

	</div>

	<?php
		$valor = @$_GET['p'];
		
		if ($valor == 'pagina1.php') { require_once 'pagina1.php';} 
			
		if ($valor == 'pagina2.php') { require_once 'pagina2.php';}
			
			
	?>
	
</body>
</html>

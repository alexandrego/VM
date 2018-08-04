<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8"/>
<meta name="description" content="<?php echo $descricao?>" />
<meta name="keywords" content="<?php echo $keywords?>" />

<!--author - o nome do autor da página.-->
<meta name="autor" content="<?php echo $autor?>" />

<!-- Ícone da página -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Viewport informa ao dispositvo que a escala inicial do layout é equivalente ao tamanho do mesmo. -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Formatação da página -->
<link href="estilo.css" rel="stylesheet" type="text/css" />

<!-- Titulo da [ágina -->
<title><?php echo $titulo.' | '.ucwords($pagina) ?></title>
</head>

<body>

		<div id="container"> <!--Conteudo do site!-->
		<!-- Siga-nos.: <a target="_blank" href="#">
		<img src ="<?php echo $facebook ?>" alt="<?php echo $empresa ?>" width="15" height="15" border="0" /></a>
		<div id="alex">Alexandre Campos Gonçalves</div> -->

		<div id="header"> <!--Primeira header da pagina!-->

			<img id="logoImg" src="<?php echo $logoVM ?>" />

		<div id="cabecalho">
			<nav class="men">
				<ul class="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="#produtos">Produtos</a></li>
						<li><a href="#servicos">Serviços</a></li>
					<li><a href="<?php echo '?p=empresa' ?>">Empresa</a></li>
					<li><a href="faleconosco.php">Contato</a></li>
				</ul>
			</nav>
		</div>

		</div> <!--header-->

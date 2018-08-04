<!DOCTYPE html>
<html lang="pt-br">

<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('variaveis.php');
$p = $_GET['p'];
if (empty($p)){
	$pagina = 'home';
} else {
	$pagina = $p;
}
if (!file_exists('pag/'.$pagina.'.php')) {
	$pagina = 'Página não encontrada!';
}
include('header.php');
include('logo.php');
?>

		<div id="conteudo">
	<?php
		if (file_exists('pag/'.$pagina.'.php')){
			include("pag/$pagina.php");
		} else {
		echo "A página que você tentou acessar não existe!";
		}
		?>
		</div><!-- conteudo -->

<?php
include('menu.php');
include('footer.php');
?>

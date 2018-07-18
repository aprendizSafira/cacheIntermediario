<?php
//Salvar a variavel $html num cache
//Verifica se existe cache
if(file_exists("cache.cache")) {
	require "cache.cache";
} else {
	//Se não existir cache é necessario fazer processamento
	ob_start();//Tudo que estiver dentro desses dois Ñ vai ser mostrado para o usuario, vai ser salvo na memoria
	require 'pagina.php';

	$html = ob_get_contents();
	ob_end_clean();

	//Criação do Cache
	file_put_contents("cache.cache", $html);

	echo $html;
}


?>
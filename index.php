<?php
ob_start();//Tudo que estiver dentro desses dois Ñ vai ser mostrado para o usuario, vai ser salvo na memoria
require 'pagina.php';

$html = ob_get_contents();
ob_end_clean();
?>
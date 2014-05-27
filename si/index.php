<?php
include_once'template.php';

$tplC = file_get_contents("conteudo.tpl");
$conteudo= str_replace("_Title_", "", $tplC);

   $conteudo= str_replace("_Conteudo_", file_get_contents('form1.tpl'), $conteudo);

$tplM = str_replace("_Conteudo_", $conteudo, $tplM);


print $tplM;
?>
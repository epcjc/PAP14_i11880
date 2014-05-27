<?php
include_once'template.php';

$tplC = file_get_contents("conteudo.tpl");
$conteudo= str_replace("_Title_", "Contactos", $tplC);

if(isset($_POST['Nome'])){
   $_dados .= 'O Seu Nome:'.$_POST['Nome'].'<br>';
   $_dados .= 'O Seu Email:'.$_POST['Email'].'<br>';
   $_dados .= 'O Seu Telefone:'.$_POST['Contacto'].'<br>';
   $_dados .= 'Assunto:'.$_POST['Assunto'].'<br>';
   $_dados .= 'Mensagem:'.$_POST['Mensagem'].'<br>';
   $conteudo= str_replace("_Conteudo_", $_dados, $conteudo);
}else{
   $conteudo= str_replace("_Conteudo_", file_get_contents('form2.tpl'), $conteudo);
}

$tplM = str_replace("_Conteudo_", $conteudo, $tplM);


print $tplM;
?>
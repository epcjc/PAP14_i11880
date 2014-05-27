<?php
include_once'valida.php';
include_once 'template.php';

$tplC = file_get_contents("conteudo.tpl");
$conteudo= str_replace("_Title_", "Upload Ficheiros", $tplC);

if(isset($_FILES['img0'])){
   //trabalhar o ficheiro
   if ($_FILES['img0']['error'] !=0)
       $tplC = "Ocorreu um erro no envio do ficheiro! Tente novamente.";
   else
       move_uploaded_file ($_FILES['img0']['tmp_name'], dirname(__FILE__)."/upl/".$_FILES['img0']['name']);
       $tplC= "Ficheiro ".$_FILES['img0']['name']. " Enviado Com Sucesso.";
} else {
   $tplC = file_get_contents("upload.tpl");
}

$tplM = str_replace("_Conteudo_", $tplC, $tplM);


print $tplM;

?>

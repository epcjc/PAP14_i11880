<?php
//include_once 'valida.php'; Acesso Publico
include_once'valida.php';
include_once'template.php';
$tplCL = file_get_contents("linha_galeria.tpl");
$tplC = "";
$dir = dirname(__FILE__)."/upl/";
clearstatcache();

//Open a Know directory and proceed to read it´s contents

if(is_dir($dir)){
    if($dh = opendir($dir)) {
        while(($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..' ){
               $parts = explode(".", $file);
                 if (strtolower(end($parts))=='jpg'){
                 $ll = str_replace("#src", "upl/".$file,$tplCL);
                 $tplC .= $ll ;
                } 
             } 
        }
        closedir($dh);
        $tplC = str_replace("#lista",$tplC,  file_get_contents("galeria.tpl"));
     
    }
}


$tplM = str_replace("_Conteudo_", $tplC, $tplM);


print $tplM;

?>

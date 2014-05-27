<?php
$tplM = file_get_contents("main.tpl");
$tplMenu = file_get_contents("menu.tpl");

$menuItems = array(
    'index.php' => 'P&aacute;gina  Principal',
    'upload.php' => 'Upload Ficheiros',
    'filemanager.php' => 'Gerir Ficheiros',
    'galeria.php' => 'Galeria Ficheiros',
    'contacto.php' => 'Contactos',
    'login.php' => 'Iniciar Sessão',
    'logout.php' => 'Sair',);

$menu="";
foreach ($menuItems as $key => $value) {
    $tmp = str_replace("_URL_", $key, $tplMenu);
    $tmp = str_replace("_Nome_", $value, $tmp);
    $menu .=$tmp;
}
$tplM = str_replace("_Menu_", $menu, $tplM);

?>

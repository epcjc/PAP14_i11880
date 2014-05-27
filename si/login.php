<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['cargo'] )){
    //redirecionar para pagina de login
    include_once 'cfg.php';
    include_once 'template.php';
    $tplM= str_replace("_Conteudo_", file_get_contents('login.tpl'), $tplM);
    $link = mysql_connect($_cfg['mySrv'], $_cfg['myUser'], $_cfg['myPw']) or die ('Ocorreu o seguinte erro na ligacao a base de dados <br/>'.mysql_error);
    mysql_select_db($_cfg['myBD']);
    if(isset($_POST['Nome'])){
        $res = mysql_query('select cargo from utilizadores where user=\''.$_POST['Nome'].'\' and pw=\''.sha1($_POST['Password']).'\';',$link);
        if($res != null && mysql_num_rows($res)>0)
        {
            $tplM= str_replace("_Conteudo_", 'Bem-Vindo !', $tplM);
            $_SESSION ['username'] = $_POST['Nome'];
            $_SESSION ['cargo'] =mysql_result($res,0,'cargo');
        } else {
            $tplM= str_replace("_Conteudo_", 'Utilizador ou Chave Inv&aacute;lida!', $tplM);
    }       
    } else {
        $tplM= str_replace("_Conteudo_", '', $tplM);
    }

    $tplM= str_replace("_Conteudo_", '', $tplM);

print $tplM;
} else {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");
    //echo "<script> window.location='index.php' </script>";
}
?>

<?php include ("check.php"); ?>

<?php include ("../config.inc.php"); ?>

<?php
$conn = mysql_connect($host, $user, $pass) or die ("dados incorrectos");
$database = mysql_select_db($db, $conn) or die ("bd errada");
?>

<?php

if ($_POST["action"]=="inserir")
	{

	$imagem_name = $_FILES['imagem']['name'];
	$imagem_tmpname = $_FILES['imagem']['tmp_name'];
	if ($imagem_tmpname!="")
		{
		$file_ext = substr ($_FILES['imagem']['name'],strlen($_FILES['imagem']['name'])-3,3);
		$rnd = date("dmyHis");
		$imagem_name = "cliente-" . $rnd . "." . $file_ext;
		copy($imagem_tmpname,"../imagens/".$imagem_name);
		}
	
	$action_script = mysql_query("
	
INSERT INTO 
  `dados`
(
  `id`,
  `nome`,
  `cargo`,
  `morada`,
  `imagem`,
  `sexo`,
  `idade`,
  `estadocivil`,
  `email`
) 
VALUE (
  '',
  '$_POST[nome]',
  '$_POST[cargo]',
  '$_POST[morada]',
  '$imagem_name',
  '$_POST[sexo]',
  '$_POST[idade]',
  '$_POST[estadocivil]',
  '$_POST[email]'
);	
	
	
	
	
	
	
	
	");

	$message = "Produto inserido correctamente";

	}

if ($_POST["action"]=="alterar")
	{

	$imagem_name = $_FILES['imagem']['name'];
	$imagem_tmpname = $_FILES['imagem']['tmp_name'];
	if ($imagem_tmpname!="")
		{
		$file_ext = substr ($_FILES['imagem']['name'],strlen($_FILES['imagem']['name'])-3,3);
		$rnd = date("dmyHis");
		$imagem_name = "cliente-" . $rnd . "." . $file_ext;
		copy($imagem_tmpname,"../imagens/".$imagem_name);

		$qimagem = ",imagem='$imagem_name'";

		}

	$action_script = mysql_query("	
	
	
	UPDATE 
  `dados`  
SET 
  `nome` = '$_POST[nome]',
  `cargo` = '$_POST[cargo]',
  `morada` = '$_POST[morada]',
  `imagem` = '$imagem_name',
  `sexo` = '$_POST[sexo]',
  `idade` = '$_POST[idade]',
  `estadocivil` = '$_POST[estadocivil]',
  `email` = '$_POST[email]'
 
WHERE 
  `id` = '$_POST[id]'
;
	
	
	");

	$message = "Produto alterado correctamente";

	}

if ($_POST["action"]=="apagar")
	{

	$action_script = mysql_query("delete from  dados where id='$_POST[id]'");

	$message = "Produto eliminado correctamente";
	}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Inscrições para Xpto</title>
<link href="../modelo.css" rel="stylesheet" type="text/css">

<script language="JavaScript" type="text/JavaScript">
<!--
function Delete_Confirm()
	{
	var agree1=confirm("Tem a certeza que deseja eliminar o registo?\nEsta operação não tem retorno.");
	if (agree1)
		return true ;
	else
		return false ;
	}
//-->
</script>

</head>

<body>

<table width="600" height="300" border="0" align="center" cellpadding="8" cellspacing="1" background="../imgs/bk-title.gif">
  <tr>
    <td align="center" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200"><span class="white"><img src="admin_logo.png" alt="" ></span></td>
        <td align="center" class="white"><?php include ("menu.php"); ?></td>
      </tr>
    </table>
        <br>
			
		<table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="200" bgcolor="#FFFFFF" height="1"></td>
          </tr>
        </table>
      <br>
      <table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td align="center" class="white"><?php echo $message; ?></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>

<?
function redirect($url, $delay=0)
	{
	echo "<meta http-equiv='Refresh' content='$delay; url=$url'>";
	}

redirect("listacli.php");
?>
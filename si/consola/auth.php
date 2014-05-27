<?php
session_start();

include ("../config.inc.php");

$conn = (mysql_connect($host, $user, $pass))
 or (die('Não foi possível conectar: '));



$database = mysql_select_db($db, $conn) or die ("bd errada");


$utilizadorlogado = '$_POST[utilizador]';
    $line_user = mysql_query("select * from utilizadores where username='$_POST[utilizador]' AND password='$_POST[senha]'");
$numero_linhas = mysql_num_rows($line_user);

//echo $_POST["utilizador"]; echo "--";

if ($numero_linhas<1)
	{
	$_SESSION["utilizador_valido"] = "";
	redirect("index.php?e=1");
	}
else
	{
	$_SESSION["utilizador_valido"] = $_POST["utilizador"];
	redirect("listacli.php");
	}

$res = mysql_close($conn);

function redirect($url, $delay=0)
	{
	echo "<meta http-equiv='Refresh' content='$delay; url=$url'>";
	}
?>
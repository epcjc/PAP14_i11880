<?php include ("check.php"); ?>

<?php include ("../config.inc.php"); ?>

<?php
$conn = mysql_connect($host, $user, $pass) or die ("dados incorrectos");
$database = mysql_select_db($db, $conn) or die ("bd errada");
?>

<?php

$action_script = mysql_query("update textosdb set texto='$_POST[txt]' where id='$_POST[id]'");

$message = "Texto alterado correctamente";

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Inscrições para Xpto</title>
<link href="../modelo.css" rel="stylesheet" type="text/css">

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
      <br>      <table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td align="center" class="white"><?php echo $message; ?></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
</body>
</html>

<?php
function redirect($url, $delay=0)
	{
	echo "<meta http-equiv='Refresh' content='$delay; url=$url'>";
	}

redirect("textos.php");
?>
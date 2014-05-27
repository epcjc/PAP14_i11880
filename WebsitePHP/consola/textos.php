<?php include ("check.php"); ?>

<?php include ("../config.inc.php"); ?>

<?php
$conn = mysql_connect($host, $user, $pass) or die ("dados incorrectos");
$database = mysql_select_db($db, $conn) or die ("bd errada");
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
      <br>
	
	
	<form action="textos-update.php" method="post" enctype="multipart/form-data" name="form1">

	<?php
	$select_texto = mysql_query("select * from textosdb where id='1'");
	$row_texto = mysql_fetch_array($select_texto);
	?>

          <table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td width="110" align="center" class="white">Contactos</td>
              <td><textarea name="txt" rows="10" class="formdadostext" id="txt"><?php echo $row_texto["texto"]; ?></textarea></td>
            </tr>
            <tr>
              <td class="white">&nbsp;</td>
              <td><input name="action" type="submit" id="action" value="gravar">
			  <input name="id" type="hidden" id="id" value="1"></td>
            </tr>
        </table>

      </form>


	<form action="textos-update.php" method="post" enctype="multipart/form-data" name="form2">

	<?php
	$select_texto = mysql_query("select * from textosdb where id='2'");
	$row_texto = mysql_fetch_array($select_texto);
	?>

          <table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td width="110" align="center" class="white">Texto Inicial</td>
              <td><textarea name="txt" rows="10" class="formdadostext" id="txt"><?php echo $row_texto["texto"]; ?></textarea></td>
            </tr>
            <tr>
              <td class="white">&nbsp;</td>
              <td><input name="action" type="submit" id="action" value="gravar">
			  <input name="id" type="hidden" id="id" value="2"></td>
            </tr>
        </table>

      </form>


    <p><br>
    </p>
    <form action="textos-update.php" method="post" enctype="multipart/form-data" name="form3">
      <?php
	$select_texto = mysql_query("select * from textosdb where id='3'");
	$row_texto = mysql_fetch_array($select_texto);
	?>
      <table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="110" align="center" class="white">Texto Sobre mim</td>
          <td><textarea name="txt" rows="10" class="formdadostext" id="txt"><?php echo $row_texto["texto"]; ?></textarea></td>
        </tr>
        <tr>
          <td class="white">&nbsp;</td>
          <td><input name="action" type="submit" id="action" value="gravar">
              <input name="id" type="hidden" id="id" value="3"></td>
        </tr>
      </table>
    </form>    <p>&nbsp; </p></td>
  </tr>
</table>
</body>
</html>

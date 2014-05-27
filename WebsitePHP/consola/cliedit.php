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
	
	
	<form action="cliupdate.php" method="post" enctype="multipart/form-data" name="form1">

	<?php
	$sp = mysql_query("select * from dados where id='$_GET[id]'");
	$rp = mysql_fetch_array($sp);
	?>

          <table width="100%" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td align="center" class="white">Nome</td>
              <td><input name="nome" type="text" class="formdadostext" id="nome" value="<?php echo $rp["nome"]; ?>"></td>
            </tr>
            <tr>
              <td height="54" align="center" class="white">Morada</td>
              <td><textarea  name="morada" class="formdadostext" id="morada"><?php echo $rp["morada"]; ?></textarea></td>
            </tr>
            <tr>
              <td align="center" class="white">Cargo</td>
              <td><input name="cargo" type="text" class="formdadostext" id="cargo" value="<?php echo $rp["cargo"]; ?>"></td>
            </tr>
            <tr>
              <td align="center" class="white">Sexo</td>
              <td><p><input type="radio" name="sexo" id="sexo" value="Masculino">
                Masculino
                <input type="radio" name="sexo" id="sexo" value="Femenino">
                Femenino</p>              </td>
            </tr>
            <tr>
              <td align="center" class="white">Idade</td>
              <td><input name="idade" type="text" class="formdadostext" id="idade" value="<?php echo $rp["idade"]; ?>"></td>
            </tr>
            <tr>
              <td align="center" class="white">Estado Civil:</td>
              <td><input name="estadocivil" type="text" class="formdadostext" id="estadocivil" value="<?php echo $rp["estadocivil"]; ?>"></td>
            </tr>
            <tr>
              <td width="110" align="center" class="white">Imagem</td>
              <td><input name="imagem" type="file" class="formdadostext" id="imagem" value="<?php echo $rp["imagem"]; ?>"></td>
            </tr>
            <tr>
              <td align="center" class="white">Email</td>
              <td><input name="email" type="text" class="formdadostext" id="email" value="<?php echo $rp["email"]; ?>"></td>
            </tr>
            <tr>
              <td class="white">&nbsp;</td>
              <td>
			  
				<?php
				if ($_GET["id"]=="")
					{
				?>
                  <input name="action" type="submit" id="action" value="inserir">
                  <?php
					}
				else
					{
				?>
                  <input name="action" type="submit" id="action" value="alterar">
                  <input name="action" type="submit" id="action" value="apagar"  onClick="return Delete_Confirm();">
                  <input name="id" type="hidden" id="id" value="<?php echo $_GET["id"]; ?>">
                  <?php
					}
				?>				</td>
            </tr>
        </table>

      </form>


	</td>
  </tr>
</table>
</body>
</html>

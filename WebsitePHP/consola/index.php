<?php error_reporting(0); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Inscrições para Xpto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<link href="../modelo.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table width="400" border="0" align="center" cellpadding="8" cellspacing="1" background="../imgs/bk-title.gif">
      <tr>
        <td align="center" valign="top"><strong><br>
          </strong>
            <table width="100%"  border="0" cellspacing="0" cellpadding="8">
              <tr>
                <td align="center" class="white"><img src="admin_logo.png" ></td>
              </tr>
            </table>
            <br>
            <strong> </strong>
            <table width="100%"  border="0" cellspacing="0" cellpadding="8">
              <tr>
                <td align="center" class="white"><strong>Consola de Administra&ccedil;&atilde;o do Site</strong></td>
              </tr>
            </table>
            <strong> <br>
            </strong>
            <form name="form1" method="post" action="auth.php">
              <table border="0" cellspacing="5" cellpadding="2">
                <tr>
                  <td align="right" class="white"><span class="style3">Utilizador</span>:</td>
                  <td><input name="utilizador" type="text" id="utilizador" size="12"></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" class="white"><span class="style3">Senha</span>:</td>
                  <td><input name="senha" type="password" id="senha" size="12"></td>
                  <td><input type="submit" name="Submit" value="login"></td>
                </tr>
              </table>
            </form>
            <?
if ($_GET["e"]!="")
	{
	if ($_GET["e"]==1)
		{
		$message="utilizador e/ou senha incorrectos";
		}
	if ($_GET["e"]==2)
		{
		$message="tem que fazer login";
		}
?>
            <br>
            <table border="0" cellspacing="0" cellpadding="4">
              <tr>
                <td align="right" class="titCat"><span class="style1"><?php echo $message; ?></span></td>
              </tr>
            </table>
            <?
	}
?>
          <br></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

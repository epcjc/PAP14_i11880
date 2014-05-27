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
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-weight: bold;
}
.style3 {
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>

<body>
<table width="600" height="300" border="0" align="center" cellpadding="8" cellspacing="1" background="../imgs/bk-title.gif">
  <tr>
    <td align="center" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200"><span class="white"><img src="admin_logo.png" alt="" ></span></td>
        <td align="center" class="white"><?php include ("menu.php"); ?>
          <p><a href="cliedit.php" class="style3">NOVO</a></p>
          <p>Utilizador: <?php echo "$utilizadorlogado" ,$_SESSION["utilizador_valido"] ?><?php $utilizadoractivo =  $_SESSION["utilizador_valido"] ?>
            </p>
          </td>
          
       
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
              <td width="291" class="white"><strong>Nome</strong></td>
              <td width="193" align="center" valign="top"><strong>Email</strong></td>
		  	  <?php if( $utilizadoractivo == admin) { echo "<td align=center valign=\"top\">Administrador</td>"; }  ?>
              
              
        </tr>
		<?php
		$sp = mysql_query("select * from dados ");
		while ($rp = mysql_fetch_array($sp))
			{
			$sc = mysql_query("select * from grn_categorias '");
			$rc = mysql_fetch_array($sc);
		?>
            <tr>
              <td class="white"><?php echo $rp["nome"]; ?></td>
              <td align="center" valign="top"><span class="white"><?php echo $rp["email"]; ?></span></td>
              <?php if( $utilizadoractivo == admin) {  ?>

              <td width="66" align="center" bgcolor="#FF3300"><a href="cliedit.php?id=<?php echo $rp["id"]; ?>" class="style2">Editar</a></td>
              <?php } ?>
            </tr>
		<?php
			}
		?>
        </table>

	</td>
  </tr>
</table>
</body>
</html>

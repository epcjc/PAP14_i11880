<?php include ("config.inc.php"); ?>

<?php
$conn = mysql_connect($host, $user, $pass) or die ("dados incorrectos");
$database = mysql_select_db($db, $conn) or die ("bd errada");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inscri&ccedil;&otilde;es para Xpto</title>
<link href="<?php echo $raizsite ?>/template_css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $raizsite ?>/ie6.css" rel="stylesheet" type="text/css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {	font-size: 18px;
	font-weight: bold;
}
.style2 {font-size: 24px;
	font-weight: bold;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
</head>


<body class="body_bg">
	<div id="wrapper">
		<div class="wrapper_b">
			<div id="top">
				<div id="logo">
					<h1>Website PHP / MySQL</h1>
				</div>
			</div>
			<div class="clr"></div>	
			
       <div id="top_menu" align="center">
             <p><br />
               <span class="style2" > <br />
               Listagem de inscritos atraves da area de administra&ccedil;&atilde;o<br />
               <br />
               </span></p>
       </div>
	
	  <div id="header">
				<div id="news_flash">
				  <blockquote>
				    <table width="90%" border="0" cellpadding="0" cellspacing="0">
				      <tr>
				        <td align="center"><p>Contactos:</p></td>
			          </tr>
				      <tr>
				        <td align="center"><br />
				          <?php
					  $st = mysql_query("select * from textosdb where local='texto1'");
					  $rt = mysql_fetch_array($st);

					  echo nl2br($rt["texto"]);
					  ?></td>
			          </tr>
			        </table>
				    <p>&nbsp;</p>
			      </blockquote>
		</div>
		  </div>
			<div class="clr"></div>
<div id="pathway">
				<div class="pathway_l">&nbsp; </div>
		  </div>
			
			<div id="content">	
			
				<?php include "./menu.php" ?>
                <p align="center"><br />
                    <span class="style1">Listagem de inscritos:</span><br />
                    <br />
                </p>
                <table width="725px" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC">
                  <tr>
                    <td colspan="2" class="white">&nbsp;</td>
                    <td width="200" align="center" valign="middle" class="white"><strong> Imagem</strong></td>
                  </tr>
                  <?php
		$sp = mysql_query("select * from dados ");
		while ($rp = mysql_fetch_array($sp))
			{
		?>
                  <tr>
                    <td width="116" class="white"><strong>Nome</strong></td>
                    <td width="241" align="center" valign="top"><span class="white"><?php echo $rp["nome"]; ?></span></td>
                    <td rowspan="7" align="center" valign="top"><?php if( $rp["imagem"] <> "") {  ?>
                        <img src="imagens/<?php echo $rp["imagem"]; ?>" width="200" height="200" />
                        <?php } ?>
                      &nbsp;</td>
                  </tr>
                  <tr>
                    <td class="white"><strong>Email</strong></td>
                    <td align="center" valign="top"><span class="white"><?php echo $rp["email"]; ?></span></td>
                  </tr>
                  <tr>
                    <td class="white"><strong>Morada</strong></td>
                    <td align="center" valign="top"><span class="white"><?php echo $rp["morada"]; ?></span></td>
                  </tr>
                  <tr>
                    <td class="white"><strong>Sexo</strong></td>
                    <td align="center" valign="top"><span class="white"><?php echo $rp["sexo"]; ?></span></td>
                  </tr>
                  <tr>
                    <td class="white"><strong>Idade</strong></td>
                    <td align="center" valign="top"><span class="white"><?php echo $rp["idade"]; ?></span></td>
                  </tr>
                  <tr>
                    <td class="white"><strong>Estado Civil</strong></td>
                    <td align="center" valign="top"><span class="white"><?php echo $rp["estadocivil"]; ?></span></td>
                  </tr>
                  <tr>
                    <td class="white"><strong>Cargo</strong></td>
                    <td align="center" valign="top"><span class="white"><?php echo $rp["cargo"]; ?></span></td>
                  </tr>
                  <tr>
                    <td colspan="3" class="white">&nbsp;</td>
                  </tr>
                  <?php
			}
		?>
                </table>
                <div class="clr"></div>	
		  </div>	
				
			</div>

		
		</div>
	</div>
	<div id="footer">
		<p class="copyright">Trabalho realizado por Tom&aacute;s Ferreira Gon&ccedil;alves</p>
</div>
	

					

</body>
</html>
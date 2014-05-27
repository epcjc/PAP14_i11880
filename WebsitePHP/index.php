<?php include ("config.inc.php"); ?>

<?php
$conn = mysql_connect($host, $user, $pass) or die ("dados incorrectos");
$database = mysql_select_db($db, $conn) or die ("bd errada");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inscri&ccedil;&otilde;es para Xpto</title>
<link href="<?php print $raizsite ?>/template_css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $raizsite ?>/ie6.css" rel="stylesheet" type="text/css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
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
			
	     <div id="top_menu" align="center"><h1><br />
	       Pagina Inicial</h1><br />
         
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
                <table width="312" height="137" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="19">Texto inicial</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><?php
					  $st = mysql_query("select * from textosdb where local='texto2'");
					  $rt = mysql_fetch_array($st);

					  echo nl2br($rt["texto"]);
					  ?></td>
                  </tr>
                </table>
                <div class="clr"></div>	
		  </div>	
				
			</div>

		
		</div>
	</div>
	<div id="footer">
		<p class="copyright">Trabalho realizado por Tomás Ferreira Gonçalves</p>
</div>
	

					

</body>
</html>
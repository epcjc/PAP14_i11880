<?php include ('config.inc.php'); ?>

<?php
$conn = mysql_connect($host, $user, $pass) or die ('dados incorrectos');
$database = mysql_select_db($db, $conn) or die ('bd errada');
?>

 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>Inscrições para Xpto</title>
<link href='<?php echo $raizsite ?>/template_css.css' rel='stylesheet' type='text/css' />
<link href='<?php echo $raizsite ?>/ie6.css' rel='stylesheet' type='text/css' />
<script src='Scripts/AC_RunActiveContent.js' type='text/javascript'></script>
<style type='text/css'>
<!--
.style1 {	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
</head>


<body class='body_bg'>
	<div id='wrapper'>
		<div class='wrapper_b'>
			<div id='top'>
				<div id='logo'>
					<h1>Website PHP / MySQL</h1>
				</div>
			</div>
			<div class='clr'></div>	
			
<div id='top_menu'>
             <br />
             <span class='style1'><br />
             Sobre mim..</span></div>
	
	  <div id='header'>
				<div id='news_flash'>
				  <blockquote>
				    <table width='90%' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td align='center'><p>Contactos:</p></td>
                      </tr>
                      <tr>
                        <td align='center'><br />
                            <?php
					  $st = mysql_query("select * from textosdb where local='texto1'");
					  $rt = mysql_fetch_array($st);

					  echo nl2br($rt['texto']);
					  ?></td>
                      </tr>
                    </table>
				    <p>&nbsp;</p>
			      </blockquote>
		</div>
		  </div>
			<div class='clr'></div>
<div id='pathway'>
				<div class='pathway_l'>&nbsp; </div>
		  </div>
			
			<div id='content'>	
			
				<?php include "./menu.php" ?>
                  <tr>
                    <td align='center'>Descri&ccedil;&atilde;o:</td>
                  </tr>
                  <tr>
                    <td align='center'><br />
                        <?php
					  $st = mysql_query("select * from textosdb where local='texto3'");
					  $rt = mysql_fetch_array($st);

					  echo nl2br($rt['texto']);
					  ?></td>
                  </tr>
                </table>
              <div class='clr'></div>	
		  </div>	
				
			</div>

		
		</div>
	</div>
	<div id='footer'>
		<p class="copyright">Trabalho realizado por Tomás Ferreira Gonçalves</p>
</div>
	

					

</body>
</html>
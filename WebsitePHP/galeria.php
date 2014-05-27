<?php include ('config.inc.php'); ?>

<?php
$conn = mysql_connect($host, $user, $pass) or die ('dados incorrectos');
$database = mysql_select_db($db, $conn) or die ('bd errada');
?>



<?php
if (!empty($_POST["action"])) {
if ($_POST["action"]=="inserir")
	{

	$imagem_name = $_FILES['imagem']['name'];
	$imagem_tmpname = $_FILES['imagem']['tmp_name'];
	if ($imagem_tmpname!="")
		{
		$file_ext = substr ($_FILES['imagem']['name'],strlen($_FILES['imagem']['name'])-3,3);
		$rnd = date("dmyHis");
		$imagem_name = "cliente-" . $rnd . "." . $file_ext;
		copy($imagem_tmpname,"./imagens_galeria/".$imagem_name);
		}
	
	$action_script = mysql_query("
	
INSERT INTO 
  `dados_galeria`
(
  `id`,
  `imagem`

) 
VALUE (
  '',
  '$imagem_name'

);	
	
	
	
	
	
	
	
	");

	$message = "Produto inserido correctamente";

	}


if ($_POST["action"]=="apagar")
	{

	$action_script = mysql_query("delete from  dados_galeria where id='$_POST[id]'");

	$message = "Imagem eliminada correctamente";
	}
}; 
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
             Galeria de Imagens</span></div>
	
	  <div id='header'>
				<div id='news_flash'>
				  <blockquote>
				    <table width='90%' border='0' cellpadding='0' cellspacing='0'>
                      <tr>
                        <td align='center'><p>Contactos:</p></td>
                      </tr>
                      <tr>
                        <td align='center'><p><br />
                          <?php
					  $st = mysql_query("select * from textosdb where local='texto1'");
					  $rt = mysql_fetch_array($st);

					  echo nl2br($rt['texto']);
					  ?>
                        </p>
                        <p>
                          <?php
					  $st = mysql_query("select * from textosdb where local='texto3'");
					  $rt = mysql_fetch_array($st);

					  echo nl2br($rt['texto']);
					  ?>
                        </p></td>
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
                <table width='90%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td align='center'>Descri&ccedil;&atilde;o:</td>
                  </tr>
                  <tr>
                    <td align='left'><br />
                    
                    
                      <table width="725px" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC" align="left">
                        <tr>
              <td width="110" align="center" class="white">Imagem</td>
              <td>
              
              
	<form action="galeria.php" method="post" enctype="multipart/form-data" name="form1">

	<?php
	?>
    
    
    
                  <input name="imagem" type="file" class="formdados_galeriatext" id="imagem" value="<?php echo $rp["imagem"]; ?>">
            
            <tr>
              <td class="white">&nbsp;</td>
              <td>
			  
				<?php
				if (empty($_GET['id']))
					{
				?>
                  <input name="action" type="submit" id="action" value="inserir">
                  <?php
					}
				else
					{
				?>
                  <input name="action" type="submit" id="action" value="apagar"  onClick="return Delete_Confirm();">
                  <input name="id" type="hidden" id="id" value="<?php echo $_GET["id"]; ?>">
                  
                  <?php
					}
				?>				</td>
            </tr>
      </table>  

<br />
<br />
<br />
<br />
<br />
<br />

<table width="725px" border="1" cellpadding="4" cellspacing="0" bordercolor="#CCCCCC" >
  <tr>
    <td colspan="2" class="white">&nbsp;</td>
    <td align="center" valign="middle" class="white"><strong> Imagem</strong></td>
  </tr>
  
  
  
  <?php
  
		$sp = mysql_query("select * from dados_galeria ");
		while ($rp = mysql_fetch_array($sp))
			{
		?>
  <tr>
    <td colspan="3" class="white"><?php if( $rp["imagem"] <> "") {  ?>
      <a href="galeria.php?id=<?php echo $rp["id"]; ?>">
      <img src="imagens_galeria/<?php echo $rp["imagem"]; ?>" alt="" width="400" height="400" />
      </a>
      <?php } ?>
      &nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" class="white">&nbsp;</td>
  </tr>
  <?php
			}
		?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      </td>
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
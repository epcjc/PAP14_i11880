<?php
session_start();

if ($_SESSION["utilizador_valido"]=="")
	{
	$referer = "index.php?e=2";
	echo "<meta http-equiv='Refresh' content='0; url=$referer'>";
	exit;
	}


?>
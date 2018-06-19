<?php
//database

	$kull=$_COOKIE['kull'];
	$vt =new mysqli("localhost","root","","yazilim");
	$vt->query("SET NAMES UTF8");

	$sonuclar=$vt->query("select * kullanicilar where='kull'");
	$satir=$sonuclar->fetch_assoc();

	echo "<pre>";
	print_r($satir);
	echo "</pre>";


?>




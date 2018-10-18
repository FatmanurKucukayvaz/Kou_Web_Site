<?php include("connection.php"); ?>
<html>
	<?php session_start(); ?>
	<?php
	$id=$_SESSION['id2'];
	unset($_SESSION['id2']);
		$sorgu="DELETE FROM etkinlikler WHERE etkinlik_id='$id'";
		$sonuc=mysql_query($sorgu);
		if($sonuc){
			echo " <meta http-equiv='refresh' content='8;URL=kullanici_sayfasi.php'> ";
		}
	?>
	
</html>
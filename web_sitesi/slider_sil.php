<?php include("connection.php"); ?>
<html>
	<?php session_start(); ?>
	<?php
	$id=$_SESSION['id3'];
	unset($_SESSION['id3']);
		$sorgu="DELETE FROM slider WHERE slider_id='$id'";
		$sonuc=mysql_query($sorgu);
		if($sonuc){
			echo " <meta http-equiv='refresh' content='8;URL=kullanici_sayfasi.php'> ";
		}
	?>
	
</html>
<?php include("connection.php"); ?>
<html>
	<?php session_start(); ?>
	<?php
	$id=$_SESSION['id1'];
	unset($_SESSION['id1']);
		$sorgu="DELETE FROM duyurular WHERE duyuru_id='$id'";
		$sonuc=mysql_query($sorgu);
		if($sonuc){
			echo " <meta http-equiv='refresh' content='8;URL=kullanici_sayfasi.php'> ";
		}
	?>
	
</html>
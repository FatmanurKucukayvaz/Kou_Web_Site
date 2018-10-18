<!DOCTYPE HTML>
<html lang="tr">
<?php session_start(); ?>
<?php include("connection.php"); ?>
<?php include("function.php"); ?>
<head>

	<meta charset="UTF-8">
	<title>  Kocaeli Üniversitesi | Bilgisayar Mühendisliği </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="kullanici_sayfasi.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">

	p {
		margin:30px;
	}
	img{
	float:left;
	}
	.responsive-img {
	max-height:90px;
	max-width:90px;
	}
	h2{
		text-align:center;
		margin:40px 20px 20px 20px;
		font-family:Open Sans,sans-serif;
		color:#314c5f;
	}

	@media (min-width : 768px) { /* Eğer responsive yazıyorsak mobil
                                boyuttayken bu işlemi yapmamıza
                                gerek yok. Bu nedenle, CSS'imize
                                tarayıcı genişliği 768px veya daha
                                büyükse çalışmasını söylüyoruz. */
  .dropdown:hover .dropdown-menu {
    display: block;
  }

	</style>

</head>

<body>

	<div class="navbar navbar-inverse navbar-static-top" id="ana_baslik">
	<div class="container" id="banner">
		<img class="responsive-img" src="kocaeli-universitesi.png" width="100%" height="100%" />
  		<h2 id="genel_baslik"> KOCAELİ ÜNİVERSİTESİ BİLGİSAYAR MÜHENDİSLİĞİ <small></small></h2>

		<button class="navbar-toggle" data-toggle="collapse" data-target=".acKapa"><div class="icon-bar"></div></button>
		<a href="acilirMenu.php" class="navbar-brand">Anasayfa</a>
		<div class="collapse navbar-collapse acKapa">
			<ul class="nav navbar-nav">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hakkımızda<div class="caret"></div></a>
					<ul class="dropdown-menu">
						<li><a href="tarihce1.php">Tarihçe</a></li>
						<li><a href="hakkimizda1.php">Hakkımızda</a></li>
						<li><a href="misyon1.php">Misyon</a></li>
						<li><a href="vizyon1.php">Vizyon</a></li>
						<li><a href="#">Anabilim Dalları</a></li>
						<li><a href="programciktilari1.php">Program Çıktıları</a></li>
					</ul>

				</li>

				<li><a href="#">Yönetim</a></li>

				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Araştırma<div class="caret"></div></a>
					<ul class="dropdown-menu">
						<li><a href="http://bilgisayar.kocaeli.edu.tr/akilli_sistemler_lab/" target="_blank">Akıllı Sistemler Arş. Lab.</a></li>
						<li><a href="http://bilgisayar.kocaeli.edu.tr/comnet/" target="_blank">Bilgisayar Ağları ve Haberleşme Arş. Lab.</a></li>
						<li><a href="http://embedded.kocaeli.edu.tr/" target="_blank">Gömülü ve Algılayıcı Sistemler Arş. Lab.</a></li>
						<li><a href="http://ibel.kocaeli.edu.tr/" target="_blank">İnsan Bilgisayar Etkileşimi Arş. Lab.</a></li>
						<li><a href="http://yapbenzet.kocaeli.edu.tr/" target="_blank">Yapay Zeka Benzetim Sistemleri Arş. Lab.</a></li>
						<li><a href="#">Projeler</a></li>
					</ul>

				</li>

				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Personel<div class="caret"></div></a>
					<ul class="dropdown-menu">
						<li><a href="#">Öğretim Üyeleri</a></li>
						<li><a href="#">Öğretim Elemanları</a></li>
						<li><a href="#">İdari Personel</a></li>
						<li><a href="sistemegiris.php">Sisteme Giriş</a></li>
					</ul>

				</li>

				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Lisans<div class="caret"></div></a>
					<ul class="dropdown-menu">
						<li><a href="http://mf.kocaeli.edu.tr/ogrenci/formlar.php" target="_blank">Öğrenci Dilekçe ve Formları</a></li>
						<li><a href="#">Ders Planı</a></li>
						<li><a href="lisansdersicerik.php">Ders İçerikleri</a></li>
						<li><a href="#">Ders Programı</a></li>
						<li><a href="#">Akademik Danışmanlar</a></li>
						<li><a href="#">İntibak Öğrencileri</a></li>
						<li><a href="programciktilari1.php">Aday Öğrenciler</a></li>
						<li><a href="ars_prob_bitirme.php">Araştırma Problemleri ve Bitirme</a></li>
						<li><a href="http://odb.kocaeli.edu.tr/akademik_takvim.php" target="_blank">Akademik Takvim</a></li>
						<li><a href="#">MÜDEK</a></li>
						<li><a href="https://ogr.kocaeli.edu.tr/KOUBS/Genel/Diplomasorgu/diplomanosorgu.cfm" target="_blank">Diploma Sorgulama</a></li>
						<li><a href="#">Staj</a></li>
					</ul>

				</li>

				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Y.Lisans/Doktora<div class="caret"></div></a>
					<ul class="dropdown-menu">
						<li><a href="calismaalani.php">Çalışma Alanları</a></li>
						<li><a href="#">Ders Listesi</a></li>
						<li><a href="#">Ders Programı</a></li>
						<li><a href="#">Tezler</a></li>
					</ul>

				</li>

				<li><a href="https://www.facebook.com/groups/25429857332/" target="_blank">Mezunlar</a></li>
				<li><a href="iletulas.php">İletişim/Ulaşım</a></li>
				<li><a href="#">3DNavi</a></li>
				<li><a href="#">English</a></li>
				
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kullanıcı Menüsü<div class="caret"></div></a>
					<ul class="dropdown-menu">
						<li><a href="kullanici_sayfasi.php">Sayfam</a></li>
						<li><a href="duyuru_ekle.php">Duyuru Ekle</a></li>
						<li><a href="etkinlik_ekle.php">Etkinlik Ekle</a></li>
						<li><a href="bolum_duy_ekle.php">Bölüm Duyurusu Ekle</a></li>
						<li><a href="sifredegistir.php">Şifre Değiştir</a></li>
						<li><a href="cikis.php">Çıkış</a></li>
					</ul>

				</li>
				
			</ul>
		</div>
	</div>
</div>

<?php echo "<h1>".$_SESSION['kullanici']." hoşgeldiniz.</h1>"?>
<div id="duyuru">
<div class="duy">
<h1>Bölüm Duyuruları</h1>
<?php	
		$result=kisinin_bolum_duy();
		while($row=mysql_fetch_array($result)){
			echo "<li>".$row["duyuru_id"]."</br>";
			echo $row["tarih"]."</br>";
			echo $row["baslik"]."</br>";
			echo $row["duyuru_icerik"]."</br>";
		}
?>
<form id="loginform" name="loginform" method="post" action="kullanici_sayfasi.php">
<div style="margin-bottom: 25px" class="input-group">
    <input id="silinecek" type="text" class="form-control" name="silinecek" value="" placeholder="Silinecek duyuru id">                                        
</div>

<div class="col-sm-12 controls">
	<input type="submit" name="submit" id="btn-login" class="btn btn-success" value="Sil"/>
</div>
</form>
</div>
<div class="duy">
<h1>Genel Duyurular</h1>
<?php
	$result=kisinin_genel_duy();
		while($row=mysql_fetch_array($result)){
			echo "<li>".$row["duyuru_id"]."</br>";
			echo $row["tarih"]."</br>";
			echo $row["baslik"]."</br>";
			echo $row["duyuru_icerik"]."</br>";
		}
?>
<form id="loginform" name="loginform" method="post" action="kullanici_sayfasi.php">
<div style="margin-bottom: 25px" class="input-group">
    <input id="silinecek1" type="text" class="form-control" name="silinecek1" value="" placeholder="Silinecek duyuru id">                                        
</div>

<div class="col-sm-12 controls">
	<input type="submit" name="submit" id="btn-login" class="btn btn-success" value="Sil"/>
</div>
</form>

</div>
<div class="duy">
<h1>Etkinlikler</h1>
<?php
	$result=kisinin_etkinlikleri();
		while($row=mysql_fetch_array($result)){
			echo "<li>".$row["etkinlik_id"]."</br>";
			echo $row["tarih"]."</br>";
			echo $row["baslik"]."</br>";
			echo $row["etkinlik_icerik"]."</br>";
		}
?>
<form id="loginform" name="loginform" method="post" action="kullanici_sayfasi.php">
<div style="margin-bottom: 25px" class="input-group">
    <input id="silinecek2" type="text" class="form-control" name="silinecek2" value="" placeholder="Silinecek duyuru id">                                        
</div>

<div class="col-sm-12 controls">
	<input type="submit" name="submit" id="btn-login" class="btn btn-success" value="Sil"/>
</div>
</form>

</div>
<div class="duy">
<h1>Slider</h1>
<?php
	$result=kisinin_slider();
		while($row=mysql_fetch_array($result)){
			echo $row["slider_id"]."</br>";
			echo $row["slider_icerik"];
		}
?>
<form id="loginform" name="loginform" method="post" action="kullanici_sayfasi.php">
<div style="margin-bottom: 25px" class="input-group">
    <input id="silinecek3" type="text" class="form-control" name="silinecek3" value="" placeholder="Silinecek duyuru id">                                        
</div>

<div class="col-sm-12 controls">
	<input type="submit" name="submit" id="btn-login" class="btn btn-success" value="Sil"/>
</div>
</form>
</div>
</div>
<?php
	if($_POST){	
		if($_POST["silinecek"]!=NULL){
			unset($_SESSION['id1']);
			unset($_SESSION['id2']);
			unset($_SESSION['id3']);
			$_SESSION['id']=$_POST["silinecek"];
			echo " <meta http-equiv='refresh' content='8;URL=bolum_duy_sil.php'> ";
		}
		else if($_POST["silinecek1"]!=NULL){
			unset($_SESSION['id']);
			unset($_SESSION['id2']);
			unset($_SESSION['id3']);
			$_SESSION['id1']=$_POST["silinecek1"];
			echo " <meta http-equiv='refresh' content='8;URL=duyuru_sil.php'> ";
		}
		else if($_POST["silinecek2"]!=NULL){
			unset($_SESSION['id1']);
			unset($_SESSION['id']);
			unset($_SESSION['id3']);
			$_SESSION['id2']=$_POST["silinecek2"];
			echo " <meta http-equiv='refresh' content='8;URL=etkinlik_sil.php'> ";
		}
		else if($_POST["silinecek3"]!=NULL){
			unset($_SESSION['id1']);
			unset($_SESSION['id2']);
			unset($_SESSION['id']);
			$_SESSION['id3']=$_POST["silinecek3"];
			echo " <meta http-equiv='refresh' content='8;URL=slider_sil.php'> ";
		}
	}
?>

<?php include("klasik_alt.php"); ?>
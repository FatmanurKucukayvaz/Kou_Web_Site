<!DOCTYPE HTML>
<html lang="tr">

<head>

	<meta charset="UTF-8">
	<title>  Kocaeli Üniversitesi | Bilgisayar Mühendisliği </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="ulasim.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">

	img{
		float:left;
	}
	.responsive-img {
		max-height:90px;
		max-width:90px;
	}
	.img-responsive {
		max-width: 110px;
		max-height: 110px;
		margin-bottom: 20px;
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
  
	}
	p {
		margin: 80px;
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
						<li><a href="sistemegiris.html" target="_blank">Sisteme Giriş</a></li>
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

			</ul>
		</div>
	</div>
</div>
<h2>BİLGİSAYAR MÜHENDİSLİĞİ İLETİŞİM/ULAŞIM</h2><hr>

<p style="margin-left:15%">
Adres:	KOÜ Mühendislik Fakültesi (B Blok) Bilgisayar Mühendisliği / Umuttepe Yerleşkesi 41380 Kocaeli<br/><br/>
Telefon:	+90 (262) 303 35 60<br/><br/>
E-Posta:	bilgisayar@kocaeli.edu.tr<br/><br/>
Web:	http://bilgisayar.kocaeli.edu.tr
</p>
<section>
<div class="container"  style="margin-left:17%" style="margin-right:20%">
	<div class="col-lg-12">
		<ul id="liste">
			<li>Genel Harita
			<a href="harita-genel.gif" target="_blank"> <img class="img-responsive" style="margin-right:3%" style="margin-bottom: 0%" src="harita-genel.gif" width="100%" height="100%" /></a></li>
			<li>D100 Girişi
			<a href="d100.jpg" target="_blank"><img class="img-responsive" style="margin-right:3%" style="margin-bottom: 0%" src="d100.jpg" width="100%" height="100%" /></a></li>
			<li>Anıtpark Girişi
			<a href="anitpark.jpg" target="_blank"><img class="img-responsive" style="margin-right:3%" style="margin-bottom: 0%" src="anitpark.jpg" width="100%" height="100%" /></a></li>
			<li>Kandıra Girişi
			<a href="kandira.jpg" target="_blank"><img class="img-responsive" style="margin-right:3%" style="margin-bottom: 0%" src="kandira.jpg" width="100%" height="100%" /></a></li>
			<li>Yerleşke Planı
			<a href="kroki.gif" target="_blank"><img class="img-responsive" style="margin-right:3%" style="margin-bottom: 0%" src="kroki.gif" width="100%" height="100%" /></a></li>
			<li>Maket Görüntü
			<a href="maket.gif" target="_blank"><img class="img-responsive" style="margin-right:3%" style="margin-bottom: 0%" src="maket.gif" width="100%" height="100%" /></a></li>
			<li>Minibüs Hatları
			<a href="guzergah.php" target="_blank"><img class="img-responsive" style="margin-right:3%" style="margin-bottom: 0%" src="logo_bus.png" width="100%" height="100%" /></a></li>
		</ul>
		
	</div>
</div>
</section>
<article>
<p  style="margin-left:17%"   style="margin-top:0%" style="font-size:18px" > Not: Yerleşkemize özel araçlarıyla gelen misafir ve öğrencilerimiz A veya C kapısını kullanabilirler. </p>
</article>

<article>
<div id="engelli">
<p>Bölüm Engelli Erişim Planı</p>
</div>
<ul id="engelli_plan" style="margin-left:30%" style="margin-top:0%">
	<li>1.Aşama
			<a href="C1_ Girisi.jpg" target="_blank"><img class="img-responsive" style="margin-right:3%" 
			style="margin-bottom: 0%" src="C1_ Girisi.jpg" width="100%" height="100%" /></a></li>
	<li>2.Aşama
			<a href="Kimya_Muh_Kat_2.jpg" target="_blank"><img class="img-responsive" style="margin-right:3%" 
			style="margin-bottom: 0%" src="Kimya_Muh_Kat_2.jpg" width="100%" height="100%" /></a></li>
	<li>3.Aşama
			<a href="Bolum_Kati_3.jpg" target="_blank"><img class="img-responsive" style="margin-right:3%" 
			style="margin-bottom: 0%" src="Bolum_Kati_3.jpg" width="100%" height="100%" /></a></li>

</ul>

<div class="row">
			<div class="panel panel-default col-md-12">
				<div class="panel-footer">
				  <p>Adres: KOÜ Mühendislik Fakültesi (B Blok) Bilgisayar Mühendisliği Umuttepe Yerleşkesi 41380 Kocaeli<br/>
					Tel: +90 (262) 303 35 60<br/>
					E-Posta: bilgisayar@kocaeli.edu.tr<br/> 
					Web: http://bilgisayar.kocaeli.edu.tr 
                    <br>
                  </p>
			  </div>
			</div>

<br/><br/>
</body>
<html>
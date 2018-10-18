<!DOCTYPE HTML>
<html lang="tr">

<head>

	<meta charset="UTF-8">
	<title>  Kocaeli Üniversitesi | Bilgisayar Mühendisliği </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">

	h2 {
		text-align: center;
	}
	p {
		margin:30px;
	}
	h4 {
		margin-left: 30px;
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
				
			</ul>
		</div>
	</div>
</div>

	<h2> HAKKIMIZDA </h2><hr>
<p> Günümüzde e-uygulamalardan (e-devlet, e-iş, e-ticaret…) savunma sanayisine, haberleşme ve elektronik teknolojisinden eğitim ve sağlık sektörüne kadar her konuda Bilgisayar Mühendisliği'nin önemi ve etkisi artmaktadır. Sonuç olarak hayatımızın can damarı durumuna gelmiş olan bilgi ve iletişim teknolojilerinin gelişiminde Bilgisayar Mühendisliği önemli rol oynamaktadır.<br/><br/>

Bilgisayar Mühendisliği Bölümü Lisans Programı, öğrenciye modern bilişim teknolojilerinin temel kuramsal kavramlarını ve ilkelerini teorik eğitimin yanında yoğun pratik uygulamalarla destekli bir şekilde vermektedir. Bölümün başlıca amaçları, Bilgisayar Mühendisliği alanındaki bilimsel, endüstriyel ve teknolojik gelişmeleri takip ederek öğrencilerini ileri araştırmalara yöneltmek ve bu gelişmelere katkıda bulunarak daha ileri noktalara gitmesini sağlamaktır.<br/><br/>

Temel araştırma konularımız; yapay zeka, algoritmalar, veritabanları, yazılım mühendisliği, işletim sistemleri, network ve dağıtık sistemler olarak özetlenebilir. Ancak bunun yanında, gelişen teknolojiye uygun olarak seçimlik olarak açılan derslerle öğrencilere ilgi alanlarına uygun olarak zengin çeşitlilikte bilgi edinme imkanları sunulmaktadır.<br/><br/>

Bölümümüzden mezun olan öğrencilerimiz bilgisayar sektörünün önde gelen araştırma birimlerinde (Ar-Ge) ve şirketlerinde önemli yerlerde bulunmaktadırlar.<br/><br/>

<h4>Bölümün Öğretim Üyesi Sayısı: 24</h4><br/><br/>
  <ul type="disc">
   <li>3 Profesör,</li>
   <li>3 Doçent,</li>
   <li>6 Yardımcı Doçent,</li>
   <li>1 Öğretim Görevlisi Dr,</li>
   <li>10 Araştırma Görevlisi ve,</li>
   <li>1 Uzmandır.</li>
  </ul>

<br/><h4>Bölümün İdari Personel Sayısı: 1</h4><br/><br/>

<h4>Bölümün Öğrenci Sayıları: 1316</h4><br/><br/>

 <ul type="disc">
   <li>Doktora Öğrenci Sayısı: 31</li>
   <li>Yüksek Lisans öğrencisi: 66</li>
   <li>6 Yardımcı Doçent,</li>
   <li>I. Öğretim (Gündüz) Lisans öğrencisi: 641</li>
   <li>II. Öğretim (Gece) Lisans öğrencisi: 578</li>
  </ul><br/><br/><br/>
</p><br/>

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
		</div>
</div>
</body>
<html>
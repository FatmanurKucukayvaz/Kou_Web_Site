<!DOCTYPE HTML>
<html lang="tr">

<head>

  <meta charset="UTF-8">
  <title> Document </title>
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

  <div class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <img class="responsive-img" src="kocaeli-universitesi.png" width="100%" height="100%" />
      <h2> KOCAELİ ÜNİVERSİTESİ BİLGİSAYAR MÜHENDİSLİĞİ <small></small></h2>

    <button class="navbar-toggle" data-toggle="collapse" data-target=".acKapa"><div class="icon-bar"></div></button>
    <a href="acilirMenu.html" class="navbar-brand">Anasayfa</a>
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
            <li><a href="sistemegiris.html">Sisteme Giriş</a></li>
          </ul>

        </li>

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Lisans<div class="caret"></div></a>
          <ul class="dropdown-menu">
            <li><a href="http://mf.kocaeli.edu.tr/ogrenci/formlar.php" target="_blank">Öğrenci Dilekçe ve Formları</a></li>
            <li><a href="lisansdersplan.php">Ders Planı</a></li>
            <li><a href="lisansdersicerik.php">Ders İçerikleri</a></li>
            <li><a href="208_Ders_Programi.zip">Ders Programı</a></li>
            <li><a href="#">Akademik Danışmanlar</a></li>
            <li><a href="programciktilari1.php">Aday Öğrenciler</a></li>
            <li><a href="ars_prob_bitirme.php">Araştırma Problemleri ve Bitirme</a></li>
            <li><a href="http://odb.kocaeli.edu.tr/akademik_takvim.php" target="_blank">Akademik Takvim</a></li>
            <li><a href="mudek.php">MÜDEK</a></li>
            <li><a href="https://ogr.kocaeli.edu.tr/KOUBS/Genel/Diplomasorgu/diplomanosorgu.cfm" target="_blank">Diploma Sorgulama</a></li>
            <li><a href="stajesas.php">Staj</a></li>
          </ul>

        </li>

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Y.Lisans/Doktora<div class="caret"></div></a>
          <ul class="dropdown-menu">
            <li><a href="calismaalani.php">Çalışma Alanları</a></li>
            <li><a href="#">Ders Listesi</a></li>
            <li><a href="ylisansprog.pdf" target="_blank">Ders Programı</a></li>
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

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Ders Adı</th>
      <th>Ders İçeriği</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ağ Tasarım ve Yönetimi</td>
      <td>Ag temelleri ve guncel teknolojiler. Ag planlama, analiz, tasarim ve yonetim teknikleri. Ag yonetimi bilgi tabanlari ve protokolleri. Farkli ag teknolojileri, topoloji, performance ve gercek hayat uygulamalari acisindan aciklanip karsilastirilacak. Ag yonetim sistemleri hata, konfigurasyon, guvenlik ve performansida icerir sekilde incelenecektir.</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Algoritmaların Tasarımı ve Analizi</td>
      <td>Algoritmaların temel kavramları. matematiksel gereksinimler. Rekürsif eşitlikler ve eşitsizlikler. Karmaşıklık ölçütleri, O, o ve diğer notasyonlar. Çeşitli alanlardaki klasik algoritmaların karmaşıklık analizi. Sıralama, arama, çizgeler, eşleme, matris işlemleri, dönüşümler.</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ayrık Sistemler için İleri Olasılık</td>
      <td>Olasılık uzayı, rastgele değişkenler, beklendik değer, koşullu beklendik değer, stokastik yakınsama, karakteristik fonksiyonlar, limit teoremleri, Markov ve Gauss Süreçlerine Giriş, Durağan Süreçler, Spektrak Gösterim, Ergodiklik, Yenilenen Süreçler, Martingale ve Kestirime Uygulaması, Tahmin, ve Kuyruk Teorisi</td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Bilgisayar Ağları ve Haberleşmesi</td>
      <td>Veri ve bilgisayar haberleşmesi temelleri; OSI temel referans modeli; fiziksel, veri bağlantı, ağ, ve ulaşım katmanları; yönlendirme akış kontrolü, tıkanıklık kontrolü; ağlar arası ağ; TCP/IP protokolleri; üst katman protokolleri; kablosuz ağlara giriş.</td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Bilgisayar Mühendisliğinde Özel Konular</td>
      <td>Konular dersin sunuldugu doneme gore degisebilir. Konular bilgisayar muhendiligindeki teknolojik veya teorik gelismelere arasindan seçilecektir.</td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>Dağıtık Sistemler</td>
      <td>Dağıtık sistemler algoritmaların temeli, problemler, hata toleransı göz önüne alınarakdağıtık uygulamalar dizayn etmek ve anlamak için gerekli modeller ve yöntemler. Web Servisler.</td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>İnsan Bilgisayar Etkileşimi</td>
      <td>Bu dersin amacı öğrencilere insan bilgisayar etkileşimi (human computer interaction) ve kullanıcı merkezli tasarım konularını; insan bilgisayar etkileşimi temel prensipleri, etkileşimli sistemler genel tasarım ilkeleri, kullanılabilirlik testleri (temel prensipler ve kullanıcı testleri) kavramları ile tanıtmaktır.</td>
    </tr>

    <tr>
      <th scope="row">8</th>
      <td>İnternet Madenciliği</td>
      <td>İnternet madenciliğine giriş; Temel www teknolojileri; Veri ön işleme teknikleri; İnternet kullanım madenciliği; İnternet erişim kayıtları; İnternet öneri sistemleri; Kullanıcı profili öğrenme ve kişiselleştirme; İnternet içerik madenciliği; Metin kümeleme ve analizi; İnternet yapı madenciliği; Bağ analizi; İnternet metinleri; İnternette arama ve örümcek teknikleri.</td>
    </tr>

    <tr>
      <th scope="row">9</th>
      <td>Kablosuz Haberleşme ve Gezgin Sistemler</td>
      <td></td>
    </tr>

    <tr>
      <th scope="row">10</th>
      <td>Makine Öğrenmesi</td>
      <td>Giriş; Eğiticili öğrenme; Yapay sinir ağları; Destek vektör sistemleri; Öğrenme algoritmalarının değerlendirilmesi; Bayes teorisi; Karar ağaçları; Parametrik yöntemler; Çok değişkenli yöntemler; Boyut indirgeme; Kümeleme; Güncel uygulamalar.</td>
    </tr>

    <tr>
      <th scope="row">11</th>
      <td>Mobil Uygulama Geliştirme</td>
      <td></td>
    </tr>

    <tr>
      <th scope="row">12</th>
      <td>Optimal Kestirim Teorisi</td>
      <td>Kestirim teorisine giriş. Matematiksel operasyonlar. Matris diferansiyel hesabı. En küçük kareler hesabı. Ardışıl Kestirim. Rasgele değişkenler. Bazı dağılım fonksiyonları. Durağan prosesler. Wiener filtre problemi. Spektral faktorizasyon. Rasgele girişli sistemler. Optimum durum kestirimi problemi. Kalman filtresi ve kararlılığı. Sürekli hal durumu. Renkli gürültü için durum vektörü. Lineer ayrık zamanlı rasgele sistemler. Kalman filtrelerinin tipleri. Artırılmış (extended) Kalman filtresi</td>
    </tr>

    <tr>
      <th scope="row">13</th>
      <td>Special Topics in Human Computer Interaction</td>
      <td></td>
    </tr>

    <tr>
      <th scope="row">14</th>
      <td>Tasarım Örüntüleri</td>
      <td>Dersin amacı nesneye yönelik yazılım geliştirme sürecinde analiz ve tasarım aşamalarında öğrencilerin UML modelleme dilini kullanarak gereksinim analizi ve tasarım örüntülerini kullanarak yeniden kullanılabilir yazılım tasarımları gerçekleştirmelerini sağlamaktır</td>
    </tr>

    <tr>
      <th scope="row">15</th>
      <td>User Experience Design</td>
      <td></td>
    </tr>

    <tr>
      <th scope="row">16</th>
      <td>Veri Madenciliği</td>
      <td>Veri madenciliğinin önemi.Temel veri madenciliği teknikleri.Karar ağaçları.Birliktelik kuralları.K-means algoritması.Genetik öğrenme.Veritabanlarında bilgi keşfi.Veri ambarları.Gelişmiş veri madenciliği teknikleri.Veri madenciliği uygulama alanları</td>
    </tr>

    <tr>
      <th scope="row">17</th>
      <td>Veri ve Ağ Güvenliği</td>
      <td>Şifreleme Sistemleri ve Sistemlerine Giriş, Açık Anahtarlı Şifreleme ve RSA Şifreleme Sistemleri, DES(Data Encryption Standart) Şifreleme Sistemi, Veri ve Ağ Güvenliğine Giriş, Güvenlik Politikaları, Güvenlik Duvarı (Fire Wall), AAA (Authentication-Authorization -Acounting), ACL (Access Control List) ve NAT(Ağ Adres Dönüşümü), VPN (Virtual Private Network), Saldırı Tespit Sistemleri, E-Ticaretin Güvenliği ve SSL, ECC (Eliptic Curve Cryptosystem), Sayısal İmza, IP Güvenliği</td>
    </tr>

    <tr>
      <th scope="row">18</th>
      <td>Veritabanı Sistemleri</td>
      <td>Temel tanımlar ve kavramlar. Er modeli ile veri modelleme. Varlık, Varlık Kümesi, Nitelik Kavramları. Bağıntı,Bağıntı Tipleri, Roller, Yapısal Kısıtlar. Genelleme. Kümeleme. Anahtarlar. İlişkisel veri modeli. İlişkisel cebir. Sql ilişkisel veritabanı standardı. Fonksiyonel bağımlılıklar ve normalizasyon</td>
    </tr>

    <tr>
      <th scope="row">19</th>
      <td>Yapay Zeka ve Bilişsel Sistemler</td>
      <td>Yapay zekaya giriş. Programlama. Dizi, ağaç, küme, kuyruk ve tablo yapıları.Bilgi gösterimi: Üretim kuralları, içerme hiyeyarşileri, önermesel ve yargısal hesap, çıkarım kuralları, çerçeveler, anlamsal ağlar, kısaltmalar ve dizgesel yaklaşımlar. Arama: Hipotez ve test etme, derinlik öncelikli arama, genişlik öncelikli arama, sezgisel arama, optimal arama, oyun ağaçları ve dönüşüklü arama, minimax arama, alpha-beta indirgeme. Öğrenme: Betimleme ağaçları, yapay sinir ağları, perceptronlar, genetik algoritmalar, uzman sistemler, doğal dil işlem, konuşma tanıma, bilgisayarla görü, Bilişsel sistemlere giriş, bilişsel yapay zeka.</td>
    </tr>

    <tr>
      <th scope="row">20</th>
      <td>Yazılım Kalite Yönetimi</td>
      <td>Bu dersin amacı yazılım kalitesi, yazılım kalite güvencesi ve yazılım süreç iyileştirme ile ilgili temel kavram ve prensipleri tanımlamak ve kullanılacak teknik ve yöntemleri nin yazılım geliştirme sürecinde uygulanabilmesini sağlamaktır</td>
    </tr>


  </tbody>
</table>
  
<br/><br/><br/>

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
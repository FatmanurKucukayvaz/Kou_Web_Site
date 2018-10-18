<!DOCTYPE HTML>
<html lang="tr">
<?php include("connection.php"); ?>
<?php include("function.php"); ?>




<head>
<link rel="stylesheet" href="haber.css">
<link rel="stylesheet" href="stil.css">
	<meta charset="UTF-8">
	<title> Kocaeli Üniversitesi | Bilgisayar Mühendisliği </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="slider.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="haber.css"/>
	<style type="text/css">

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
	p {
		font-size: 15px;
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
	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
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
						<li><a href="projeler.php">Projeler</a></li>
					</ul>

				</li>

				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Personel<div class="caret"></div></a>
					<ul class="dropdown-menu">
						<li><a href="ogretim_uyeleri.php">Öğretim Üyeleri</a></li>
						<li><a href="ogretim_elemanlari">Öğretim Elemanları</a></li>
						<li><a href="idari_personel">İdari Personel</a></li>
						<li><a href="sistemegiris.php" target="_blank">Sisteme Giriş</a></li>
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
						<li><a href="mudek.php">MÜDEK</a></li>
						<li><a href="https://ogr.kocaeli.edu.tr/KOUBS/Genel/Diplomasorgu/diplomanosorgu.cfm" target="_blank">Diploma Sorgulama</a></li>
						<li><a href="#">Staj</a></li>
					</ul>

				</li>

				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Y.Lisans/Doktora<div class="caret"></div></a>
					<ul class="dropdown-menu">
						<li><a href="calismaalani.php">Çalışma Alanları</a></li>
						<li><a href="ylisansderslist.php">Ders Listesi</a></li>
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
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
<
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="kouu.jpg" alt="Chania" width="460" height="345">
        <P align="center"><font color="green"><br/></font></P>
    </div>
	<?php 						
		$limit = 5;
		$query= mysql_query("SELECT * FROM slider   ORDER BY slider_id ASC LIMIT $limit"); ?>			
	<?php if(mysql_affected_rows()){
		while ($row = mysql_fetch_array($query)){
	?>
	<div class="item">
		<img src="slider_resim/<?php echo $row["slider_icerik"];?>" alt="Chania" width="460" height="345"><h4></h4>
	</div>
	<?php }
		}
	?>
    </div>
	

	
	
	<div class="duy"> <h1> <u><b>Genel Duyurular </b></u><h6><a href="tum_genel_duy.php"><span>>> tüm duyurular</span></a></h6></h1>
	<?php
	
		$result=konulari_getir();
		while($row=mysql_fetch_array($result)){
			?>
			
			<section class="panel" style="background-image:url(haber_resmi.jpg)">
        <div>
		
	     <h3><?php echo $row["tarih"] ?></h3>
        <h2><?php echo $row["baslik"] ?></h2>
		
		
    <p>  
		<?php $sayi=$row["duyuru_id"] ?>
	
      <head>  
           <title>Webslesson Tutorial | How to Show Dynamic MySQL Data in Bootstrap Modal</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           
                <div class="table-responsive"> 
			
                     <table class="table table-bordered">  
                       
                          <tr>  
                                
                               <td><input type="button" name="view" value="view" id="<?php echo $row["duyuru_id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  </div>
							   
                          </tr>  
                           
                            
                        
                     </table>  
                </div>
	
           </div>  
		   
      </body>  
  </section>
  

	
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Duyuru Detayı</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script> 

<?php
		
		}  ?>
		
		

</div>
		</div>

		
		
		<div class="duy2"> <h1> <u><b>Bölüm Duyuruları </b></u><h6><a href="tum_bolum_duy.php"><span>>> tüm duyurular</span></a></h6></h1>
	<?php
	
		$result=bolum_konulari_getir();
		while($row=mysql_fetch_array($result)){
			?>
			
			<section class="panel" style="background-image:url(haber_resmi.jpg)">
        <div>
		
	     <h3><?php echo $row["tarih"] ?></h3>
        <h2><?php echo $row["baslik"] ?></h2>
		
    <p>  
		<?php $sayi=$row["duyuru_id"] ?>
	
      <head>  
           <title>Webslesson Tutorial | How to Show Dynamic MySQL Data in Bootstrap Modal</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                       
                          <tr>  
                               
                               <td><input type="button" name="view" value="view" id="<?php echo $row["duyuru_id"]; ?>" class="btn btn-info btn-xs view_data1" /></td>  </div>

                          </tr>  
                           
                            
                        
                     </table>  
                </div>
	
          
      </body>  
  </section>
  

	
 <div id="dataModal1" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Duyuru Detayı</h4>  
                </div>  
                <div class="modal-body" id="employee_detail1">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 <script>  
 $(document).ready(function(){  
      $('.view_data1').click(function(){  
           var employee_id1 = $(this).attr("id");  
           $.ajax({  
                url:"select_bolum.php",  
                method:"post",  
                data:{employee_id1:employee_id1},  
                success:function(data){  
                     $('#employee_detail1').html(data);  
                     $('#dataModal1').modal("show");  
                }  
           });  
      });  
 });  
 </script> 

<?php
		
		}  ?>
		
	
	
	
	
	
	
	<div id="menucon"><div id="koddostu-tex"><br/>
	<?php $result=tum_etkinlik_konulari_getir();
		while($row=mysql_fetch_array($result)){
			//echo "<h2>".$row["tarih"]."</h2><br>";
			//echo $row["baslik"]."<br>";
			//echo $row["duyuru_icerik"]."<br>";
			?>
 
	<b>Haber ve Etkinlikler</b><br/><br/>
	<ul>
	<li><a href="#"><?php echo $row["tarih"] ?></a></li>
	<li><a href="#"><?php echo $row["baslik"] ?></a></li>
	<li><a href="tumetkinlik_duy.php"><?php echo ">> Tüm Duyurular" ?></a></li>
	
	
	
		<tr>  
                               
                                <td><input type="button" name="view" value="view" id="<?php echo $row["etkinlik_id"]; ?>" class="btn btn-info btn-xs view_data2" /></td> </div>

                          </tr>  
	</ul>
</div>

<div id="dataModal2" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Duyuru Detayı</h4>  
                </div>  
                <div class="modal-body" id="employee_detail2">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
  $(document).ready(function(){  
      $('.view_data2').click(function(){  
           var employee_id2 = $(this).attr("id");  
           $.ajax({  
                url:"select_etkin.php",  
                method:"post",  
                data:{employee_id2:employee_id2},  
                success:function(data){  
                     $('#employee_detail2').html(data);  
                     $('#dataModal2').modal("show");  
                }  
           });  
      });  
 });  
 </script> 



		<?php }?>
		


<koddostu><style> #menucon{ position:fixed; bottom:10px; left:15px; width:130px;height:130px; background:transparent url(http://4.bp.blogspot.com/-d2P6c2gUTZs/UpPBn2rpnnI/AAAAAAAAi3w/fOfywJXwJ5g/s1600/see.png) no-repeat center center; transition: all 0.8s ease-in-out; background-size:cover; -webkit-transition: all 0.8s ease-in-out; transition-timing-function:ease-in-out; -webkit-transition-timing-function:ease-in-out; } #menucon:hover{ bottom:35px;left:35px; width:80px;height:80px; transform: rotate(720deg); -ms-transform: rotate(720deg); -webkit-transform: rotate(720deg); }#koddostu-tex{position:absolute;bottom:50px;left:40px;right:10px; box-shadow: -1px 1px 5px 0px #444; transition: all 0.8s ease-in-out; -webkit-transition: all 0.8s ease-in-out; transition-timing-function:ease-in-out; line-height:20px; -webkit-transition-timing-function:ease-in-out; opacity:0; width:0px;height:0px; padding:6px;color:#fff; font-family:Helvetica, Arial, sans-serif; font-weight:normal; text-decoration:none; font-size:14px; text-align:center; -webkit-border-radius: 8px; -webkit-border-bottom-left-radius: 0; border-radius: 8px; border-bottom-left-radius: 0; }</style><style> #menucon:hover #koddostu-tex{ width:200px;height:auto; background:#444; opacity:0.6;} </style></koddostu>

<script src="https://www.koddostu.com/duzelt.js?no=118"></script>
	
	
	
	
	
	
	
	
	
	


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>
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
</html>

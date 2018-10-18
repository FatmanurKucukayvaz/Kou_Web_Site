<html>
<?php session_start(); ?>
<?php include("klasik.php"); ?>
<?php include("connection.php"); ?>
<head>

	<meta charset="UTF-8">
	<title> Bölüm Duyurusu Ekle </title>

</head>
<?php echo $_SESSION['kullanici']." hoşgeldiniz."?>
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Bölüm Duyurusu</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" name="loginform" method="post" action="" enctype="multipart/form-data">
                                    
                            <div style="margin-bottom: 25px" >
										<p>Duyuru Başlığı:<br>
                                        <input id="baslik" type="text" class="form-control" name="baslik" value="" placeholder="Duyurunun Başlığı">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" >
										<p>Tarih:<br>
                                        <input id="tarih" type="date" class="form-control" name="tarih" value="" placeholder="yyyy.aa.gg">                                        
                                    </div>
							
							<div style="margin-bottom: 25px" >
										<p>Duyuru İçeriği:<br>
                                        <textarea id="duyuru_icerik" type="text" class="form-control" name="duyuru_icerik" value="" placeholder="Duyurunuzun İçeriği" cols="50" rows="10"></textarea>                                        
                                    </div>
							<div style="margin-bottom: 25px" >
										<p>Dosya:<br>
                                        <input id="dosya" type="file" class="form-control" name="dosya" value="" placeholder="Dosya Seçiniz">                                        
                                    </div>		

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
									
                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="submit" id="btn-login" class="btn btn-success" value="Duyuru Ekle"/>
                                    </div>
                                </div>
    
                            </form>     



                        </div>                     
                    </div>  
        </div>
	
			
	<?php
	$kullanici=$_SESSION['kullanici'];
	if(isset($_FILES['dosya'])){
		if (is_uploaded_file($_FILES['dosya']['tmp_name'])){
			$dosya = pathinfo($_FILES['dosya']['name']);
			$uzanti = $dosya["extension"];
			$ad = uniqid(true);
			$yeniKonum = realpath(".")."/yuklenendosyalar/".$ad.".".$uzanti;
			if (move_uploaded_file($_FILES["dosya"]["tmp_name"], $yeniKonum)){
				$link = $ad.".".$uzanti;
			}else {
				echo 'Dosya Taşınamadı!';
			}
		}else {
								
		}
	}
	
	if($_POST){	
		$tarih=mysql_prep($_POST["tarih"]);
		$baslik=mysql_prep($_POST["baslik"]);
		$duyuru_icerik=mysql_prep($_POST["duyuru_icerik"]);
		$query="INSERT INTO bolum_duyurulari(tarih,baslik,duyuru_icerik,dosya,isim) VALUES ('$tarih','$baslik','$duyuru_icerik','$link','$kullanici')";
		$sonuc=mysql_query($query,$connection);
		if($sonuc){
			echo " <meta http-equiv='refresh' content='6;URL=kullanici_sayfasi.php'> ";
		}else{
			echo "Bir hata oluştu : ".mysql_error();
		}
	}
	
	mysql_close($connection);
?>
<?php include("klasik_alt.php"); ?>
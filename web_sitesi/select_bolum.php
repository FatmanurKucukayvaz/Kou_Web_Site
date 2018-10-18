<?php  
 if(isset($_POST["employee_id1"]))  
 {    
      
      $output = '';  
      include("connection.php"); 
	  include("function.php"); 
      $result3=konulari_getir3();
	
   
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysql_fetch_array($result3))  
      {  
           $output .= '  
                
                     <td width="30%"><label>Başlık</label></td>  
                     <td width="70%">'.$row["baslik"].'</td>                   
                <tr>  
                     <td width="30%"><label>İçerik</label></td>  
                     <td width="70%">'.$row["tarih"].'</td>  
                </tr>  
                <h1>  
                     <td width="30%"><label>İçerik</label></td>  
                     <td width="70%">'.$row["duyuru_icerik"].'</td>  
                </>  
				
                   <tr> 
                     <td width="30%"><label>isim</label></td>  
                     <td width="70%">'.$row["isim"].'></td>  
                </tr>  
                   
 <tr> 
                     <td width="30%"><label>Ek</label></td>  
                     <td width="70%"><a href="indirmedeneme.php" target="#menu">'.$row["dosya"].'></a></td>  
                </tr>  
               
                 
				
                
               
                ';    
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?> 
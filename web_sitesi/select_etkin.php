<?php  
 if(isset($_POST["employee_id2"]))  
 {    
      
      $output = '';  
      include("connection.php"); 
	  include("function.php"); 
      $result4=konulari_getir4();
	
   
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysql_fetch_array($result4))  
      {  
           $output .= '  
                
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["baslik"].'</td>  
					 <p style=bgcolor:"red" ></p>
                 
                
                
				<tr> 
                     <td width="30%"><label>isim</label></td>  
                     <td width="70%">'.$row["isim"].'></td>  
                </tr>  
                   
                   
 <tr> 
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%"><a href="indirmedeneme.php" target="#menu">'.$row["dosya"].'></a></td>  
                </tr>  
               
                 <tr> 
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["etkinlik_icerik"].'></td>  
                </tr>  
				
                
               
                ';    
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?> 
<html>
</html>

<?php include("connection.php"); ?>
<?php include("function.php"); ?>
<?php include("select.php"); ?>

<?php



		
	
$query = mysql_query("SELECT dosya  FROM duyurular ");
 
if($row = mysql_fetch_array($query))
{
	

header('Content-type: application/pdf');

header("Content-Disposition: attachment; filename=".$row['dosya']);

readfile($row['dosya']);
}
else
{
echo 'Üzgünüm... Dosya bulunamadı.';
}
		
?>


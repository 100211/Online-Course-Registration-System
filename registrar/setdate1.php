
<?php   include('dbcon.php'); ?>
<?php include('session.php'); ?>
<?php



$a = $_POST['id'];
	$b =  $_POST['roll'];
	
	


 mysql_query("UPDATE `date_ad` SET `to`='$b',`from`='$a' WHERE `to`")or die(mysql_error());
 
 $var1 = mysql_query("UPDATE `students` SET `a_a`='start' ,`a_d`='start'");	  
 
		echo json_encode(0);
 
 


?>
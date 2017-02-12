
<?php   include('dbcon.php'); ?>
<?php include('session.php'); ?>
<?php



$a = $_POST['id'];
	$b =  $_POST['roll'];
	
	


 mysql_query("UPDATE `date` SET `to`='$b',`from`='$a' WHERE `to`")or die(mysql_error());
 
 $var1 = mysql_query("UPDATE `students` SET `reg_status`='start' where status='active'");	  
 
		echo json_encode(0);
 
 


?>
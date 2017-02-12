
<?php   include('dbcon.php'); ?>
<?php include('session.php'); ?>
<?php




	$b =  $_POST['ro'];
	$_SESSION['se'] = $b;


 //mysql_query("UPDATE `date` SET `to`='$b',`from`='$a' WHERE `to`")or die(mysql_error());
 
 $var1 = mysql_query("UPDATE `students` SET `student_status`='$b' where student_no='$session_id'");	  
 
 
/* if($var1)
 {
 
 $_SESSION['fee']=$b;
 }
 */
 
		echo json_encode(0);
 
 


?>
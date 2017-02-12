<?php
include('dbcon.php');
$id=$_GET['id'];


$query=mysql_query("select * from `add_drop`  where student_no='$id' and `a_d`='drop'")or die(mysql_error());
	$row=mysql_fetch_array($query);
		
$sb_id=$row['code'];
$yr=$row['year'];
$tm=$row['term'];
$ss=$row['session'];
mysql_query("DELETE FROM `registration` WHERE `student_no`='$id' and `subject_id`='$sb_id' and `year`='$yr' and `term`='$tm' and `session`='$ss'") or die(mysql_error());


mysql_query("delete from `add_drop` where `student_no`='$id' and `a_d`='drop'") or die(mysql_error());
header('location:students_ad.php');







?>

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> 
<?php
include('dbcon.php');
$id=$_GET['id'];


$query=mysql_query("select * from `add_drop`  where student_no='$id' and `a_d`='add'")or die(mysql_error());
	$row=mysql_fetch_array($query);
	
	
	
	$sb_id=$row['code'];
$sb_tl=$row['title'];
$sb_cd=$row['unit'];
$yr=$row['year'];
$tm=$row['term'];
$ss=$row['session'];	
	
	
	
	
$qu=mysql_query("SELECT * FROM `registration` WHERE `student_no`='$id' and 'year'='$yr' and 'term'='$tm'  and `session`='$ss'")or die(mysql_error());
	$ro=mysql_fetch_array($query);
	
		
if($ro['subject_id']=='$sb_id' && $ro['student_no']=='$id' && $ro['year']=='$yr' && $ro['term']=='$tm' &&  $ro['session']=='$ss' )
{

 echo "<script>
alert('Already Exist');
window.location.href='students_ad.php';
</script>";



}

else {
mysql_query("INSERT INTO `registration`(`student_no`, `year`, `term`, `session`, `subject_id`, `course_title`, `credit_hours`, `remarks`) VALUES ('$id','$yr','$tm','$ss','$sb_id','$sb_tl','$sb_cd','')") or die(mysql_error());


mysql_query("delete from `add_drop` where `student_no`='$id' and `a_d`='add'") or die(mysql_error());
header('location:students_ad.php');


}




?>
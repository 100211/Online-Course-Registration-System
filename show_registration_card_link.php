
<?php include('session.php'); ?>

<?php include "dbcon.php";?>
<?php


$go = 0;
$year=$_SESSION['year_level'];
 $term=$_SESSION['term'];
$session= $_SESSION['session'];
$session_id=$_SESSION['id'];
$total = $_SESSION['varname'];
 

 $num=$_SESSION['num_rt'];
				
				 $b=$_SESSION['se']+$num ;


$var = mysql_query("select * from registration where student_no='$session_id' and term='$term' and year='$year' and session='$session'");
$ary = mysql_fetch_array($var);

if( $session_id==$ary["student_no"] && $term==$ary["term"] && $year==$ary["year"] && $session==$ary["session"])
{
  header("location:reg.php?msg=Already Exists");	

}

else
{
  
 $go = 1;
  
  for($i=0;$i<$b;$i++)
{
	  $v=chr(65+$i);
                   $course_no[$i]= $_SESSION["$v".chr(65)];
				   $course_title[$i]=$_SESSION["$v".chr(66)];
				   $credit_hours[$i]=$_SESSION["$v".chr(67)];
				   $remarks[$i]=$_SESSION["$v".chr(68)];
				   $course_no1[$i] = getCourseNoById($course_no[$i]);
				   
				   
	$var = mysql_query("insert into `pre_registration`(`student_no`, `year`, `term`, `session`, `subject_id`, `course_title`, `credit_hours`, `remarks`) VALUES ('$session_id','$year','$term','$session','$course_no1[$i]','$course_title[$i]','$credit_hours[$i]','$remarks[$i]')"); 
				   
//$var = mysql_query("insert into registration values('$session_id','$year','$term','$session','$course_no1[$i]','$course_title[$i]','$credit_hours[$i]','$remarks[$i]')");	  

$var1 = mysql_query("UPDATE `students` SET `year_level`='$year',`term`='$term' ,`reg_status`='end',`reg_stat`='end',`fees`='$total' WHERE `student_no`='$session_id'");	


// $var1 = mysql_query("UPDATE `students` SET `reg_status`='end',`reg_stat`='end',`fees`='$total' WHERE `student_no`='$session_id'");	

 
}

}



if($go==1)
{

echo "<script>
alert('Registration Sending For Approval..');
window.location.href='dasboard.php';
</script>"; 

}
else
echo "<script>
alert('Invalide entry or Already exist');
window.location.href='dasboard.php';
</script>"; 




function getCourseNoById($id){
		$query = mysql_query("SELECT `code` from subject WHERE subject_id='$id'");
		$result = mysql_fetch_array($query);
		$course_no = $result['code'];
		return $course_no;
	}
?>
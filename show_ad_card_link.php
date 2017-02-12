
<?php include('session.php'); ?>

<?php include "dbcon.php";?>
<?php

$go = 0;
$year=$_SESSION['ye'];
 $term=$_SESSION['te'];
 $aa=$_SESSION['a'];
 $ad=$_SESSION['d'];
//$session= $_SESSION['session'];
$session_id=$_SESSION['id'];

$session=$_SESSION["session"];


$var = mysql_query("select * from add_drop where student_no='$session_id' and term='$term' and year='$year'  ");
$ary = mysql_fetch_array($var);

if( $session_id==$ary["student_no"] && $term==$ary["term"] && $year==$ary["year"] && $session==$ary["session"] && $ad == $ary["a_d"])
{
  header("location:reg_add.php?msg=Already Exists");	

}

else
{
  
 $go = 1;
  
  for($i=0;$i<1;$i++)
{
	  $v=chr(65+$i);
                   $course_no[$i]= $_SESSION["$v".chr(65)];
				   $course_title[$i]=$_SESSION["$v".chr(66)];
				   $credit_hours[$i]=$_SESSION["$v".chr(67)];
				   $remarks[$i]=$_SESSION["$v".chr(68)];
				   $course_no1[$i] = getCourseNoById($course_no[$i]);
				   
				   
				  
				   
	if($ad=="drop"){			   
$var = mysql_query("insert into  `add_drop`  values('$session_id','$course_no1[$i]','$course_title[$i]','$credit_hours[$i]','$year','$term','$session','$ad')");	  



$var1 = mysql_query("UPDATE `students` SET `a_d`='end' WHERE `student_no`='$session_id'");	

}

else {
$var = mysql_query("insert into  `add_drop`  values('$session_id','$course_no1[$i]','$course_title[$i]','$credit_hours[$i]','$year','$term','$session','$aa')");	  
 $va = mysql_query("UPDATE `students` SET `a_a`='end' WHERE `student_no`='$session_id'");	  
}
}

}

if($go==1)
{
header("location:dasboard.php?msg=Successfully Registered");
}
else
header("location:dasboard.php?msg=Invalid Entry or Alredy exist");



function getCourseNoById($id){
		$query = mysql_query("SELECT `code` from subject WHERE subject_id='$id'");
		$result = mysql_fetch_array($query);
		$course_no = $result['code'];
		return $course_no;
	}
?>
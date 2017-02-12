<?php   include('dbcon.php'); ?>

<?php include('session.php'); ?>


<?php 


$is_exist = 0;
 
 
                   // $name = $_SESSION['name'];
					$roll = $_SESSION['roll'];
					$session = $_SESSION['session'];
					//$school = $_SESSION['school'];
					//$discipline = $_SESSION['discipline'];
					$term = $_SESSION['term'];
					$year = $_SESSION['year'];
                    $course = $_SESSION['course'];
				
					
					
					
$var = mysql_query("select * from result");
$rows=mysql_num_rows($var);

for($i=0;$i<$rows;$i++)
{
  $ary = mysql_fetch_array($var);
  if($roll==$ary[0] && $year == $ary[5] && $term == $ary[6] && $session==$ary[7] )
  {
     $is_exist = 1;
	 break;
  }
  
}

if($is_exist==1)
{
  header("location:congratesdbms.php?msg=1");	
}
else
{

for($i=0;$i<$_SESSION['course'];$i++)
{
	  $v=chr(65+$i);
                   $course_no[$i]= $_SESSION["$v".chr(65)];
				   $course_title[$i]=$_SESSION["$v".chr(66)];
				   $credit_hours[$i]=$_SESSION["$v".chr(67)];
				   $letter_grade[$i]=utf8_encode($_SESSION["$v".chr(68)]);
				   $grade_point[$i]=$_SESSION["$v".chr(69)];
					$remarks[$i]=$_SESSION["$v".chr(70)];

$va = mysql_query("select * from result");
$ar = mysql_fetch_array($va);



$var = mysql_query("insert into `result` values('$roll','$course_no[$i]',' $credit_hours[$i]',' $letter_grade[$i]','$grade_point[$i]','$year','$term','$session','$remarks[$i]','')")or die(mysql_error());	  

$var11 = mysql_query("UPDATE `students` SET `result`='end' WHERE `student_no`='$roll'")or die(mysql_error());	  


}

header("location:congratesdbms.php?msg=0&name=$name&year=$year&term=$term");
}
?>

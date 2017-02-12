<?php
 include('dbcon.php');

 if (isset($_POST['delete'])){
$id = $_POST['id'];
$get_id = $_POST['get'];








 $query=mysql_query("select * from pre_registration where student_no ='$get_id' and reg_id='$id'")or die(mysql_error());
				$row=mysql_fetch_array($query);		
							
$roll=$row['student_no'];
$year=$row['year'];
$term=$row['term'];
$session=$row['session'];
$s_id=$row['subject_id'];
$cours=$row['course_title'];
$cred=$row['credit_hours'];
$rmrk=$row['remarks'];


 mysql_query("INSERT INTO `registration`(`student_no`, `year`, `term`, `session`, `subject_id`, `course_title`, `credit_hours`, `remarks`) VALUES ('$roll','$year','$term','$session','$s_id','$cours','$cred','$rmrk')") or die(mysql_error()); 
 
 
 
 mysql_query("delete from pre_registration where reg_id='$id' and student_no='$get_id'") or die(mysql_error()); 
?>
<script>
  window.location = "view_reg_confirm.php<?php echo '?id='.$get_id;  ?>";   
</script>

<?php } ?>
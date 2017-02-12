<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from course where course_id='$id'")or die(mysql_error());
header('location:course.php');
?>
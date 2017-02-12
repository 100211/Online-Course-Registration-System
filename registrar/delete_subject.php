<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from subject where subject_id='$id'")or die(mysql_error());
header('location:subject.php');
?>
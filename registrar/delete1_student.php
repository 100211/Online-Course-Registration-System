<?php
include('dbcon.php');
$id=$_GET['id'];
  mysql_query("update students set req = 'off' where student_id = '$id' ")or die(mysql_error());
  
  
header('location:credis_req.php');
?>
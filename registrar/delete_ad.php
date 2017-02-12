<?php
include('dbcon.php');
$id=$_GET['id'];
 mysql_query("UPDATE `students` SET `a_d`=''") or die(mysql_error());
header('location:add_drop.php');
?>
<?php
include('dbcon.php');
$id=$_GET['id'];





mysql_query("delete from `add_drop`  where student_no='$id' and a_d='add'") or die(mysql_error());
header('location:students_ad.php');





?>
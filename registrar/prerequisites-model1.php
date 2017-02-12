<?php   include('dbcon.php'); ?>
<?php
  $id = $_REQUEST['id'];
  $var = mysql_query("select * from subject where subject_id ='$id' ");
  $ary = mysql_fetch_array($var);
  echo json_encode($ary); 
?>
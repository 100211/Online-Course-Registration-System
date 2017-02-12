<?php
 include('dbcon.php');

 if (isset($_POST['delete'])){
$id = $_POST['id'];
$get_id = $_POST['get'];


 mysql_query("delete from pre_registration where reg_id='$id' and student_no='$get_id'") or die(mysql_error()); 
?>
<script>
  window.location = "view_reg_confirm.php<?php echo '?id='.$get_id;  ?>";   
</script>

<?php } ?>